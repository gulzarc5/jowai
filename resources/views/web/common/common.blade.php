@extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Assambigmart">
  @endsection

  @section('content')
 
        <!-- Showcase of work block -->

        <section class="section-main block4">
            <h1>Common Number</h1>
            <p><strong>Update on : </strong>30-05-2020</p>
            <table class="wd-40">
                <thead>
                    <tr>
                        <td colspan="4" style="background-color: #413371;">Shillong Night</td>
                    </tr>
                    <tr>
                        <td>Dream</td>
                        <td>Direct</td>
                        <td>House</td>
                        <td>Ending</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>And</td>
                        <td>03, 08, 13, 37, 40, 73</td>
                        <td></td>
                        <td>55</td>
                    </tr>
                </tbody>
            </table>  
            <br><br>
            <table class="wd-40">
                <thead>
                    <tr>
                        <td>Dream</td>
                        <td>Direct</td>
                        <td>House</td>
                        <td>Ending</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>And</td>
                        <td>03, 08, 13, 37, 40, 73</td>
                        <td></td>
                        <td>55</td>
                    </tr>
                </tbody>
            </table> 
            <p>Disclaimer : These common numbers are purely based on certain calculations done using past results. There is no guarantee of the accuracy of these numbers.</p>         
        </section>

        <section class="section-main block2">
            @include('web.include.midnav')
        </section>
	
	@endsection
	
	@section('script') 
	@endsection
	