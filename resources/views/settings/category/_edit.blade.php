@extends('layouts.app', ['title' => __('Category Management')])

@section('content')
    @include('layouts.headers.cards')

    
<div class="container-fluid mt--7">
    <form method="post" action="{{ route('category.store') }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="row">
            {{-- Form Section --}}
            <div class="col-12">
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
                            <h3 class="col-12 mb-0">{{ __('dashboard.Add New Anime') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">{{ __('dashboard.Anime Details') }}</h6>
                        <div class="pl-lg-4">


                            {{-- The count of Episode for this anime --}}
                            {{-- This value could be zero or higher --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-anime_id">{{ __('dashboard.The anime id') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('anime_id'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('anime_id') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <input type="number" name="anime_id" id="input-anime_id" class="form-control{{ $errors->has('anime_id') ? ' border-danger' : '' }}" value="{{ old('episodes') ?? '12' }}" min="0">
                            </div>

                            {{-- The count of Episode for this anime --}}
                            {{-- This value could be zero or higher --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-episode_number">{{ __('dashboard.Episode number') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('episode_number'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('episode_number') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <input type="number" name="episode_number" id="input-episode_number" class="form-control{{ $errors->has('episode_number') ? ' border-danger' : '' }}" value="{{ old('episodes') ?? '12' }}" min="0">
                            </div>

                            
                            {{-- The Status of The Anime (finished, upcoming ... etc) --}}
                            <div class="form-group">
                                <label class="form-control-label" for="status">{{ __('dashboard.Anime Status') }}</label>

                                {{-- Display an error message here --}}
                                @if ($errors->has('status'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                {{-- Status: airing --}}
                                <div class="custom-control custom-radio mb-3">
                                    <input name="status" class="custom-control-input{{ $errors->has('status') ? ' is-invalid' : '' }}" id="customRadio1 normal" checked="" type="radio" value="normal" {{ old('status') == 'normal' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customRadio1">
                                        <span>{{ __('dashboard.Airing') }}</span>
                                    </label>
                                </div>

                                {{-- Status: finished --}}
                                <div class="custom-control custom-radio mb-3">
                                    <input name="status" class="custom-control-input{{ $errors->has('status') ? ' is-invalid' : '' }}" id="customRadio2 filler" type="radio" value="filler" {{ old('status') == 'filler' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customRadio2">
                                        <span>{{ __('dashboard.Finished') }}</span>
                                    </label>
                                </div>

                                {{-- Status: upcoming --}}
                                <div class="custom-control custom-radio mb-3">
                                    <input name="status" class="custom-control-input{{ $errors->has('status') ? ' is-invalid' : '' }}" id="customRadio3 recap" type="radio" value="recap" {{ old('status') == 'recap' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customRadio3">
                                        <span>{{ __('dashboard.Upcoming') }}</span>
                                    </label>
                                </div>
                            </div>

                            <hr class="my-6" />



                            {{-- The Anime Genres (Tags e.g. Action, Magic .. etc) --}}
                            {{-- All tags are splitted with commas (,) and stored in another two places --}}
                            {{-- 1- the hidden input called 'genres' as a text => "Action, Adventure,"--}}
                            {{-- 2- the suggestions div tag as children divs --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-genres">{{ __('dashboard.Genres') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('genres'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('genres') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                {{-- The tags will be automaticlly stored when user press Enter or comma (,) --}}
                                <input type="text" id="input-genres" class="form-control{{ $errors->has('genres') ? ' is-invalid' : '' }}" placeholder="أكشن, مغامرات">

                                {{-- here the actual tags are stored --}}
                                {{-- all tags are translated into Arabic on the server side (AnimeController@store) --}}
                                <input type="hidden" name="genres" id="tags-container" value="{{ old('genres') }}">

                                {{-- When the user trying to write a new tag, the next box will be displayed--}}
                                {{-- and this box contains all suggesstions for the tag --}}
                                {{-- So, the user doesn't need to write the full text of the tag --}}
                                <div id="suggestions" class="bg-white border border-top-0 position-absolute">
                                    {{-- @foreach ($tags as $tag)
                                        <p class="py-2 px-6 mb-0" style="display:none;cursor: pointer;">{{ $tag }}</p>
                                    @endforeach --}}
                                </div>

                                <span class="text-muted h5 my-1">  * {{ __('dashboard.Separate genres with commas') }}</span>

                                {{-- When the user add a new tag, it will be showen in this div as child --}}
                                {{-- and all inserted tags has the option to be removed by clicking on close icon --}}
                                <div id="tags" class="row"></div>
                            </div>

                                                        
                            {{-- The Anime Genres (Tags e.g. Action, Magic .. etc) --}}
                            {{-- All tags are splitted with commas (,) and stored in another two places --}}
                            {{-- 1- the hidden input called 'genres' as a text => "Action, Adventure,"--}}
                            {{-- 2- the suggestions div tag as children divs --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-genres">{{ __('dashboard.Genres') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('genres'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('genres') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                {{-- The tags will be automaticlly stored when user press Enter or comma (,) --}}
                                <input type="text" id="input-genres" class="form-control{{ $errors->has('genres') ? ' is-invalid' : '' }}" placeholder="أكشن, مغامرات">

                                {{-- here the actual tags are stored --}}
                                {{-- all tags are translated into Arabic on the server side (AnimeController@store) --}}
                                <input type="hidden" name="genres" id="tags-container" value="{{ old('genres') }}">

                                {{-- When the user trying to write a new tag, the next box will be displayed--}}
                                {{-- and this box contains all suggesstions for the tag --}}
                                {{-- So, the user doesn't need to write the full text of the tag --}}
                                <div id="suggestions" class="bg-white border border-top-0 position-absolute">
                                    {{-- @foreach ($tags as $tag)
                                        <p class="py-2 px-6 mb-0" style="display:none;cursor: pointer;">{{ $tag }}</p>
                                    @endforeach --}}
                                </div>

                                <span class="text-muted h5 my-1">  * {{ __('dashboard.Separate genres with commas') }}</span>

                                {{-- When the user add a new tag, it will be showen in this div as child --}}
                                {{-- and all inserted tags has the option to be removed by clicking on close icon --}}
                                <div id="tags" class="row"></div>
                            </div>


                            
                            <hr class="my-6" />
                                                        
                            {{-- The other names for the anime --}}
                            {{-- English Title --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-title_english">{{ __('dashboard.English Title') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('title_english'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('title_english') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <input type="text" name="title_english" id="input-title_english" class="form-control{{ $errors->has('title_english') ? ' is-invalid' : '' }}" placeholder="Fullmetal Alchemist: Brotherhood" value="{{ old('title_english') }}">
                            </div>


                            {{-- Japanese Title --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-title_japanese">{{ __('dashboard.Japanese Title') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('title_japanese'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('title_japanese') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <input type="text" name="title_japanese" id="input-title_japanese" class="form-control{{ $errors->has('title_japanese') ? ' is-invalid' : '' }}" placeholder="鋼の錬金術師 FULLMETAL ALCHEMIST" value="{{ old('title_japanese') }}">
                            </div>
                            
                            {{-- Title Romanji --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-title_romanji">{{ __('dashboard.Title Romanji') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('title_romanji'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('title_romanji') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <input type="text" name="title_romanji" id="input-title_romanji" class="form-control{{ $errors->has('title_romanji') ? ' is-invalid' : '' }}" placeholder="Fullmetal Alchemist (2009), FMA, FMAB" value="{{ old('title_synonyms') }}">
                            </div>
                            
                            <hr class="my-6" />
                            
                            {{-- The date of this episodes --}}
                            <div class="row">
                                {{-- Aired From --}}
                                <div class="form-group col">
                                    <label class="form-control-label d-block" for="input-aired">{{ __('dashboard.Airing Date') }}</label>
                                    
                                    {{-- Display an error message here --}}
                                    @if ($errors->has('aired'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ $errors->first('aired') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    <input type="date" id="aired" name="aired" class="rounded p-3{{ $errors->has('aired') ? ' border-danger' : ' border' }}" value="{{ old('aired_from') }}">
                                </div>
                            </div>

                            {{-- Streaming Servers list --}}
                            {{-- Every link in new line --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-streaming_servers">{{ __('dashboard.Streaming Servers') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('streaming_servers'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('streaming_servers') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <textarea id="input-background" name="background" autocomplete="false" class="form-control{{ $errors->has('background') ? ' is-invalid' : '' }}" rows="4" placeholder="Fullmetal Alchemist: Brotherhood is an alternate retelling of Hiromu Arakawa's Fullmetal Alchemist manga that is closer to the source material than the previous 2003 adaptation, this time covering the entire story.">{{ old('background') }}</textarea>
                            </div>

                            {{-- Downloading Servers list --}}
                            {{-- Every link in new line --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-download_servers">{{ __('dashboard.Download Servers') }}</label>
                                
                                {{-- Display an error message here --}}
                                @if ($errors->has('download_servers'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('download_servers') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <textarea id="input-background" name="background" autocomplete="false" class="form-control{{ $errors->has('background') ? ' is-invalid' : '' }}" rows="4" placeholder="Fullmetal Alchemist: Brotherhood is an alternate retelling of Hiromu Arakawa's Fullmetal Alchemist manga that is closer to the source material than the previous 2003 adaptation, this time covering the entire story.">{{ old('background') }}</textarea>
                            </div>
                            

                            {{-- Notes --}}
                            <div class="form-group">
                                <label class="form-control-label" for="input-opening_themes">{{ __('dashboard.Opening Themes') }} <span class="text-muted">({{ __('dashboard.Every line is a new theme') }})</span></label>

                                {{-- Display an error message here --}}
                                @if ($errors->has('opening_themes'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $errors->first('opening_themes') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <textarea id="input-opening_themes" name="opening_themes" autocomplete="false" class="form-control{{ $errors->has('opening_themes') ? ' is-invalid' : '' }}" rows="4" placeholder='"again" by YUI (eps 1-14)' dir="ltr">{{ old('opening_themes') }}</textarea>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('dashboard.Add Anime') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('layouts.footers.auth')
</div>
@endsection