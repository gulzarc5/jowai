@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="row">

    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
            <h2>Last Ten Teer Result</h2>
            <div class="clearfix"></div>
        </div>
        <div>
          <div class="x_content">
            <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Date</th>
                    <th>FR</th>
                    <th>SR</th>
                </tr>
              </thead>
              <tbody class="form-text-element">
                  
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
            <h2>Last Ten Calender Details</h2>
            <div class="clearfix"></div>
        </div>
        <div>
          <div class="x_content">
            <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Date</th>
                    <th>Day</th>
                    <th>TURA TEER </th>
                </tr>
              </thead>
              <tbody class="form-text-element">
                  
              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

   
  </div>
</div>
 @endsection

 @section('script')
    
 @endsection