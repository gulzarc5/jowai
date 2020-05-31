
@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:10px;">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Contact Request</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <div class="x_content">
                        <table id="result_table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
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
                ajax: "{{ route('admin.contact_list_ajax') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},      
                    {data: 'created_at', name: 'created_at',searchable: true},    
                    {data: 'name', name: 'name',searchable: true},          
                    {data: 'email', name: 'email',searchable: true},
                    {data: 'message', name: 'message', orderable: false, searchable: false},
                ]
            });            
        });
     </script>
 @endsection