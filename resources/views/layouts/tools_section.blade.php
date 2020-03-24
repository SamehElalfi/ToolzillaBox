@php
    use Illuminate\Support\Str;
@endphp

<section class="section" id="{{ Str::camel($section_title) }}">
    <div class="container ">
        <div class="top__toolbar" style=" float: right;">
            <a class="btn btn--default btn--xs btn--link" href="#apps">
                <i class="btn__icon">
                    <svg class="icon-ui icon-ui--18 " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px">
                        <path class="fill" d="M15.5,2h-13C2.2,2,2,2.2,2,2.5v13C2,15.8,2.2,16,2.5,16H3c0.1,0,0.3-0.1,0.4-0.2L6.2,13h9.3c0.3,0,0.5-0.2,0.5-0.5v-10C16,2.2,15.8,2,15.5,2z M8,6V4h2v2H8z M10,8v3H8V8H10z" svg="">
                        </path>
                    </svg>
                </i>
                <span class="btn__text">View All Categories</span>
            </a>
        </div>
        <h2 class="section__title ">{{ $section_title ?? 'Section'}}</h2>
        <div class="section__content">
            <div class="row row--lg features">
                @if($tools)
                @foreach($tools as $tool)
                    <div class="col-lg-4">
                        <a class="feature feature--boxed feature--shadow feature--medium-icon" href="{{ $tool['link'] }}" data-animation="" data-animation-options="type:features;" delay:="" 0;="">
                            <div class="feature__icon " data-animation-icon="" style="transform: translateY(0px); opacity: 1;">
                                <img src="{{ $tool['img'] }}">
                            </div>
                            <div class="feature__body">
                                <h3 class="feature__title h6">{{$tool['title']}}</h3>
                                <p class="feature__desc ">{{$tool['description']}}</p>
                                <div class="feature__actions">
                                    <span class="btn btn--primary btn--link btn--block btn--tab-xs">
                                        <span class="btn__text">Learn more</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                @endif
            </div>
		</div>
    </div>
</section>