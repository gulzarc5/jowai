@extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Juwaibigmart">
  @endsection

  @section('content')

        
        <!-- Showcase of work block -->
        <section class="section-main block1">
            <h1 class="entry-title" itemprop="headline">Juwai Teer Result Today Number | Juwai Teer Result for Juwai Archery</h1>
            <p>As the archery is getting popularity in India, more and more people wants to know the Juwai teer result today number. We are the fastest provider of Juwai teer result for Juwai.</p>
            <p>People who are curious to know results of today’s teer for their state are always keen for the final judgments (as well as previous results). We are here to deliver the latest 2020 NEWS and daily outcome for teer of Juwai teer.</p>
        </section>

        @if (isset($today_result) && !empty($today_result))
            <section class="section-main block2">
                <h1>Juwai Teer Result</h1>
                <p><strong>Updated on</strong>: {{Carbon\Carbon::parse($today_result->added_date)->format('d-m-Y')}}</p>
                <table>
                    <thead>
                        <tr>
                            <td>F/R ({{$today_result->add_time_fr}})</td>
                            <td>S/R ({{$today_result->add_time_sr}})</td>
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
                <p>For those who don’t know about this. It’s an bow and arrow game in which getting success is golden dreams for people living in Northeast India. In the Juwai teer, players are always eager to improve their game to score better.</p>
            </section>
        @endif

        <section class="section-main block2">
            @include('web.include.midnav')
        </section>

        <section class="section-main block4">
            <h1>Teer Result for Last 7 days</h1>
            <p><img class="inline" src="web/images/logo1.png"> So you have seen the latest Juwai news, but what about the old ones? Well no worries at all. We are here to deliver all the previous result (full list) for this state. You can see the Juwai teer previous result list by month and year wise below. Alternatively you can use menu to locate them as well.</p>
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
                <h1 class="entry-title" itemprop="headline">Juwai Teer Result Today Number | Juwai Teer Result for Juwai Archery</h1><br>
                <p><img class="inline" src="web/images/archy.png"> The Teer of Juwai is a quite big area in which several states play this sport. The people are always looking for archery outcomes on daily basis in the morning and evening. The teer news and Juwai teer result is provided here on daily basis. People are quite excited to know the final judgment figures for Juwai.</p>
            </div>
            <div class="img-div"><img src="web/images/archy2.png"><img src="web/images/archy3.png"></div>            
            <div>
                <p><img class="inline" src="web/images/target.png" style="float: right;width: 15%;;"> So we have categorized the final numerals in different tables. These tables are daily processed and gets a new Juwai result field on the top. Moreover, we have several guides on the Indian archery. We hope this will surely help you. So get today archery number for teer Juwai along with its counter and target information here</p>
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
	