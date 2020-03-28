@extends('layouts.app')

@section('title', 'Message sent successfully')
@section('description', 'Online Json formatter & validator & parser & beautifies & debugs & parser & viewer & editor & Pretty Print and json data with advanced formatting and validation algorithms.')

@section('content')

    @include('layouts.header')

    <section class="section" style="border-bottom: 0; margin-bottom: 200px;">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content">
                    <div class="block block--boxed block--contact" id="contact">
                        <div class="block__body row">
                            <h2 class="block__title h3">We Got your Message!</h2>
                            <div class="col-lg-12">
                                <p>Thank you for Subscripe in our Newsletter. We sent you a message to varify your E-Mail</p>
                                <p>For now, You can take a look at our online tools</p>
                                <a href='/tools' class="btn btn--lg btn--primary">Browse all tools</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection