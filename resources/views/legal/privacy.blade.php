@extends('layouts.main')
@section('title', 'Privacy Policy')
@section('content')
    <div class="small-header">
        @include('layouts.header',
            [
                'header_title' => 'Privacy policy',
                'header_paragraph' => 'Last updated: April 03, 2020'
            ]
        )
    </div>

    {{-- Cookies Policy --}}
    <section class="section section--our-mission" id="about-us">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div>
                                <h1 class="section__title h2">Privacy Policy</h1>
                                <div class="section__desc text-left">
                                    <p class="tile__info p-2">
                                        Last updated: April 03, 2020
                                    </p>
                                    <p class="tile__info p-2">
                                        This privacy policy attempts to outline how ToolzillaBox websites collect and use information from their users.
                                    </p>
                                    <br><br>
                                    <h2 class="section__title h3">Logs</h2>
                                    <p class="tile__info p-2">
                                        Like most other websites,  ToolzillaBox websites collect non-personal information about users whenever they access them. These logs may include the browser name, the type of computer and technical information about the means of connection to the site, such as the operating system, the Internet service providers utilized and other similar information.
                                    </p>
                                    <br><br>
                                    <h2 class="section__title h3">Cookies</h2>
                                    <p class="tile__info p-2">
                                        Cookies are files with a small amount of data that are sent to your browser from a website and stored on your computer's hard drive.  ToolzillaBox websites use them to track preferences and AB testing experiments. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.
                                    </p>
                                    <br><br>
                                    <h2 class="section__title h3">Forms</h2>
                                    <p class="tile__info p-2">
                                        With the exception of contact forms, ToolzillaBox websites do not collect any information submitted to forms. Any information submitted to a contact form will be own for ToolzillaBox.
                                    </p>
                                    <br><br>
                                    <h2 class="section__title h3">Changes</h2>
                                    <p class="tile__info p-2">
                                        This privacy policy may be revised at any time without notice. We encourage users to frequently check this page for any changes. Your continued use ToolzillaBox websites after any changes or revisions to this policy shall indicate your agreement with the revised privacy policy.
                                    </p>
                                    <br><br>
                                    <h2 class="section__title h3">Questions?</h2>
                                    <p class="tile__info p-2">
                                        If you have any questions about this Privacy Policy or anything else related to ToolzillaBox web sites, please <a href="https://toolzillabox.com/contact">contact us</a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('layouts.donate')
@endsection