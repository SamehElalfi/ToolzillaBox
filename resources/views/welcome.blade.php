@extends('layouts.app')

@section('title', 'ToolzillaBox')

@section('content')
    @include('layouts.header', ['header_title' => 'All Tools in one place', 'header_paragraph' => 'We are working to bring you the best experience.'])

    @include('layouts.catescards')

    @include('layouts.about')

    @include('layouts.donate')

    @include('layouts.mail')

    @include('layouts.blog')
@endsection