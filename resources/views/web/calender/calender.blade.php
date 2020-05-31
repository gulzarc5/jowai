@extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Assambigmart">
  @endsection

  @section('content')

        <!-- Showcase of work block -->

        <section class="section-main block4">
            <h1>Teer Calendar</h1>
            <p><strong>Update on : </strong>30-05-2020</p>
            <table class="wd-40">
                <thead>
                    <tr>
                        <td colspan="4" style="background-color: #413371;">Shillong Night</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>Day</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td><strong>30-05-20</strong></td>
                        <td>Sunday</td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>  
        </section>

        <section class="section-main block2">
            @include('web.include.midnav')
        </section>
	
	@endsection
	
	@section('script') 
	@endsection
	