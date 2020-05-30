
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
                        {{ Form::open(['method' => 'post','route'=>'admin.calender_add']) }}              
                        
                        <center><h2>Add New date in calender</h2></center>
                        <div class="well" style="overflow: auto">
                            <div class="form-row mb-10">

                                <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <label for="date">Select Date</label>
                                    <input type="date" class="form-control" name="date"  value="{{ old('date') }}" required>
                                    @if($errors->has('date'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <label for="status">Select Yes / No</label>
                                    <select  class="form-control" name="status" required>
                                        <option value="">Please Select Yes / No</option>
                                        <option value="1">YES</option>
                                        <option value="2">NO</option>
                                    </select>
                                    @if($errors->has('status'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('status') }}</strong>
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
                    <h2>TEER CALENDAR</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <div class="x_content">
                        <table id="result_table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Date</th>
                                <th>Status</th>
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
                ajax: "{{ route('admin.calender_list_ajax') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},      
                    {data: 'play_date', name: 'play_date',searchable: true},           
                    {data: 'status_tab', name: 'status_tab',searchable: true},
                ]
            });            
        });
     </script>
 @endsection