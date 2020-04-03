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

                                    @csrf

                                    <input type="hidden" name="previous_url" value="{{ url()->previous() }}">

                                        
                                    {{-- Name Input --}}
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="fname" value="{{ old('fname')}}" class="form-control form-control--lg" maxlength='255' required>
                                        @if ($errors->has('fname'))
                                            <span class="text-danger">{{ $errors->first('fname') }}</span>
                                        @endif
                                    </div>


                                    {{-- Email Input --}}
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ old('email')}}" class="form-control form-control--lg" maxlength='255' required>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    {{-- Message Input --}}
                                    <div class="form-group m-b-0x">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" class="form-control form-control--lg" value="{{ old('message')}}" required></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>

                                    <div class="form__actions">
                                        <button type="submit" class="btn btn--lg btn--primary">
                                            <span class="btn__text">Send</span>
                                            <span class="btn-hover-effect"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 block__sidebar block__sidebar--md" style="border-left: 1px solid rgba(161, 165, 178, 0.20);">
                                <div class="contact">
                                    <div class="contact__body">
                                        <div class="contact__desc">
                                            You can get in touch with ToolzillaBox using this form.<br><br>
                                            Or you can find ToolzillaBox on <a href='https://www.facebook.com/toolzillabox'>Facebook</a><br><br>
                                            If you have any suggestions feel free contact us.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection