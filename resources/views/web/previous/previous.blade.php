@extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
        <meta name="description" content="Assambigmart">
    @endsection

    @section('content')
		

		<section class="section-main block4">
            <h1>Previous Result</h1>
            <p></p>
            <table class="wd-40">
                <thead>
                    <tr>
                        <td>City</td>
                        <td>Date</td>
                        <td>F/R</td>
                        <td>S/R</td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($result) && !empty($result) && (count($result) > 0))
                        @foreach ($result as $item)
                        <tr>
                            <td>Jowai</td>
                            <td><strong>{{ Carbon\Carbon::parse($item->added_date)->format('d-m-Y')}}</strong></td>
                            <td>{{$item->fr}}</td>
                            <td>{{$item->sr}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="4">{!! $result->onEachSide(2)->links() !!}</td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="4" align="center">No Result Found</td>
                        </tr>
                    @endif
                </tbody>
            </table>            
        </section>

        <section class="section-main block2">
            @include('web.include.midnav')
        </section>
	
	@endsection
	
	@section('script')
	@endsection	