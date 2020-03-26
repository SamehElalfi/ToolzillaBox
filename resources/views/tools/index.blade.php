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
        'section_title' => 'Section Tools',
        'tools' => [
            [
                'title'=>'Tool',
                'link'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'some cool text are here'
            ],
            [
                'title'=>'Tool 2',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'link'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'some cool text are here2'
            ],
            [
                'title'=>'Tool 3',
                'link'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'some cool text are here3'
            ]
        ]
    ])

    @include('layouts.tools_section', [
        'section_title' => 'Section Tools',
        'tools' => [
            [
                'title'=>'Tool',
                'link'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'some cool text are here'
            ],
            [
                'title'=>'Tool 2',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'link'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'some cool text are here2'
            ],
            [
                'title'=>'Tool 3',
                'link'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'some cool text are here3'
            ]
        ]
    ])

    @include('layouts.tools_section', [
        'section_title' => 'Section Tools',
        'tools' => [
            [
                'title'=>'Tool',
                'link'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'some cool text are here'
            ],
            [
                'title'=>'Tool 2',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'link'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'some cool text are here2'
            ],
            [
                'title'=>'Tool 3',
                'link'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'img'=>'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png',
                'description'=>'some cool text are here3'
            ]
        ]
    ])

    @include('layouts.donate')

    @include('layouts.mail')

    @include('layouts.blog')
@endsection