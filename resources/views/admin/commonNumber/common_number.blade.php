
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
                        {{ Form::open(['method' => 'post','route'=>'admin.common_number_update']) }}              
                        
                        <center><h2>Common Number</h2></center>
                        <div class="well" style="overflow: auto">
                            <div class="form-row mb-10">

                                <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                    <label for="type">Select Number Type</label>
                                    <select  class="form-control" name="type" required>
                                        <option value="">Please Select Number Type</option>
                                        <option value="1">Number 1</option>
                                        <option value="2">Number 2</option>
                                    </select>
                                    @if($errors->has('type'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="direct">Direct</label>
                                    <input type="text" class="form-control" name="direct"  placeholder="Enter Direct Number"  value="{{ old('direct') }}" required>
                                    @if($errors->has('direct'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('direct') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="house">House</label>
                                    <input type="text" class="form-control" name="house"  placeholder="Enter House Number"  value="{{ old('house') }}" required>
                                    @if($errors->has('house'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('house') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="ending">Ending</label>
                                    <input type="ending" class="form-control" name="ending"  placeholder="Enter Ending Number"  value="{{ old('ending') }}" required>
                                    @if($errors->has('ending'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('ending') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                

                                <div class="col-md-12 col-sm-12 col-xs-12 mb-3" style="margin-top: 20px;">
                                    {{ Form::submit('Update', array('class'=>'btn btn-success')) }}
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
                    <h2>Common Number</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <div class="x_content table-responsive">
                        <table  class="table table-striped jambo_table bulk_action" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Direct</th>
                                <th>House</th>
                                <th>Ending</th>
                            </tr>
                            </thead>
                            <tbody>   
                                @if (isset($commonNumber) && !empty($commonNumber))
                                    @foreach ($commonNumber as $item)
                                        <tr>
                                            <td>Number {{$item->id}}</td>
                                            <td>{{$item->added_date}}</td>
                                            <td>{{$item->direct}}</td>
                                            <td>{{$item->house}}</td>
                                            <td>{{$item->ending}}</td>
                                        </tr>
                                    @endforeach
                                @endif                    
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
