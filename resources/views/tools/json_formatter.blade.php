@extends('layouts.app')

@section('title', 'Json Formatter - ToolzillaBox')

@section('content')
    @include('layouts.header', [
        'header_title' => 'All Tools in one place',
        'header_paragraph' => 'We are working to bring you the best experience.'
    ])

    <section class="section">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content">
                    <div class="block block--boxed block--contact" id="contact">
                        <div class="block__body">
                            <h2 class="block__title h3">JSON Formatter</h2>
                            <div class="box__alert alert alert--info alert--faded alert--xlg">
                                <div class="alert__body h5">Donate for Toolzillabox on Patrion. This will make us happy. Thank You! ❤️</div>
                                <div class="alert__actions">
                                    <a href="/donate" class="btn btn--primary"><span class="btn__text">Donate</span><span class="btn-hover-effect" style="left: 100.719px; top: 41px;"></span><span class="btn-hover-effect" style="left: 97.7188px; top: 20px;"></span><span class="btn-hover-effect"></span></a>
                                </div>
                            </div>
                            <h2 class="block__title h3 text-center" style="margin-bottom: 220px;">The Tool will be here!!</h2>
                        </div>
                    </div>
                </div>

                @include('layouts.usage', [
                    'questions' => [
                        [
                            'q' => 'Do you charge for stopped instance?',
                            'answer' => 'Yes, instances in a stopped state continue to reserve dedicated system resources (RAM, SSD storage, IP aliases, CPU) and therefore incur charges until you destroy the instance. If you wish to no longer accumulate charges for a virtual machine, please use the DESTROY button in the customer portal.'
                    ],
                        [
                            'q' => 'I linked my credit card but I see a small charge on my card! What gives?',
                            'answer' => "We have not charged your card. What you have observed is a temporary authorization in order to validate the card provided. The hold will automatically expire based on your bank's policy, generally within a few days."
                    ],
                        [
                            'q' => 'How am I billed for Load Balancers?',
                            'answer' => "Vultr Load Balancers are priced at $10.00 per subscription.‬"
                    ],
                    ]
                ])
                
                <div class="recent-news">
                    <div class="recent-news__top top">
                        <h3 class="top__title">Related Tools</h3>
                        <div class="top__toolbar">
                            <a class="btn btn--default btn--xs btn--link" href="https://www.vultr.com/news/">
                                <i class="btn__icon">
                                    <svg class="icon-ui icon-ui--18 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px">
                                        <path class="fill" d="M15.5,2h-13C2.2,2,2,2.2,2,2.5v13C2,15.8,2.2,16,2.5,16H3c0.1,0,0.3-0.1,0.4-0.2L6.2,13h9.3c0.3,0,0.5-0.2,0.5-0.5v-10C16,2.2,15.8,2,15.5,2z M8,6V4h2v2H8z M10,8v3H8V8H10z" svg="">
                                        </path>
                                    </svg>
                                </i>
                                <span class="btn__text">View All Tools</span>
                            </a>
                        </div>
                    </div>
                    <div class="row row--lg row--eq-height">
                        <div class="col-lg-4">
                            <a class="feature feature--boxed feature--shadow feature--medium-icon" href="file:///E:/resources/faq" data-animation="" data-animation-options="type:features;" delay:="" 0;="">
                                <div class="feature__icon " data-animation-icon="" style="transform: translateY(0px); opacity: 1;">
                                    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png">
                                </div>
                                <div class="feature__body">
                                    <h3 class="feature__title h6">Frequently Asked Questions</h3>
                                    <p class="feature__desc ">Have a question about the Vultr platform?</p>
                                    <div class="feature__actions">
                                    <span class="btn btn--primary btn--link btn--block btn--tab-xs">
                                        <span class="btn__text">Learn more</span>
                                    </span>
                                    </div>
                                </div>
                            </a>
                        </div>                           
                        <div class="col-lg-4">
                            <a class="feature feature--boxed feature--shadow feature--medium-icon" href="file:///E:/resources/faq" data-animation="" data-animation-options="type:features;" delay:="" 0;="">
                                    <div class="feature__icon " data-animation-icon="" style="transform: translateY(0px); opacity: 1;">
                                        <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png">
                                    </div>
                                    <div class="feature__body">
                                    <h3 class="feature__title h6">Frequently Asked Questions</h3>
                                    <p class="feature__desc ">Have a question about the Vultr platform?</p>
                                    <div class="feature__actions">
                                        <span class="btn btn--primary btn--link btn--block btn--tab-xs">
                                            <span class="btn__text">Learn more</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a class="feature feature--boxed feature--shadow feature--medium-icon" href="file:///E:/resources/faq" data-animation="" data-animation-options="type:features;" delay:="" 0;="">
                                <div class="feature__icon " data-animation-icon="" style="transform: translateY(0px); opacity: 1;">
                                    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png">
                                </div>
                                <div class="feature__body">
                                    <h3 class="feature__title h6">Frequently Asked Questions</h3>
                                    <p class="feature__desc ">Have a question about the Vultr platform?</p>
                                    <div class="feature__actions">
                                        <span class="btn btn--primary btn--link btn--block btn--tab-xs">
                                            <span class="btn__text">Learn more</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.donate')

    <section class="section section--dark-md">
		<div class="container ">
            <div class="recent-news">
				<h2 class="section__title ">All Categories</h2>
                <p class="section__desc" style="margin: -48px auto 15px;">Browse all tools from the main categories</p>
                <section class="section" id="apps" style="padding: 0;border-bottom: none;">
                    <div class="container ">
                        <div class="section__content">
                            @include('layouts.cates')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    @include('layouts.mail')

    @include('layouts.blog')
@endsection