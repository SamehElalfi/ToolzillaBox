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
                                <p>Thank you for contacting us. we will review your message carfully.</p>
                                <p>Remember! You can always send more messages <a href='/contact'>from here.</a></p>
                                <a href='/contact' class="btn btn--lg btn--primary">Send More Messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection