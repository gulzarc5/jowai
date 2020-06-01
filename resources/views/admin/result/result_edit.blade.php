
@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12" style="margin-top:10px;">
            <div class="x_panel">
                 <div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                </div>

                <div>
                    <div class="x_content">
                        @if (isset($result) && !empty($result))

                        {{Form::model($result, ['method' => 'put','route'=>['admin.result_update',$result->id],'enctype'=>'multipart/form-data'])}}
                        
                        <center><h2>Edit Result</h2></center>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control"   placeholder="Enter Number"  value="{{ $result->added_date }}" disabled>
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="fr">FR</label>
                                    <input type="fr" class="form-control" name="fr"  placeholder="Enter fr"  value="{{ $result->fr }}">
                                    @if($errors->has('fr'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('fr') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    Time FR
                                    <div class="form-group">
                                        <div class='input-group date' id='myDatepicker3'>
                                        <input type='text' class="form-control" name="added_time_fr" value="{{$result->add_time_fr}}" />
                                            <span class="input-group-addon">
                                               <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    @if($errors->has('added_time_fr'))
                                        <span  role="alert" style="color:red">
                                            <strong>{{ $errors->first('added_time_fr') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="sr">SR</label>
                                    <input type="sr" class="form-control" name="sr"  placeholder="Enter sr"  value="{{ $result->sr }}">
                                    @if($errors->has('sr'))
                                        <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first('sr') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    Time SR
                                    <div class="form-group">
                                        <div class='input-group date' id='myDatepicker4'>
                                            <input type='text' class="form-control" name="added_time_sr" value="{{$result->add_time_sr}}"/>
                                            <span class="input-group-addon">
                                               <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    @if($errors->has('added_time_sr'))
                                        <span  role="alert" style="color:red">
                                            <strong>{{ $errors->first('added_time_sr') }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 mb-3" style="margin-top: 20px;">
                                    @if(isset($sub_category) && !empty($sub_category))
                                        {{ Form::submit('Save', array('class'=>'btn btn-success')) }}
                                    @else
                                        {{ Form::submit('Submit', array('class'=>'btn btn-success')) }}
                                    @endif
                                    <a href="{{route('admin.result_list')}}" class="btn btn-warning">Back</a>
                                </div>  
                        {{ Form::close() }}
                            
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>
 @endsection

 @section('script')
     <script>
        $('#myDatepicker3').datetimepicker({
            format: 'hh:mm A'
        });

        $('#myDatepicker4').datetimepicker({
            format: 'hh:mm A'
        });
     </script>
 @endsection

