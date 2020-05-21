@extends('layouts.app', ['title' => __('Add Episode')])

@section('content')
@include('users.partials.header', [
    'title' => __('Update Category Details'),
    'description' => __('Fill this form to update an exist category, please note that any empty field will be shown as unknown.'),
])   

<div class="container-fluid mt--7">
    <form method="post" action="{{ route('category.update', ['category' => $category->id]) }}" autocomplete="off" enctype="multipart/form-data">
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
                            <h3 class="col-12 mb-0">{{ __('Update Category') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">{{ __('Category Details') }}</h6>
                        <div class="pl-lg-4">

                            {{-- The Category Name --}}
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
                                
                                <input type="text" id="input-name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $category->name ?? '' }}">

                            </div>

                            
                            {{-- The Category title --}}
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
                                
                                <input type="text" id="input-title" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $category->title ?? '' }}">

                            </div>

                            {{-- The Category slug --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-slug">{{ __('Slug') }}<span class="text-muted h6"> (The URL of the category)</span></label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('slug'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('slug') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <input type="text" id="input-slug" name="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" value="{{ $category->slug ?? '' }}">

                            </div>

                            {{-- The Category description --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-description">{{ __('Description') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('description'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('description') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                
                                <input type="text" id="input-description" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ $category->description ?? '' }}">

                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Update Category') }}</button>
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
                        <img src="{{ $category->cover }}" alt="Category Cover" style="width: 100%;">
                    </div>
                    <div class="card-body pt-0">
                        <h3 class="text-center" id="preview-title">
                            {{ $category->name ?? '' }}
                        </h3>
                        <div class="text-center">
                            <p id="preview-story">
                                {{ $category->description }}
                            </p>
                            <a href="#">See {{ $category->name ?? '' }}</a>
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
    @include('layouts.footers.auth')
</div>
@endsection
