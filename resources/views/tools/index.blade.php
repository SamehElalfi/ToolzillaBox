@extends('layouts.main')

@section('title', 'Tools')

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
                'link'=>'/tools/jsonformatter',
                'img'=>'dist/img/tools/json-formatter.png',
                'description'=>'Formate and Validate your JSON Code'
            ]
        ]
    ])

    @include('layouts.tools_section', [
        'section_title' => 'Security Tools',
        'tools' => [
            [
                'title'=>'Password Generator',
                'link'=>'/tools/passwordgenerator',
                'img'=>'dist/img/tools/password-generator.png',
                'description'=>'Generate Secure, Strong and random Passwords'
            ]
        ]
    ])

    @include('layouts.donate')

    @include('layouts.mail')

    @include('layouts.blog')
@endsection