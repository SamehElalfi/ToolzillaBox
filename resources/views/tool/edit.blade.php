@extends('layouts.app', ['title' => __('Update Tool')])

@section('content')
@include('users.partials.header', [
    'title' => __('Update tool Details'),
    'description' => __('Fill this form to update an exist tool, please note that any empty field will be shown as unknown.'),
])   

<div class="container-fluid mt--7">
    <form method="post" action="{{ route('category.tool.update', ['tool'=>$tool,'category' => $tool->category_slug()]) }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            {{-- Form Section --}}
            <div class="col-xl-8">
                <div class="card bg-secondary shadow">
                    
                    @if (\Session::has('main'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ \Session::get('main') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Update Tool') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">{{ __('Tool Details') }}</h6>
                        <div class="pl-lg-4">

                            {{-- The Tool title --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-title">{{ __('Title Tag') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('title'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('title') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <input type="text" id="input-title" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $tool->title ?? '' }}">

                            </div>

                            {{-- The Tool Name --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('name') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <input type="text" id="input-name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $tool->name ?? '' }}">

                            </div>

                            {{-- The Tool sentence --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-sentence">{{ __('sentence') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('sentence'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('sentence') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <input type="text" id="input-sentence" name="sentence" class="form-control{{ $errors->has('sentence') ? ' is-invalid' : '' }}" value="{{ $tool->sentence ?? '' }}">

                            </div>

                            {{-- The Tool slug --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-slug">{{ __('Slug') }}<span class="text-muted h6"> (The URL of the Tool)</span></label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('slug'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('slug') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <input type="text" id="input-slug" name="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" value="{{ $tool->slug ?? '' }}">

                            </div>

                            {{-- The Tool description --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-description">{{ __('Description Meta Tag') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('description'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('description') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <input type="text" id="input-description" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ $tool->description ?? '' }}">

                                
                                {{-- <textarea class="mytextarea" name="description">
                                    {{ $tool->description ?? '' }}
                                </textarea> --}}
                            </div>

                            {{-- The Tool about --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-about">{{ __('About Section') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('about'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('about') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <textarea class="mytextarea" name="about">
                                    {{ $tool->about ?? '' }}
                                </textarea>
                            </div>
                            <hr class="my-6" />

                            {{-- The Tool questions --}}
                            <div class="form-group" id="questions-group">
                                <label class="form-control-label" for="input-questions">{{ __('Questions') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('questions'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('questions') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                @foreach (json_decode($tool->questions) as $question)
                                    <input type="text" id="input-questions" name="questions[]" class="mt-5 form-control{{ $errors->has('questions') ? ' is-invalid' : '' }}" value="{{ $question->question }}" placeholder="question">
                                    <textarea id="input-answers" name="answers[]" class="mytextarea form-control{{ $errors->has('answers') ? ' is-invalid' : '' }}">{{ $question->answer ?? '' }}</textarea>
                                @endforeach
                                
                            </div>
                            <button type="button" class="btn btn-outline-success mt-4" onclick='add_question()'>{{ __('Add Question') }}</button>

                            @push('js')
                                <script>
                                    function add_question() {
                                    $("#questions-group").append(`
                                    <input type="text" id="input-questions" name="questions[]" class="mt-5 form-control{{ $errors->has('questions') ? ' is-invalid' : '' }}" placeholder="question">
                                    <textarea id="mytextarea2 input-answers" name="answers[]" class="form-control{{ $errors->has('answers') ? ' is-invalid' : '' }}"></textarea>`);
                                    }
                                </script>
                            @endpush
                            
                            <hr class="my-6" />

                            {{-- The Tool meta_tags --}}
                            <div class="form-group" id="meta_tags-group">
                                <label class="form-control-label" for="input-meta_tags">{{ __('Meta Tags') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('meta_tags'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('meta_tags') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <textarea name="meta_tags" class="form-control" rows="5">{{ $tool->meta_tags ?? '' }}</textarea>

                            </div>

                            <hr class="my-6" />

                            <h6 class="heading-small mb-4 bg-warning p-4 text-white rounded">Advanced <span class="text-white-50">(Don't modify)</span></h6>
                            {{-- The Tool content --}}
                            <div class="form-group" id="content-group">
                                <label class="form-control-label" for="input-content">{{ __('Tool Content') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('content'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('content') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <textarea name="content" class="form-control" rows="15">{{ $tool->content ?? '' }}</textarea>

                            </div>

                            
                            {{-- The Tool js --}}
                            <div class="form-group" id="js-group">
                                <label class="form-control-label" for="input-js">{{ __('JS Code') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('js'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('js') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <textarea name="js" class="form-control" rows="15">{{ $tool->js ?? '' }}</textarea>

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Update Tool') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Preview Anime Card --}}
            <div class="col-xl-4 mt-5 mt-xl-0">
                <div class="card card-profile shadow border-0 rounded overflow-hidden my-sm-5 my-md-0">
                    
                    {{-- This fiekd is where the anime cover is stored --}}
                    <input id="file-input" type="file" name="cover" class="d-none" />
                    
                    {{-- Display an error message here --}}
                    @if ($errors->has('cover'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $errors->first('cover') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4" onclick="document.getElementById('file-input').click();" id="coverImg">
                        <img src="{{ $tool->cover }}" alt="tool Cover" style="width: 100%;">
                    </div>
                    <div class="card-body pt-0">
                        <h3 class="text-center" id="preview-title">
                            {{ $tool->name ?? '' }}
                        </h3>
                        <div class="text-center">
                            <p id="preview-story">
                                {!! $tool->sentence !!}
                            </p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="card card-profile shadow border-0 rounded overflow-hidden">
                    <img id="anime-image" src="" class="w-100">
                </div>
            </div>
        </div>
    </form>
    @push('js')
        <script>
            /** Update the cover preview image
            * @argument input: the input field 
            */
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // add the cover as a background
                        $('#coverImg img').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

            // adding the uploadd image to the hidden input field
            $("#file-input").change(function() {
                readURL(this);
            });
        </script>
    @endpush
    

    @push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.2/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.mytextarea',
            // inline:true,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            a_plugin_option: true,
            a_configuration_option: 400,
            height: 300,
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview media fullpage | forecolor backcolor emoticons',
            menu: {
                file: { title: 'File', items: 'newdocument restoredraft | preview | print ' },
                edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
                view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
                insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
                format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align | forecolor backcolor | removeformat' },
                tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
                table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
                help: { title: 'Help', items: 'help' },
                favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            
        relative_urls: false,
        file_picker_callback: function (callback, value, meta) {
            let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            let type = 'image' === meta.filetype ? 'Images' : 'Files',
                url  = '/filemanager?editor=tinymce5&type=' + type;

            tinymce.activeEditor.windowManager.openUrl({
                url : url,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
        });
    </script>
@endpush

    @include('layouts.footers.auth')
</div>
@endsection
