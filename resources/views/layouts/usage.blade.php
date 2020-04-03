<div class="resources__content article" id="tool-using">
    <div id="faq-bill" class="resources__section">
        <div class="resources__header top" style="margin: -8px 0 48px -90px;">
            <div class="top__icon i-c i-c-6x align-self-start">
                <svg class="icon-sm icon-sm--64" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 64 64">
                    <path class="fill-gradient stroke-gradient" d="M22.2,28c-0.7,0.3,0.3,14.9,0.3,14.9l-6.9,11.2c0,0-3.8-5.1-3.8-5L7.5,51V19.2l32-18.7v17.8L22.2,28z"></path>
                    <path class="fill-primary stroke-primary" d="M23.5,28.6l-0.1,30.5c0,0-3.3-5.1-3.4-5.1s-4.4,2.3-4.5,2.4c0-10.1,0-22.1,0-32.2l32-18.7v8.6L23.5,28.6z"></path>
                    <path class="stroke-dark" d="M55.5,42.2c-0.7,0.3-16.7,9.9-17.1,10.1c-0.1,0.1-6.9,11.2-6.9,11.2s-3.8-5.1-3.8-5l-4.2,2.1c0-10.1,0-21.9,0-32l32-18.7V42.2z"></path>
                    <path class="fill-primary stroke-primary" d="M40.7,44.8c0.3-0.2,0.6-0.4,0.7-0.8c0.2-0.3,0.2-0.7,0.3-1c0-0.2,0-0.5-0.2-0.6c-0.1-0.1-0.3,0-0.5,0.1c-0.3,0.2-0.6,0.4-0.7,0.8c-0.2,0.3-0.2,0.7-0.3,1c0,0.2,0,0.5,0.2,0.6C40.3,45,40.5,44.9,40.7,44.8z"></path>
                    <path class="fill-primary stroke-primary" d="M44.8,28.3c0-1.4-0.3-2.4-0.9-2.8s-1.5-0.3-2.6,0.4c-1.2,0.7-2.2,1.7-2.8,2.9c-0.6,1.1-1,2.3-1.1,3.5l1.3-0.8c0.1-1.6,1-3.1,2.4-3.9c0.3-0.2,0.7-0.3,1.1-0.4c0.3,0,0.5,0.1,0.7,0.3c0.5,0.5,0.7,1.3,0.6,2c0,1.1-0.3,2.2-0.8,3.2l-1.3,2.5c-0.4,0.8-0.8,1.6-1,2.5c-0.1,0.7-0.2,1.4-0.3,2.1l1.3-0.7c0-1.2,0.2-2.3,0.7-3.4l1.1-2C44.2,32,44.7,30.1,44.8,28.3z"></path>
                </svg>
            </div>
            <div class="top__content">
                <h2 class="top__title">How to use this tool?</h2>
                @isset($article)
                    <p class="top__desc p3 text-faded">{!! $article ?? "Learn how to use this tool and its tricks."!!}</p>
                @else
                    <p class="top__desc p3 text-faded">Learn how to use this tool and its tricks.</p>
                @endisset
            </div>
        </div>
        <div class="list-group list-group--collapse list-group--simple list-group--collapse-simple">
            {{-- {{ dd($questions) }} --}}
            @isset ($questions)
                @foreach($questions as $key => $question)
                <div class="list-group__item collapsed" data-toggle="lu-collapse" data-target="#usage-{{ $key }}" aria-expanded="true">
                    <a>
                        <div class="list-group__top top">
                            <h3 class="top__title h5">{{ $question['q'] }}</h3>
                        </div>
                    </a>
                    <div class="list-group__content collapse" data-parent="#faq-bill" id="usage-{{ $key }}" style="">
                        <div class="list-group__content-inner">
                            <p>{!! $question['answer'] !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            @endisset
        </div>
    </div>                                      
</div>