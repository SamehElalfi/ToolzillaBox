@extends('layouts.main')

@section('title', $tool->title)

@section('description', $tool->description)

@section('keywords', 'online free json formatter , online free json Validator, online free json format, online free json viewer, online free JSON Editor, online free JSON Beautifier')

@section('style')
    <style type="text/css" media="screen">
        #editor { 
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        /* Dropdown Button */
        .menubar .dropbtn {
        color: white;
        padding: 0 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        text-align: center;
        }

        /* Dropdown button on hover & focus */
        .menubar .dropbtn:hover, .menubar .dropbtn:focus {
        background-color: #10100e;
        }

        /* The container <div> - needed to position the dropdown content */
        .menubar .dropd {
        position: relative;
        display: inline-block;
        padding: 0;
        }

        /* Dropdown Content (Hidden by Default) */
        .menubar .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 20;
        border-radius: 0 0 5px 5px;
        }

        /* Links inside the dropdown */
        .menubar .dropdown-content a {
            color: black;
            padding: 4px 10px;
            text-decoration: none;
            display: block;
        }
        .menubar .dropdown-content a:last-child {
            border-bottom: none;
        }
        /* Change color of dropdown links on hover */
        .menubar .dropdown-content a:hover {background-color: #ddd}

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .menubar .show {display:block;}
    </style>
@endsection

@section('content')

    @include('layouts.header',
        [
            'header_title' => $tool->name,
        ]
    )

    <section class="section">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content small-text">
                    <div class="block block--boxed">
                        {!! $tool->content !!}
                    </div>
                </div>
            </div>
        </div>
        <textarea id="t" style="width:0;height:0;"></textarea>
    </section>
    
    @include('layouts.about_tool', ['about_title'=>'About This Tool', 'about_text'=>$tool->about])

    @include('layouts.usage', [
        'questions'=>json_decode($tool->questions)
    ])

    @include('layouts.donate')

    @include('layouts.mail')

    @include('layouts.blog')

    @section('script')
        {!! $tool->js !!}
    @endsection
@endsection