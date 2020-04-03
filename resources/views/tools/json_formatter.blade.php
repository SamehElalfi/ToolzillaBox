@extends('layouts.app')

@section('title', 'Json Formatter')

@section('description', 'Online Json formatter & validator & parser & beautifies & debugs & parser & viewer & editor & Pretty Print and json data with advanced formatting and validation algorithms.')

@section('style')
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
        z-index: 20;
        border-radius: 0 0 5px 5px;
        }

        /* Links inside the dropdown */
        .menubar .dropdown-content a {
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
@endsection

@section('content')

    @include('layouts.header')

    <section class="section">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content small-text">
                    <div class="block block--boxed">

                        {{-- Top Options --}}
                        <div class="col-lg-12" style="background: #1e38a3; padding: 0;">

                            {{-- Top Menu Bar --}}
                            <div class="col-12 menubar"style="padding: 0; background: #021048;">
                                <div class="dropd col-1">
                                    <div onclick="dropdown_btn(this)" class="dropbtn">File
                                    <div id="myDropdown" class="dropdown-content">
                                        <a onclick="write_example()">Load an Example</a>
                                        <a class="spliter"></a>
                                      <a onclick="clear_editor();">Clear Editor</a>
                                      <a onclick="clear_viewer();">Clear Viewer</a>
                                      <a onclick="clear_editor(); clear_viewer();">Clear All</a>
                                      <a class="spliter"></a>
                                      <a onclick="$('#url-section').toggleClass('hidden')">Load from URL</a>
                                      <a onclick="parse()">Parse / Formate</a>
                                      <a onclick="validate(editor.getValue())">Validate</a>
                                      <a class="spliter"></a>
                                      <a onclick="download_json()">Download</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="dropd col-1">
                                    <div onclick="dropdown_btn(this)" class="dropbtn">Edit
                                    <div id="myDropdown" class="dropdown-content">
                                      <a onclick="editor.undo()">Undo</a>
                                      <a onclick="editor.redo()">Redo</a>
                                      <a class="spliter"></a>
                                      <a onclick="copy_editor()">Copy Editor Code</a>
                                      <a onclick="paste_editor()">Paste in Editor</a>
                                      <a class="spliter"></a>
                                      <a onclick="copy_viewer()">Copy Viewer Code</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="dropd col-1">
                                    <div onclick="dropdown_btn(this)" class="dropbtn">View
                                    <div id="myDropdown" class="dropdown-content">
                                      <a onclick="change_view_mode('tree', this)">Tree Mode</a>
                                      <a onclick="change_view_mode('Text', this)">Text Mode</a>
                                      {{-- <a href="#">Dark Mode</a> --}}
                                    </div>
                                    </div>
                                </div>
                                <div class="dropd col-1">
                                    <div onclick="dropdown_btn(this)" class="dropbtn">Help
                                    <div id="myDropdown" class="dropdown-content">
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftoolzillabox.com%2Ftools%2Fjsonformatter&amp;src=sdkpreparse">Share on Facebook</a>
                                        <a target="_blank" href="https://twitter.com/intent/tweet?text=I%20love%20to%20share%20this%20amazing%20tool.%20I%20really%20recommend%20it.&amp;url=https://toolzillabox.com/tools/jsonformatter">Share on Twitter</a>
                                        <a class="spliter"></a>
                                        <a href="#tool-using">Questions</a>
                                        <a href="#tool-using">Tips and Tricks</a>
                                        <a class="spliter"></a>
                                        <a href="#about-tool">About</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="control-buttons" style="float: right;">
                                    <div style="background: #ed5957;width: 15px;height: 15px;border-radius: 15px;margin: 7px;float: right;"></div>
                                    <div style="background: #f8b830;width: 15px;height: 15px;border-radius: 15px;margin: 7px;float: right;"></div>
                                    <div style="background: #28c53d;width: 15px;height: 15px;border-radius: 15px;margin: 7px;float: right;"></div>
                                </div>
                            </div>

                            {{-- Top Icon Bar --}}
                            <div class="iconbar row justify-content-center">

                                {{-- Editor Icon --}}
                                <div class="col-md-3 col-sm-12 justify-content-center">
                                    
                                    <div onclick="paste_editor()" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: transparent;">
                                        <i class="fa fa-paste"></i>
                                        <span class="btn-hover-effect"></span>
                                    </div>
                                    
                                    <div onclick="copy_editor()" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: transparent;">
                                        <i class="fa fa-copy"></i>
                                        <span class="btn-hover-effect"></span>
                                    </div>
                                    
                                    <div onclick="clear_editor()" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: transparent;">
                                        <i class="fa fa-remove"></i>
                                        <span class="btn-hover-effect"></span>
                                    </div>

                                </div>

                                {{-- Main Buttons --}}
                                <div class="col-md-6 col-sm-12 justify-content-center">
                                    <div class="col-sm-12 col-md-3 width-100" style="display: inline-block; padding: 10px; color: #fff; font-weight: bold; ">
                                        <select name="taps" id="json-taps">
                                            <option value="4">4 Taps</option>
                                            <option value="3">3 Taps</option>
                                            <option value="2">2 Taps</option>
                                            <option value="1">1 Taps</option>
                                            <option value="0">Compact (no spaces)</option>
                                        </select>
                                    </div> 
                                    <div onclick="parse()" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: transparent;">
                                        <span class="btn__text"><i class="fa fa-cog"></i><span style="margin: 0 0 0 10px ;">Parse / Format</span></span>
                                        <span class="btn-hover-effect"></span>
                                    </div>
                                    <div onclick="validate(editor.getValue())" class="btn btn--sm" id="validator-btn" style="margin: 0 10px 0 0; color:#fff;background: transparent;">
                                        <span class="btn__text"><i class="fa fa-check"></i><span style="margin: 0 0 0 10px ;">Validate</span></span>
                                        <span class="btn-hover-effect"></span>
                                    </div>
                                    <div onclick="$('#url-section').toggleClass('hidden'); $('#url-section').focus();" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: transparent;">
                                        <span class="btn__text"><i class="fa fa-external-link"></i><span style="margin: 0 0 0 10px ;">URL</span></span>
                                        <span class="btn-hover-effect"></span>
                                    </div>
                                </div>

                                {{-- Viewer Icons --}}
                                <div class="col-md-3 col-sm-12 justify-content-right">
                                    <div onclick="copy_viewer()" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: transparent;">
                                        <i class="fa fa-copy"></i>
                                        <span class="btn-hover-effect"></span>
                                    </div>
                                    <div onclick="clear_viewer()" class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: transparent;">
                                        <i class="fa fa-remove"></i>
                                        <span class="btn-hover-effect"></span>
                                    </div>
                                    <div class="menubar">
                                        <div class="dropd btn--sm" style="padding: 10px;">
                                            <div onclick="dropdown_btn(this)" class="dropbtn dropbtn bg-transparent bg-hovert-transparent">View <span class="fa fa-angle-down"></span>
                                            <div id="myDropdown" class="dropdown-content">
                                            <a onclick="change_view_mode('tree', this)" class="text-white bg-primary">Tree</a>
                                            <a onclick="change_view_mode('Text', this)">Text</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- URL Input Field --}}
                            <div class="iconbar row justify-content-center hidden" style=" padding: 0 20px 10px; position: relative; " id="url-section">
                                <input type="text" placeholder="https://" id="url-input" class="form-control form-control--lg" style="padding: 0 125px 0 16px;" spellcheck="false" autocomplete="off">
                                <div class="btn black-hover" onclick="load_url()" style="position: absolute;top: 2px;right: 25px;color: #a1a5b2;background: transparent;">
                                    <span class="btn__text fa fa-cloud-upload"></span>
                                </div>
                            </div>

                        </div>

                        {{-- Left Side JSON Editor --}}
                        <div class="col-sm-12 col-lg-6" style="position:relative; min-height: 500px; margin: 0;">
                            <div id="editor"></div>
                        </div>

                        {{-- Right Side JSON Viewer --}}
                        <div class="col-sm-12 col-lg-6" style="position:relative; min-height: 500px; margin: 0; color:#10100e;padding:0; background:#ffffff">
                            <pre style="padding: 0; margin: 0; min-height: 100%; height: 500px;" class="p-3" id="json-renderer"></pre>
                            <pre class="hidden" id="json-renderer-hidden"></pre>
                        </div>

                        {{-- Bottom Options --}}
                        <div class="col-lg-12" style="background: #10100e">
                            <div style="margin: 10px 0;">

                                {{-- Left Side Buttons --}}
                                <div class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: transparent;" onclick="download_json()">
                                    <span class="btn__text"><i class="fa fa-download"></i><span style="margin: 0 0 0 10px ;">Download</span></span>
                                    <span class="btn-hover-effect"></span>
                                </div>
                                <div class="btn btn--sm" style="margin: 0 10px 0 0; color:#fff;background: transparent;" onclick="write_example()">
                                    <span class="btn__text"><i class="fa fa-code"></i><span style="margin: 0 0 0 10px ;">Example</span></span>
                                    <span class="btn-hover-effect"></span>
                                </div>
                                <span class="btn btn__text text-success hidden btn--sm" onclick="$(this).addClass('hidden')" id="valid-json-check">
                                    <i class="fa fa-check"></i>
                                    <span>Valid JSON Code</span>
                                </span>
                                <input id="focus" class="hidden">

                                {{-- Right Side Buttons --}}
                                <div class="menubar pull-right">
                                    <div class="dropd dropbtn btn--sm bg-hover-primary" style="padding: 10px;background: #007bfc; transition: all .2s ease,height .2s ease;" onclick="dropdown_btn(this)">
                                        <div class="dropbtn btn--primary bg-hover-transparent bg-transparent" style="font-weight: bold;"><i class="fa fa-share"></i> Share
                                            <div id="myDropdown" class="dropdown-content">
                                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftoolzillabox.com%2Ftools%2Fjsonformatter&amp;src=sdkpreparse" class="text-white bg-primary">Facebook</a>
                                            <a target="_blank" href='https://twitter.com/intent/tweet?text=I%20love%20to%20share%20this%20amazing%20tool.%20I%20really%20recommend%20it.&url=https://toolzillabox.com/tools/jsonformatter'>Twitter</a>
                                            </div>
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
    <textarea id="t" style="width:0;height:0;"></textarea>

    @include('layouts.about_tool', ['about_title'=>'About JSON Formatter?', 'about_text'=>'Online Json formatter & validator & parser & beautifies & debugs & parser & viewer & editor & Pretty Print and json data with advanced formatting and validation algorithms. <a href="/blog/what-are-json-file-and-json-format-and-examples/#Why_this_tool?">Learn More</a>'])

    @include('layouts.usage', [
        'article' => "Learn how to use this tool with more tricks from <a href='/blog/what-are-json-file-and-json-format-and-examples/#Why_this_tool?'>this article.</a>",
        'questions'=>[
            [
                'q'=>'What can you do with JSON Viewer?',
                'answer'=>'<ul>
                    <li>Beautify/Format your JSON.</li>
                    <li>Validate your JSON and help you to fix an error.</li>
                    <li>Parse and Display your JSON in a tree view.</li>
                    <li>Minify/Compress your JSON.</li>
                    <li>Once you have created JSON Data. You can download as a file or save as link and Share.</li>
                    </ul>'
            ],
            [
                'q'=>'Is Any of My Json Data Recorded or Stored?',
                'answer'=>'Absolutely not! Your data is merely processed directly in your browser and send any of yor json data outsite this page. For more information visit our <a href="/legal/privacy/">Privacy Policy</a>.'
            ],
            [
                'q'=>'Can I Donate to the Project?',
                'answer'=>'Definitely! Although you are in no way obligated, we genuinely appreciate every contribution we receive.<br>Please visit <a href="https://www.patreon.com/user?u=32591056&fan_landing=true">ToolzillaBox on patreon</a>'
            ],
            [
                'q'=>'I Have a Problem With My Json Code, Can I Get Help?',
                'answer'=>'Ofcourse, We will be happy to help you. Use <a href="/contact">Contact Us</a> page to get help.'
            ],
        ]
    ])

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
    
    @include('layouts.mail')

    @include('layouts.blog')
    @endsection

    @section('script')
    <script src="https://pagecdn.io/lib/ace/1.4.8/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/sqlserver");
        editor.session.setMode("ace/mode/json");
        
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function dropdown_btn(q) {
            $(".dropdown-content").removeClass("show");
            $(q).find("#myDropdown").toggleClass("show");
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
    <script> 
        /**
        * jQuery json-viewer
        * @author: Alexandre Bodelot <alexandre.bodelot@gmail.com>
            * @link: https://github.com/abodelot/jquery.json-viewer
        */
        (function($) {

        /**
        * Check if arg is either an array with at least 1 element, or a dict with at least 1 key
        * @return boolean
        */
        function isCollapsable(arg) {
        return arg instanceof Object && Object.keys(arg).length > 0;
        }

        /**
        * Check if a string represents a valid url
        * @return boolean
        */
        function isUrl(string) {
        var urlRegexp = /^(https?:\/\/|ftps?:\/\/)?([a-z0-9%-]+\.){1,}([a-z0-9-]+)?(:(\d{1,5}))?(\/([a-z0-9\-._~:/?#[\]@!$&'()*+,;=%]+)?)?$/i;
        return urlRegexp.test(string);
        }

        /**
        * Transform a json object into html representation
        * @return string
        */
        function json2html(json, options) {
        var html = '';
        if (typeof json === 'string') {
            // Escape tags and quotes
            json = json
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/'/g, '&apos;')
            .replace(/"/g, '&quot;');

            if (options.withLinks && isUrl(json)) {
            html += '<a href="' + json + '" class="json-string" target="_blank">' + json + '</a>';
            } else {
            // Escape double quotes in the rendered non-URL string.
            json = json.replace(/&quot;/g, '\\&quot;');
            html += '<span class="json-string">"' + json + '"</span>';
            }
        } else if (typeof json === 'number') {
            html += '<span class="json-literal">' + json + '</span>';
        } else if (typeof json === 'boolean') {
            html += '<span class="json-literal">' + json + '</span>';
        } else if (json === null) {
            html += '<span class="json-literal">null</span>';
        } else if (json instanceof Array) {
            if (json.length > 0) {
            html += '[<ol class="json-array">';
            for (var i = 0; i < json.length; ++i) {
                html += '<li>';
                // Add toggle button if item is collapsable
                if (isCollapsable(json[i])) {
                html += '<a href class="json-toggle"></a>';
                }
                html += json2html(json[i], options);
                // Add comma if item is not last
                if (i < json.length - 1) {
                html += ',';
                }
                html += '</li>';
            }
            html += '</ol>]';
            } else {
            html += '[]';
            }
        } else if (typeof json === 'object') {
            var keyCount = Object.keys(json).length;
            if (keyCount > 0) {
            html += '{<ul class="json-dict">';
            for (var key in json) {
                if (Object.prototype.hasOwnProperty.call(json, key)) {
                html += '<li>';
                var keyRepr = options.withQuotes ?
                    '<span class="json-string">"' + key + '"</span>' : key;
                // Add toggle button if item is collapsable
                if (isCollapsable(json[key])) {
                    html += '<a href class="json-toggle">' + keyRepr + '</a>';
                } else {
                    html += keyRepr;
                }
                html += ': ' + json2html(json[key], options);
                // Add comma if item is not last
                if (--keyCount > 0) {
                    html += ',';
                }
                html += '</li>';
                }
            }
            html += '</ul>}';
            } else {
            html += '{}';
            }
        }
        return html;
        }

        /**
        * jQuery plugin method
        * @param json: a javascript object
        * @param options: an optional options hash
        */
        $.fn.jsonViewer = function(json, options) {
        // Merge user options with default options
        options = Object.assign({}, {
            collapsed: false,
            rootCollapsable: true,
            withQuotes: false,
            withLinks: true
        }, options);

        // jQuery chaining
        return this.each(function() {

            // Transform to HTML
            var html = json2html(json, options);
            if (options.rootCollapsable && isCollapsable(json)) {
            html = '<a href class="json-toggle"></a>' + html;
            }

            // Insert HTML in target DOM element
            $(this).html(html);
            $(this).addClass('json-document');

            // Bind click on toggle buttons
            $(this).off('click');
            $(this).on('click', 'a.json-toggle', function() {
            var target = $(this).toggleClass('collapsed').siblings('ul.json-dict, ol.json-array');
            target.toggle();
            if (target.is(':visible')) {
                target.siblings('.json-placeholder').remove();
            } else {
                var count = target.children('li').length;
                var placeholder = count + (count > 1 ? ' items' : ' item');
                target.after('<a href class="json-placeholder">' + placeholder + '</a>');
            }
            return false;
            });

            // Simulate click on toggle button when placeholder is clicked
            $(this).on('click', 'a.json-placeholder', function() {
            $(this).siblings('a.json-toggle').click();
            return false;
            });

            if (options.collapsed == true) {
            // Trigger click to collapse all nodes
            $(this).find('a.json-toggle').click();
            }
        });
        };
        })(jQuery);

        //  console.log(123);

        function validate (json_code) {
            try {
                let parsed_json = JSON.parse(json_code);
                // console.log(parsed_json);
                $('#valid-json-check').removeClass('hidden');
                $('#validator-btn').addClass('text-success');
                $('#validator-btn').removeClass('text-danger');
                return parsed_json;
            } catch (error) {
                $('#valid-json-check').addClass('hidden');
                $('#validator-btn').removeClass('text-success');
                $('#validator-btn').addClass('text-danger');
            alert ('Not Valid JSON Code');
            return false;
            }
        }
        viewer_mode = 'tree';
        function parse() {
            let json_code = editor.getValue();
            // console.log(json_code);

            // Is this a valide json
            let parsed_json = validate (json_code);
            if (!parsed_json) {
                return
            }

            // Get the current viewer mode
            if (viewer_mode == 'tree') {
                // Add Formatted JSON Code
                $('#json-renderer').jsonViewer(parsed_json, {collapsed: true, withQuotes: true, withLinks: false, rootCollapsable: false});
                $('#json-renderer-hidden').text(JSON.stringify(parsed_json, null, 4));
            } else {
                try {
                    var json_taps = parseInt($('#json-taps option')[0].value);
                } catch (error) {
                    var json_taps = 4;
                }

                // Add Formatted JSON Code
                $('#json-renderer').text(JSON.stringify(parsed_json, null, json_taps));
                $('#json-renderer-hidden').text(JSON.stringify(parsed_json, null, json_taps));
            }

        }

        // Download Formatted JSON Code in file named with timestamp
        function download_json() {
            let data = $('#json-renderer-hidden').text();
            if (!data) {
                alert('Empty JSON Code. Please, Write JSON in the editor then click parse/format before download file');
                return
            }
            
            let filename = new Date().toUTCString() + '.json'
            let type = 'josn'

            var file = new Blob([data], {type: type});
            if (window.navigator.msSaveOrOpenBlob) // IE10+
                window.navigator.msSaveOrOpenBlob(file, filename);
            else { // Others
                var a = document.createElement("a"),
                        url = URL.createObjectURL(file);
                a.href = url;
                a.download = filename;
                document.body.appendChild(a);
                a.click();
                setTimeout(function() {
                    document.body.removeChild(a);
                    window.URL.revokeObjectURL(url);  
                }, 0); 
            }
        }

        // Clear the Editor
        function clear_editor() {
            editor.setValue('');
        }

        // Clear the viewer
        function clear_viewer() {
            $('#json-renderer').text('');
        }
        
        function paste_editor() {
            $('#t').focus();
            var x = navigator.clipboard.readText()
            x.then(function (result) {
                // alert(result);
                editor.setValue(result);
            });
        }

        function write_example() {
            let text = `{
        "Tools": {
            "tool": [
            {
                "id": "1",
                "name": "password generator",
                "link": "https://toolzillabox.com/tools/passwordgenerator"
            },
            {
                "id": "2",
                "name": "json formatter",
                "link": "https://toolzillabox.com/tools/jsonformatter"
            }
            ]
        }
        }`;
            editor.setValue(text);
            parse();
        }
        function change_view_mode(mode, element) {
            viewer_mode = mode;
            elements = $(element).parent().children();
            for (i=0; i<=elements.length; i++) {
                $(elements[i]).removeClass('text-white bg-primary');
            }
            $(element).addClass('text-white bg-primary');
            parse()
        }
        function load_url() {
            url = $('#url-input')[0].value
            if (!/^https?:\/\//i.test(url)) {
            url = 'http://' + url;
        }
        // url = 'https://api.jikan.moe/v3/anime/21'
        $.getJSON(url, function(data) {
            console.log(data);
            editor.setValue(JSON.stringify(data, null, 4));
            parse();
            });
            $('#url-section').toggleClass('hidden');
        }
        function copy_editor() {
            copy(editor.getValue());
        }
        function copy_viewer() {
            copy($('#json-renderer').text());
        }
        function copy(text) {
            var t = document.getElementById('t')
            t.innerHTML = text
            t.select()
            try {
                var successful = document.execCommand('copy')
                var msg = successful ? 'successfully' : 'unsuccessfully'
                console.log('text coppied ' + msg)
            } catch (err) {
                console.log('Unable to copy text')
            }
            t.innerHTML = ''
            }
        // write_example()
    </script>
@endsection