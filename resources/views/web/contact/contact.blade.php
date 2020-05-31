@extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Assambigmart">
  @endsection

  @section('content')

        <!-- Showcase of work block -->
        <section class="section-main block1">
            <h1 class="entry-title" itemprop="headline">Contact Us</h1>
            <div class="contact-tab">
                <div class="contact-left">
                    <h2>Email</h2>
                    <p>contact@example.xyz</p>           
                    <div class="joinus">
                        <h3>Join us on Facebook/WhatsApp</h3><br>
                        <figure>
                            <a><img src="web/images/facebook.png"></a>
                            <a><img src="web/images/whatsapp.png"></a>
                        </figure>
                    </div>
                </div>
                {{ Form::open(['method' => 'post','route'=>'web.contact.add']) }} 
                    <div class="contact-right">
                        @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter Your Name" value="{{old('name')}}">
                        @if($errors->has('name'))
                            <span  role="alert" style="color:red">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @enderror
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email" value="{{old('email')}}">
                        @if($errors->has('email'))
                            <span  role="alert" style="color:red">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @enderror
                        <label for="">Messsage</label>
                        <textarea name="message" cols="30" rows="7" placeholder="Type Message Here">{{old('message')}}</textarea>
                        @if($errors->has('message'))
                            <span  role="alert" style="color:red">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @enderror
                        <button style="cursor:pointer">Send</button>
                    </div>
                {{ Form::close() }}
            </div>
        </section>

        <section class="section-main block2">
            <div class="row">
                <div class="col-md-3">                    
                    <div class="card">		
                        <div class="card_content">                    
                            <div class="crad_front">            
                                <img src="web/images/icon1.png" alt="icon">            
                                <h3 class="card-title">Common Number</h3>
                                <a>Check Now</a>                        
                            </div>                    
                        </div>                
                    </div>
                </div>
                <div class="col-md-3">                    
                    <div class="card">		
                        <div class="card_content">                    
                            <div class="crad_front">            
                                <img src="web/images/icon2.png" alt="icon">            
                                <h3 class="card-title">Dream Number</h3>
                                <a>Check Now</a>                        
                            </div>                    
                        </div>                
                    </div>
                </div>
                <div class="col-md-3">                    
                    <div class="card">		
                        <div class="card_content">                    
                            <div class="crad_front">             
                                <img src="web/images/icon3.png" alt="icon">           
                                <h3 class="card-title">Previous Result</h3>
                                <a>Check Now</a>                        
                            </div>                    
                        </div>                
                    </div>
                </div>
                <div class="col-md-3">                    
                    <div class="card">		
                        <div class="card_content">                    
                            <div class="crad_front">           
                                <img src="web/images/icon4.png" alt="icon">             
                                <h3 class="card-title">Teer Calendar</h3>
                                <a>Check Now</a>                        
                            </div>                    
                        </div>                
                    </div>
                </div>
            </div>
        </section>
	
	@endsection
	
	@section('script') 
	@endsection
	