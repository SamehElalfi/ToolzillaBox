<div class="col-lg-4">
    <a class="feature feature--boxed feature--shadow feature--medium-icon" href="{{ route('category.tool.show', ['tool'=>$tool->slug, 'category'=>$category->slug]) }}" data-animation="" data-animation-options="type:features;" delay:="" 0;="">
        <div class="feature__icon " data-animation-icon="" style="transform: translateY(0px); opacity: 1;">
            <img src="{{ $tool->cover }}">
        </div>
        <div class="feature__body">
            <h3 class="feature__title h6">{{ $tool->name }}</h3>
            <p class="feature__desc ">{!! $tool->sentence !!}</p>
            <div class="feature__actions">
                <span class="btn btn--primary btn--link btn--block btn--tab-xs">
                    <span class="btn__text">Learn more</span>
                </span>
            </div>
        </div>
    </a>
</div>