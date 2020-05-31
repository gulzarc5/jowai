@extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
        <meta name="description" content="Assambigmart">
    @endsection

    @section('content')
       
        <!-- Showcase of work block -->

        <section class="section-main block4">
            <h1>A Compilation of Dream Meanings</h1>
            <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <table class="wd-40">
                <thead>
                    <tr>
                        <td colspan="4" style="background-color: #413371;">Dream Meanings</td>
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
                    <tr>
                        <td>Quar</td>
                        <td>03, 08, 13, 37, 40, 73</td>
                        <td>15</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Fish</td>
                        <td>03, 08, 13, 37, 40, 73</td>
                        <td>48</td>
                        <td>78</td>
                    </tr>
                    <tr>
                        <td>Quarrel</td>
                        <td>03, 08, 13, 37, 40, 73</td>
                        <td>48</td>
                        <td>78</td>
                    </tr>
                    <tr>
                        <td>Wife</td>
                        <td>03, 08, 13, 37, 40, 73</td>
                        <td>48</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Husband</td>
                        <td>03, 08, 13, 37, 40, 73</td>
                        <td>48</td>
                        <td>78</td>
                    </tr>
                    <tr>
                        <td>Tween</td>
                        <td>03, 08, 13, 37, 40, 73</td>
                        <td></td>
                        <td>78</td>
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