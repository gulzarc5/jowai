
@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12" style="margin-top:10px;">
            <div class="x_panel">

                {{-- <div class="x_title">
                    @if(isset($sub_category) && !empty($sub_category))
                        <h2>Update Sub Category</h2>
                    @else
                        <h2>Add New Sub Category</h2>
                    @endif
                    <div class="clearfix"></div>
                </div> --}}

                 <div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                </div>

                <div>
                    <div class="x_content">                      
                        {{ Form::open(['method' => 'post','route'=>'admin.result_insert','enctype'=>'multipart/form-data']) }}              
                        
                        <center><h2>Add New Result</h2></center>
                        <div class="well" style="overflow: auto">
                            <div class="form-row mb-10">

                                <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <label for="number">Number</label>
                                    <input type="number" class="form-control" name="number"  placeholder="Enter Number"  value="{{ old('number') }}" required>
                                    @if($errors->has('number'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('number') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <label for="type">Select Type</label>
                                    <select  class="form-control" name="type" required>
                                        <option value="">Please Select Type</option>
                                        <option value="1">FR</option>
                                        <option value="2">SR</option>
                                    </select>
                                    @if($errors->has('type'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 mb-3" style="margin-top: 20px;">
                                    {{ Form::submit('Submit', array('class'=>'btn btn-success')) }}
                                </div>

                            </div>
                        </div>                       

                     
                        {{ Form::close() }}
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xs-12 col-sm-12" >
            <div class="x_panel">
                <div class="x_title">
                    <h2>Results</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <div class="x_content">
                        <table id="result_table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Date</th>
                                <th>FR</th>
                                <th>SR</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>                       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>
 @endsection

 @section('script')
     
     <script type="text/javascript">
         $(function () {
    
            var table = $('#result_table').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: 50,
                ajax: "{{ route('admin.result_list_ajax') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},      
                    {data: 'added_date', name: 'added_date',searchable: true},    
                    {data: 'fr', name: 'fr',searchable: true},          
                    {data: 'sr', name: 'sr',searchable: true},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });            
        });
     </script>
 @endsection