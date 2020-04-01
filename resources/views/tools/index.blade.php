@extends('layouts.app')

@section('title', 'Tools List')

@section('content')
    @include('layouts.header', [
        'header_title' => 'All Tools in one place',
        'header_paragraph' => 'We are working to bring you the best experience.'
    ])

    <section class="section" id="apps">
		<div class="container ">
            <div class="section__content">
                <div class="box box--apps ">
                    @include('layouts.cates')
                </div>
            </div>
        </div>
    </section>

    @include('layouts.tools_section', [
        'section_title' => 'Development Tools',
        'tools' => [
            [
                'title'=>'JSON Formatter',
                'link'=>'http://toolzillabox.com/tools/jsonformatter',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'Formate and Validate you JSON Code'
            ]
        ]
    ])

    @include('layouts.tools_section', [
        'section_title' => 'Security Tools',
        'tools' => [
            [
                'title'=>'Password Generator',
                'link'=>'https://toolzillabox.com/tools/passwordgenerator',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'Generate Secure, Strong and long Passwords'
            ]
        ]
    ])

    @include('layouts.donate')

    @include('layouts.mail')

    @include('layouts.blog')
@endsection