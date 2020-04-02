@extends('layouts.app')
@section('title', 'About')
@section('content')
    <div class="small-header">
        @include('layouts.header',
            [
                'header_title' => 'Welcome To ToolzillaBox',
                'header_paragraph' => 'We are working to bring you the best experience.'
            ]
        )
    </div>

    {{-- About Us --}}
    <section class="section section--our-mission" id="about-us">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="section__block section__block--right m-l-0x">
                                <h2 class="section__title h3">About Us</h2>
                                <div class="section__desc">
                                    <p class="tile__info p-2">
                                        If you’ve ever wondered:
                                        “Where can I find the best tools that could help me with my work?”. Then, you’re in the right place.
                                    </p>
                                    <p class="tile__info p-2">
                                        ToolzillaBox is where you can find most using tools like a password generator and JSON formatter on the internet to help you improve your work and because of this most developers and normal users keep using our tools.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 pt-md-4" style="padding-top: 100px;">
                            <div class="row tiles">
                                <div class="col-md-6">
                                    <div class="tile tile--info">
                                        <div class="tile__value h2 font-weight-light">30+</div>
                                        <h3 class="tile__title h6">Online Tools</h3>
                                        <p class="tile__info p-3">
                                            We've been working together for years! Use our online tools right now!</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="tile tile--info">
                                        <div class="tile__value h2 font-weight-light">20k+</div>
                                        <h3 class="tile__title h6">Unique Customers</h3>
                                        <p class="tile__info p-3">
                                            Our customers come from 150+ countries around the globe and countless cities. ToolzillaBox's global footprint spans far and wide!
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Useful Tools --}}
    <section class="section section--our-mission pb-2 pt-2">
        <div class="section__content">
			<div class="row">
				<div class="col-lg-6 order-4 order-lg-first">
					<img src="https://cdn.dribbble.com/users/2463018/screenshots/6193089/image.png">
				</div>
				<div class="col-lg-6">
					<div class="widget__content">
                        <h2 class="section__title h3 text-center">Useful Tools ...</h2>
                        <p class="widget__desc p-2">
                            ToolzillaBox, founded in 2020, is on a mission to help developers and businesses by simplifying the deployment of infrastructure via its advanced online tools.
                            <br><br>
                            ToolzillaBox has made it our priority to offer a standardized highly reliable high performance in all of the tools we serve. Using an online tool has never been easier!
                        </p>
                    </div>
				</div>
			</div>
		</div>
    </section>

    {{-- Our Goal --}}
    <section class="section section--our-mission">
        <div class="section__content">
            <div class="widget__content text-center">
                <h2>Our goal is ...</h2>
                <p class="widget__desc p-1">Our goal is to provide online free tools to help content creators, brands, SEOs, and normal users, save time and grow their work with our tools.we are going to add new tools daily or weekly to make your work easy.
                </p>
			</div>
		</div>
    </section>
    
    @include('layouts.donate')

    @include('layouts.mail')

    @include('layouts.blog')
@endsection