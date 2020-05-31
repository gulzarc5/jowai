@extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
        <meta name="description" content="Assambigmart">
    @endsection

    @section('content')
		

		<section class="section-main block4">
            <h1>Previous Result</h1>
            <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <table class="wd-40">
                <thead>
                    <tr>
                        <td>City</td>
                        <td>Date</td>
                        <td>S/R</td>
                        <td>S/R</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Shillong Night</td>
                        <td><strong>21/05/20</strong></td>
                        <td>45</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Shillong Night</td>
                        <td><strong>21/05/20</strong></td>
                        <td>45</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Shillong Night</td>
                        <td><strong>21/05/20</strong></td>
                        <td>45</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Shillong Night</td>
                        <td><strong>21/05/20</strong></td>
                        <td>45</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Shillong Night</td>
                        <td><strong>21/05/20</strong></td>
                        <td>45</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Shillong Night</td>
                        <td><strong>21/05/20</strong></td>
                        <td>45</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Shillong Night</td>
                        <td><strong>21/05/20</strong></td>
                        <td>45</td>
                        <td>55</td>
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