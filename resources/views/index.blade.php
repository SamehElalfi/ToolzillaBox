@extends('layouts.main')
@section('title', 'ToolzillaBox - Free Online Tools for Normal Users & Developers')

@section('description', 'ToolzillaBox is where you can find most using free online tools on the internet to help you improve your work and because of this most developers and normal users keep using our free online tools.')
@section('keywords', 'free online tools, ToolzillaBox, online tools, free tools')

@section('content')
    @include('layouts.header',
        [
            'header_title' => 'All Tools in one place',
            'header_paragraph' => 'We are working to bring you the best experience. Our goal is to provide free online tools.'
        ]
    )

    @include('layouts.catescards')

    @include('layouts.about')

    @include('layouts.donate')

    @include('layouts.mail')

    @include('layouts.blog')
@endsection