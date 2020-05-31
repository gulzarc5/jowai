@extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Assambigmart">
  @endsection

  @section('content')

        
        <!-- Showcase of work block -->
        <section class="section-main block1">
            <h1 class="entry-title" itemprop="headline">Khanapara Teer Result Today Number | Assam Teer Result for Guwahati Archery</h1>
            <p>As the archery is getting popularity in India, more and more people wants to know the Khanapara teer result today number. We are the fastest provider of Assam teer result for Guwahati.</p>
            <p>As the archery is getting popularity in India, more and more people wants to know the Khanapara teer result today number. We are the fastest provider of Assam teer result for Guwahati.</p>
        </section>

        @if (isset($today_result) && !empty($today_result))
            <section class="section-main block2">
                <h1>Khanapara Teer Result</h1>
                <p><strong>Updated on</strong>: {{Carbon\Carbon::parse($today_result->added_date)->format('d-m-Y')}}</p>
                <table>
                    <thead>
                        <tr>
                            <td>F/R (4:00PM)</td>
                            <td>S/R (4:45PM)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                @if (!empty($today_result->fr))
                                    <strong>{{$today_result->fr}}</strong>
                                @else
                                    <strong>XX</strong>
                                @endif                                
                            </td>
                            <td>
                                @if (!empty($today_result->sr))
                                    <strong>{{$today_result->sr}}</strong>
                                @else
                                    <strong>XX</strong>
                                @endif  
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong><div><a href="{{route('web.common.common')}}"><button style="cursor: pointer;">Common Number today</button></a></div></strong></td>
                        </tr>
                    </tbody>
                </table>
                <p>For those who don’t know about this. It’s an bow and arrow game in which getting success is golden dreams for people living in Northeast India. In the Khanapara teer, players are always eager to improve their game to score better.</p>
            </section>
        @endif

        <section class="section-main block2">
            @include('web.include.midnav')
        </section>

        <section class="section-main block4">
            <h1>Teer Result for Last 7 days</h1>
            <p><img class="inline" src="web/images/logo1.png"> Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <table class="wd-40">
                <thead>
                    <tr>
                        <td>Date</td>
                        <td>F/R</td>
                        <td>S/R</td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($prev_result) && !empty($prev_result) && (count($prev_result) > 0))
                        @foreach ($prev_result as $item)
                            <tr>
                                <td><strong>{{Carbon\Carbon::parse($item->added_date)->format('d-m-Y')}}</strong></td>
                                <td>{{$item->fr}}</td>
                                <td>{{$item->sr}}</td>
                            </tr>
                        @endforeach
                    @else   
                        <tr>
                            <td colspan="3" align="center">No Previous Result Found</td>
                        </tr>
                    @endif
                    <tr>
                    <td colspan="3"><strong><div><a href="{{route('web.previous.previous')}}"><button style="cursor: pointer;">Get Complete List</button></a></div></strong></td>
                    </tr>
                </tbody>
            </table>            
            <p>Lpsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </section>
        
        <section class="section-main block1 block5">
            <div>
                <h1 class="entry-title" itemprop="headline">Khanapara Teer Result Today Number | Assam Teer Result for Guwahati Archery</h1><br>
                <p><img class="inline" src="web/images/archy.png"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                <p>As the archery is getting popularity in India, more and more people wants to know the Khanapara teer result today number. We are the fastest provider of Assam teer result for Guwahati.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
            </div>
            <div class="img-div"><img src="web/images/archy2.png"><img src="web/images/archy3.png"></div>            
            <div>
                <h1 class="entry-title" itemprop="headline">"Neque porro quisquam est qui dolorem ipsum quia dolor."</h1><br>
                <p><img class="inline" src="web/images/target.png" style="float: right;width: 15%;;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                <p>As the archery is getting popularity in India, more and more people wants to know the Khanapara teer result today number. We are the fastest provider of Assam teer result for Guwahati.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
            </div>            
            <div class="joinus">
                <h3>Join us on Facebook/WhatsApp</h3><br>
                <figure style="display:flex;justify-content:center">
                    <a><img src="web/images/facebook.png"></a>
                    <a><img src="web/images/whatsapp.png"></a>
                </figure>
            </div>

        </section>
	
	@endsection
	
	@section('script') 
	@endsection
	