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
                    @if (isset($calender) && !empty($calender) && (count($calender) > 0 ))
                        @foreach ($calender as $item)
                            @php
                                $d = new DateTime($item->play_date);
                            @endphp 
                            <tr>
                                <td><strong>{{ Carbon\Carbon::parse($item->play_date)->format('d-m-Y')}}</strong></td>
                                <td>{{$d->format('l')}}</td>
                                <td>
                                    @if ($item->status == '1')
                                        YES
                                    @else
                                        NO
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4">{!! $calender->onEachSide(2)->links() !!}</td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="3" align="center"></td>
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
	