@extends('layouts.app')

@section('title', 'Contact')
@section('description', 'Online Json formatter & validator & parser & beautifies & debugs & parser & viewer & editor & Pretty Print and json data with advanced formatting and validation algorithms.')

@section('content')
    @include('layouts.header')

    <section class="section">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content">
                    <div class="block block--boxed block--contact" id="contact">
                        <div class="block__body row">
                            <h2 class="block__title h3">Send a Message</h2>
                            <div class="box__alert alert alert--info alert--faded alert--xlg">
                                <div class="alert__body h5">Donate for Toolzillabox on Patrion. This will make us happy. Thank You! ❤️</div>
                                <div class="alert__actions">
                                    <a href="/donate" class="btn btn--primary"><span class="btn__text">Donate</span><span class="btn-hover-effect" style="left: 100.719px; top: 41px;"></span><span class="btn-hover-effect" style="left: 97.7188px; top: 20px;"></span><span class="btn-hover-effect"></span><span class="btn-hover-effect"></span></a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="form" method="POST">
                                    <div class="row row--sm">
                                        <div class="col-sm-6 form-group">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="fname" value="" class="form-control form-control--lg">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="lname" value="" class="form-control form-control--lg">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" value="" class="form-control form-control--lg">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Subject</label>
                                        <input type="text" data-name="subject" name="subject" value="" class="form-control form-control--lg">
                                                                </div>
                                    <div class="form-group m-b-0x">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" class="form-control form-control--lg"></textarea>
                                    </div>
                                    <div class="form__actions">
                                        <button type="submit" class="btn btn--lg btn--primary"><span class="btn__text">Send</span><span class="btn-hover-effect"></span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 block__sidebar block__sidebar--md" style="border-left: 1px solid rgba(161, 165, 178, 0.20);">
                                <div class="contact">
                                    <div class="contact__icon i-c-6x">
                                        <svg class="icon-sm" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48">
                                            <polygon class="fill-gradient" points="24,47.5 3.7,35.4 24,23.3 44.3,35.4 "></polygon>
                                            <path class="fill-primary stroke-primary" d="M19.5,1.9C14,5.1,9.4,12.9,9.4,19.4c0,10.3,9.2,17.2,9.6,17.5c0.1,0.1,0.3,0.1,0.5,0c0.2-0.1,0.4-0.3,0.5-0.5c0.4-0.8,9.6-18.6,9.6-28.6C29.6,1.3,25.1-1.3,19.5,1.9z M19.5,9.9c2.1-1.2,3.8-0.2,3.8,2.2s-1.7,5.4-3.8,6.6s-3.8,0.2-3.8-2.2S17.4,11.1,19.5,9.9z"></path>
                                            <path class="fill-white stroke-dark" d="M25,5c-5.6,3.2-10.1,11.1-10.1,17.5c0,10.3,9.2,17.2,9.6,17.5c0.1,0.1,3.8,2.4,3.9,2.2c0.4-0.8,6.7-21.3,6.7-31.4c0-1.3,1.4-3.9,0.7-4.4c-1.1-0.7-3.1-1.8-3.7-2.2C30.3,3.3,27.8,3.4,25,5zM25,13c2.1-1.2,3.8-0.2,3.8,2.2s-1.7,5.4-3.8,6.6s-3.8,0.2-3.8-2.2S22.9,14.3,25,13z"></path>
                                            <path class="fill-white stroke-dark" d="M28.7,7.2c-5.6,3.2-10.1,11.1-10.1,17.5c0,10.3,9.2,17.2,9.6,17.5c0.1,0.1,0.3,0.1,0.5,0c0.2-0.1,0.4-0.3,0.5-0.5c0.4-0.8,9.6-18.6,9.6-28.6C38.8,6.6,34.2,4,28.7,7.2z M28.7,15.2c2.1-1.2,3.8-0.2,3.8,2.2s-1.7,5.4-3.8,6.6c-2.1,1.2-3.8,0.2-3.8-2.2S26.6,16.4,28.7,15.2z"></path>
                                        </svg>
                                    </div>
                                <div class="contact__body">
                                    <span class="contact__title h5 text-primary">Our Location</span>
                                    <adress class="contact__adress">
                                        14 Cliffwood Ave <br>
                                        Suite 300, Metropark South<br>
                                        Matawan, NJ 07747
                                    </adress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection