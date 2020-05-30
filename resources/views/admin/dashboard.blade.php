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
                @if (isset($result) && !empty($result) && (count($result) > 0))
                @php
                    $count = 1;
                @endphp
                    @foreach ($result as $item)
                    <tr>
                      <td>{{$count++}}</td>
                      <td>{{$item->added_date}}</td>
                      <td>{{$item->fr}}</td>
                      <td>{{$item->sr}}</td>
                    </tr>
                    @endforeach
                @else
                <tr>
                  <td colspan="4" align="center">No Data Found</td>
                </tr>
                @endif
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
                    <th>JOWAI TEER </th>
                </tr>
              </thead>
              <tbody class="form-text-element">
                  @if (isset($calender) && !empty($calender) && (count($calender) > 0))
                  @php
                      $count = 1;
                  @endphp
                      @foreach ($calender as $item)
                      @php
                        $d = new DateTime($item->play_date);
                      @endphp 
                          <tr>
                            <td>{{$count++}}</td>
                            <td>{{$item->play_date}}</td>
                            <td>{{$d->format('l')}}</td>
                            <td>
                              @if ($item->status == '1')
                                <button class="btn btn-sm btn-primary">YES</button>
                              @else
                                <button class="btn btn-sm btn-danger">NO</button>
                              @endif
                            </td>
                          </tr>
                      @endforeach
                  @else
                      <tr>
                        <td colspan="4" align="center">No Data Found</td>
                      </tr>
                  @endif
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