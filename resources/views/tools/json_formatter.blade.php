@extends('layouts.app')

@section('title', 'Json Formatter')

@section('description', 'Online Json formatter & validator & parser & beautifies & debugs & parser & viewer & editor & Pretty Print and json data with advanced formatting and validation algorithms.')
@section('content')

    @include('layouts.header')
    <style type="text/css" media="screen">
        #editor { 
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        /* Dropdown Button */
        .menubar .dropbtn {
        color: white;
        padding: 0 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        text-align: center;
        }

        /* Dropdown button on hover & focus */
        .menubar .dropbtn:hover, .menubar .dropbtn:focus {
        background-color: #10100e;
        }

        /* The container <div> - needed to position the dropdown content */
        .menubar .dropd {
        position: relative;
        display: inline-block;
        padding: 0;
        }

        /* Dropdown Content (Hidden by Default) */
        .menubar .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 10;
        border-radius: 0 0 5px 5px;
        }

        /* Links inside the dropdown */
        .menubar .dropdown-content a {
            border-bottom: 1px solid #dedede;
            color: black;
            padding: 4px 10px;
            text-decoration: none;
            display: block;
        }
        .menubar .dropdown-content a:last-child {
            border-bottom: none;
        }
        /* Change color of dropdown links on hover */
        .menubar .dropdown-content a:hover {background-color: #ddd}

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .menubar .show {display:block;}
    </style>
    <section class="section">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content">
                    <div class="block block--boxed block--contact" id="contact">
                        {{-- <div class="block__body row">
                            <h2 class="block__title h3">JSON Formatter</h2>
                            <div class="box__alert alert alert--info alert--faded alert--xlg">
                                <div class="alert__body h5">Donate for Toolzillabox on Patrion. This will make us happy. Thank You! ❤️</div>
                                <div class="alert__actions">
                                    <a href="/donate" class="btn btn--primary"><span class="btn__text">Donate</span><span class="btn-hover-effect" style="left: 100.719px; top: 41px;"></span><span class="btn-hover-effect" style="left: 97.7188px; top: 20px;"></span><span class="btn-hover-effect"></span><span class="btn-hover-effect"></span><span class="btn-hover-effect" style="left: 59.7188px; top: 47px;"></span></a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <form class="form" method="POST">
                                    <input type="hidden" name="_token" value="ahRzo6yGkZZMNWVGQoew4BqXL3rQUMpNng4VlZUA">
                                    <input type="hidden" name="previous_url" value="http://127.0.0.1:8000/contact">
                                    <div class="row row--sm">
                                        <div class="col-sm-6 col-lg-10 form-group">
                                            <label class="form-label">URL (Optional)</label>
                                            <input type="text" name="fname" value="" class="form-control form-control--lg" maxlength="255" placeholder="https://">
                                        </div>
                                        <div class="col-sm-6 col-lg-2 form-group">
                                            <div class="" style="margin: 35px 0;">
                                                <button type="submit" class="btn btn--lg btn--primary" style="width: 100%;">
                                                    <span class="btn__text">Load</span>
                                                    <span class="btn-hover-effect"></span>
                                                    <span class="btn-hover-effect"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="" style="margin: 10px 0;">
                                        <button type="submit" class="btn btn--lg btn--primary" style="margin: 0 10px 0 0;">
                                            <span class="btn__text">Paste</span>
                                            <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect" style="left: 104.844px; top: 36px;"></span>
                                        </button>
                                        <button type="submit" class="btn btn--lg btn--danger" style="margin: 0 10px;">
                                            <span class="btn__text">Clear</span>
                                            <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect" style="left: 104.844px; top: 36px;"></span>
                                        </button>
                                        <button type="submit" class="btn btn--lg btn--primary" style="margin: 0 10px;float: right;">
                                            <span class="btn__text">Parse / Format</span>
                                            <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect" style="left: 9px; top: 49px;"></span>
                                        </button>
                                        <button type="submit" class="btn btn--lg btn--primary" style="margin: 0 10px;float: right;">
                                                <span class="btn__text">Copy</span>
                                                <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect"></span>
                                        </button>
                                        <div style="margin: 10px 0;">
                                            <select class="btn btn--lg btn--outline">
                                                <option value="4">4 Spaces Tap</option>
                                                <option value="3">3 Spaces Tap</option>
                                                <option value="2">2 Spaces Tap</option>
                                                <option value="1">1 Spaces Tap</option>
                                                <option value="0">Compact (no spaces)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" class="form-control form-control--lg" value="" required="" spellcheck="false" style="text-rendering: auto;flex-direction: row;" placeholder="JSON Code"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn--lg btn--outline" style="margin: 0 10px;float: right;">
                                            <span class="btn__text">Dark Mode</span>
                                            <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect"></span>
                                        </button>
                                        <button type="submit" class="btn btn--lg btn--info" style="margin: 0 10px;float: right;">
                                            <span class="btn__text">Tree Mode</span>
                                            <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        
                        <div class="col-lg-12" style="background: #10100e; padding: 0; ">
                            <div class="col-12 menubar"style="padding: 0; background: #000;">
                                <div class="dropd col-1">
                                    <div onclick="myFunction(this)" class="dropbtn">File
                                    <div id="myDropdown" class="dropdown-content">
                                      <a href="#">Link 1</a>
                                      <a href="#">Link 2</a>
                                      <a href="#">Link 3</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="dropd col-1">
                                    <div onclick="myFunction(this)" class="dropbtn">Edit
                                    <div id="myDropdown" class="dropdown-content">
                                      <a href="#">Link 11</a>
                                      <a href="#">Link 21</a>
                                      <a href="#">Link 31</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="dropd col-1">
                                    <div onclick="myFunction(this)" class="dropbtn">View
                                    <div id="myDropdown" class="dropdown-content">
                                      <a href="#">Link 12</a>
                                      <a href="#">Link 22</a>
                                      <a href="#">Link 32</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="dropd col-1">
                                    <div onclick="myFunction(this)" class="dropbtn">Help
                                    <div id="myDropdown" class="dropdown-content">
                                      <a href="#">Link 13</a>
                                      <a href="#">Link 23</a>
                                      <a href="#">Link 33</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="control-buttons" style="float: right;">
                                    <div style="background: #ed5957;width: 15px;height: 15px;border-radius: 15px;margin: 7px;float: right;"></div>
                                    <div style="background: #f8b830;width: 15px;height: 15px;border-radius: 15px;margin: 7px;float: right;"></div>
                                    <div style="background: #28c53d;width: 15px;height: 15px;border-radius: 15px;margin: 7px;float: right;"></div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: #10100e;">
                                    <span class="btn__text"><i class="fa fa-paste"></i><span style="margin: 0 0 0 10px ;">Paste</span></span>
                                    <span class="btn-hover-effect"></span>
                                </button>
                                <button type="submit" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: #10100e;">
                                    <span class="btn__text"><i class="fa fa-copy"></i><span style="margin: 0 0 0 10px ;">Copy</span></span>
                                    <span class="btn-hover-effect"></span>
                                </button>
                                <button type="submit" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: #10100e;">
                                    <span class="btn__text"><i class="fa fa-remove"></i><span style="margin: 0 0 0 10px ;">Clear</span></span>
                                    <span class="btn-hover-effect"></span>
                                </button>
                                <div class="col-2" style=" float: right; padding: 10px; color: #fff; font-weight: bold; ">
                                    <i class="fa fa-align-left"></i>
                                    <select name="taps" id="">
                                        <option value="4">4 Taps</option>
                                        <option value="3">3 Taps</option>
                                        <option value="2">2 Taps</option>
                                        <option value="1">1 Taps</option>
                                        <option value="0">Compact (no spaces)</option>
                                    </select>
                                </div> 
                                <button type="submit" class="btn btn--sm" style="margin: 0 10px 0 0;float: right; color:#fff;background: #10100e;">
                                    <span class="btn__text"><i class="fa fa-cog"></i><span style="margin: 0 0 0 10px ;">Parse / Format</span></span>
                                    <span class="btn-hover-effect"></span>
                                </button>
                                <button type="submit" class="btn btn--sm" style="margin: 0 10px 0 0;float: right; color:#fff;background: #10100e;">
                                    <span class="btn__text"><i class="fa fa-check"></i><span style="margin: 0 0 0 10px ;">Validate</span></span>
                                    <span class="btn-hover-effect"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6" style="position:relative; min-height: 500px; margin: 0;">
                            <div id="editor">function foo(items) {
    var x = "All this is syntax highlighted";
    return x;
}
</div>
                        </div>
                        <div class="col-sm-12 col-lg-6" style="position:relative; min-height: 500px; margin: 0; color:#fff; background:#272822">
                            <div style="padding: 14px;" class="p-3">function foo(items) {
                                var x = "All this is syntax highlighted";
                                return x;
                            }</div>
                        </div>
                        <div class="col-lg-12" style="background: #10100e">
                            <div class="" style="margin: 10px 0;">
                                <button type="submit" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: #10100e;">
                                    <span class="btn__text"><i class="fa fa-save"></i><span style="margin: 0 0 0 10px ;">Save</span></span>
                                    <span class="btn-hover-effect"></span>
                                </button>
                                <button type="submit" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: #10100e;">
                                    <span class="btn__text"><i class="fa fa-download"></i><span style="margin: 0 0 0 10px ;">Download</span></span>
                                    <span class="btn-hover-effect"></span>
                                </button>
                                <button type="submit" class="btn btn--sm" style="margin: 0 10px 0 0;float: right; color:#fff;background: #10100e;">
                                    <span class="btn__text"><i class="fa fa-share"></i><span style="margin: 0 0 0 10px ;">Share</span></span>
                                    <span class="btn-hover-effect"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.donate')

    <section class="section">
		<div class="container ">
            <div class="recent-news">
				<h2 class="section__title ">All Categories</h2>
                <p class="section__desc" style="margin: -48px auto 15px;">Browse all tools from the main categories</p>
                <section class="section" id="apps" style="padding: 0;border-bottom: none;">
                    <div class="container ">
                        <div class="section__content">
                            @include('layouts.cates')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    
<script src="https://pagecdn.io/lib/ace/1.4.8/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/javascript");
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction(q) {
    $(".dropdown-content").removeClass("show");
    $(q).find("#myDropdown").toggleClass("show");
    console.log(q);
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
    @include('layouts.mail')

    @include('layouts.blog')
@endsection