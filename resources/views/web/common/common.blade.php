@extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Assambigmart">
  @endsection

  @section('content')
 
        <!-- Showcase of work block -->

        <section class="section-main block4">
            <h1>Common Number</h1>
            @if (isset($commonNumber1) && !empty($commonNumber1))
            <p><strong>Date : </strong>{{ Carbon\Carbon::parse($commonNumber1->added_date)->format('d-m-Y')}}</p>
            <table class="wd-40">
                <thead>
                    <tr>
                        <td colspan="4" style="background-color: #413371;">Shillong Night</td>
                    </tr>
                    <tr>
                        <td>Direct</td>
                        <td>House</td>
                        <td>Ending</td>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td>{{$commonNumber1->direct}}</td>
                            <td>{{$commonNumber1->house}}</td>
                            <td>{{$commonNumber1->ending}}</td>
                        </tr>
                    
                </tbody>
            </table>  
            @endif
            <br><br>
            @if (isset($commonNumber2) && !empty($commonNumber2))
            <p><strong>Date : </strong>{{ Carbon\Carbon::parse($commonNumber2->added_date)->format('d-m-Y')}}</p>
            <table class="wd-40">
                <thead>
                    <tr>
                        <td colspan="4" style="background-color: #413371;">Shillong Night</td>
                    </tr>
                    <tr>
                        <td>Direct</td>
                        <td>House</td>
                        <td>Ending</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$commonNumber2->direct}}</td>
                        <td>{{$commonNumber2->house}}</td>
                        <td>{{$commonNumber2->ending}}</td>
                    </tr>
                </tbody>
            </table> 
            @endif
            <p>Disclaimer : These common numbers are purely based on certain calculations done using past results. There is no guarantee of the accuracy of these numbers.</p>         
        </section>

        <section class="section-main block2">
            @include('web.include.midnav')
        </section>
	
	@endsection
	
	@section('script') 
	@endsection
	