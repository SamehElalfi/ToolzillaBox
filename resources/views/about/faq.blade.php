@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
    <div class="small-header">
        @include('layouts.header',
            [
                'header_title' => 'FAQ',
                'header_paragraph' => 'Last updated: April 01, 2020'
            ]
        )
    </div>

    <section class="section section--our-mission" id="about-us">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="resources__content article">
                    <div id="faq-bill" class="resources__section">
                        <div class="resources__header top" style="margin: -8px 0 48px -90px;">
                            <div class="top__icon i-c i-c-6x align-self-start">
                                <svg class="icon-sm" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48">
                                    <polygon class="fill-gradient stroke-gradient" points="47.5,33.7 42.5,33.7 42.5,36.5 36.5,36.5 36.5,40.5 30.6,40.5 30.6,43.5 25.4,43.5 0.6,29.3 6.1,26 11.6,25.9 27,34.5 40.1,26.5 47.5,30.8"></polygon>
                                    <polygon class="fill-primary stroke-primary" points="47.6,27.5 42.5,27.5 42.5,30.6 36.6,30.6 36.6,33.5 30.7,33.5 30.6,37.5 25.7,37.5 0.6,22.9
                                            6.1,19.7 25.4,30.6 30.9,30.7 30.9,27.7 36.7,27.7 36.7,23.9 42.6,23.9 42.7,21.6 47.5,24.5"></polygon>
                                    <polygon class="stroke-dark" points="47.5,20.6 42.5,20.5 42.5,23.6 36.6,23.6 36.6,27.5 30.6,27.5 30.6,30.6 25.4,30.5 0.6,16.2 22.6,3.5 47.5,17.8"></polygon>
                                    <polyline class="stroke-primary stroke-1-5" points="23.9,10.2 12.2,17 20.6,12.1"></polyline>
                                    <polyline class="stroke-primary stroke-1-5" points="27.8,12.4 16.1,19.2 24.5,14.3"></polyline>
                                    <line class="stroke-primary stroke-1-5" x1="35.1" y1="16.7" x2="30.8" y2="19.1"></line>
                                </svg>
                            </div>
                            <div class="top__content">
                                <h2 class="top__title">Most asked questions about ToolzillaBox</h2>
                                <p class="top__desc p3 text-faded">You always can ask more questions in Contact Us page.</p>
                            </div>
                        </div>
                        <div class="list-group list-group--collapse list-group--simple list-group--collapse-simple">
                            {{-- {{ dd($questions) }} --}}
                            @if ($questions)
                                @foreach($questions as $key => $question)
                                <div class="list-group__item collapsed" data-toggle="lu-collapse" data-target="#usage-{{ $key }}" aria-expanded="true">
                                    <a>
                                        <div class="list-group__top top">
                                            <h3 class="top__title h5">{{ $question['q'] }}</h3>
                                        </div>
                                    </a>
                                    <div class="list-group__content collapse" data-parent="#faq-bill" id="usage-{{ $key }}" style="">
                                        <div class="list-group__content-inner">
                                            <p>{!! $question['answer'] !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>                                      
                </div>
            </div>
        </div>
    </section>
    
    @include('layouts.donate')
@endsection