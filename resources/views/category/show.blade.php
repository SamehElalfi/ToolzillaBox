@extends('layouts.main')

@section('title', 'Tools')

@section('content')
    @include('layouts.header', [
        'header_title' => $category->name,
        'header_paragraph' => $category->description
    ])
    <section class="section">
        <div class="container ">
            <div class="top__toolbar justify-content-center" style="margin-bottom: 30px;">
                <a class="btn btn--default btn--xs btn--link" href="{{ route('category.index') }}">
                    <i class="btn__icon">
                        <svg class="icon-ui icon-ui--18 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px">
                            <path class="fill" d="M15.5,2h-13C2.2,2,2,2.2,2,2.5v13C2,15.8,2.2,16,2.5,16H3c0.1,0,0.3-0.1,0.4-0.2L6.2,13h9.3c0.3,0,0.5-0.2,0.5-0.5v-10C16,2.2,15.8,2,15.5,2z M8,6V4h2v2H8z M10,8v3H8V8H10z" svg="">
                            </path>
                        </svg>
                    </i>
                    <span class="btn__text text-white">View All Categories</span>
                </a>
            </div>
            
            <div class="section__content">
                <div class="row row--lg features justify-content-center">
                    @foreach ($tools as $tool)
                        @include('layouts.tool')
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @include('layouts.donate')

    @include('layouts.mail')

    @include('layouts.blog')
@endsection