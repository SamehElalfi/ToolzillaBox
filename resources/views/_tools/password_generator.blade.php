@extends('layouts.main')

@section('title', 'Password Generator')

@section('description', 'Strong and random and secure Password generator tool creates passwords from Words and numbers and capital letters and small letters and Symbols to help you secure your device from hackers.')

@section('keywords', 'Strong Random Password Generator, secure passwords Generator, Strong Password Generator, Random Password Generator, Strong Password Generator')

@section('content')

    @include('layouts.header')

    <section class="section">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content">
                    <div class="block block--boxed block--contact" id="contact">
                        <div class="block__body row">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.about_tool', ['about_title'=>'About Password Generator?', 'about_text'=>'The password generator is a tool to generate Strong random and secure Passwords from numbers and capital & small letters and Symbols to help you secure your accounts from hackers. To know more about passwords and how to protect yourself from hackers read our guide <a href="/blog/best-guide-to-create-a-strong-and-secure-password-in-2020/#Explain_the_password_generator_tool">"Best guide To Create A Strong and secure Password in 2020"</a>'])

    @include('layouts.usage', [
        'article' => 'Learn how to use this tool with tricks from <a href="/blog/best-guide-to-create-a-strong-and-secure-password-in-2020/#Explain_the_password_generator_tool">this article</a>.',
        'questions'=>[
        [
            'q'=>'What is a password generator tool?',
            'answer'=>'It\'s a tool to generate Strong and random and secure Passwords from numbers and capital & small letters and Symbols to help you secure your accounts from hackers.'
        ],
        [
            'q'=>'Does this tool storge the passwords?',
            'answer'=>'No, It just creates them.'
        ],
        [
            'q'=>'How I can make my password secure and strong?',
            'answer'=>'You can read our article <a href="/blog/best-guide-to-create-a-strong-and-secure-password-in-2020/#Explain_the_password_generator_tool">Best guide To Create A Strong and secure Password  in 2020 - toolzillabox</a>'
        ],
    ]])

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

    @section('script')
        <script>
        
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
        
            // Generate a new password with checked options
            function generate_password() {
                // Get Password Length From Select Tag
                let password_length = $('#pgLength option')[0].value;
                
                // Get Checked Options From "Password Contains" Section
                let capital_characters = $('.toggle-state')[0].checked;
                let small_characters = $('.toggle-state')[1].checked;
                let numbers = $('.toggle-state')[2].checked;
                let symbols= $('.toggle-state')[3].checked;
        
                // The Available Charset
                let charset = '';
                if (capital_characters) {
                    charset += 'ABCDEFGHIJKLMNOQRSTUVWXYZ';
                }
                if (small_characters) {
                    charset += 'abcdefghijklmnopqrstuvwxyz';
                }
                if (numbers) {
                    charset += '0123456789';
                }
                if (symbols) {
                    charset += '!@#$%^&*()=-_=+][}{?/\\\'"';
                }
        
                if (!charset)     {
                    // alert('select one option');
                    $('#password-options').addClass('border-danger');
                    $('#password-option-error').removeClass('hidden');
                    return
                } else {
                    $('#password-options').removeClass('border-danger');
                    $('#password-option-error').addClass('hidden');
                }
        
                if (!password_length)     {
                    // alert('select one option');
                    $('#password_length').addClass('border-danger');
                    return
                } else {
                    $('#password_length').removeClass('border-danger');
                }
                let password = '';
        
                // Generate Random Password
                for (i=0; i <= parseInt(password_length); i++) {
                    let randomIndex = Math.floor(Math.random() * charset.length); 
                    password += charset[randomIndex];
                }
        
                // Change The Value Of Input
                $('#password-input')[0].value = password;
        
                $('#password-copied').addClass('hidden');
                
            }
        
            // Copy the last generated password
            function copy_password() {
                /* Get the text field */
                var copyText = document.getElementById("password-input");
            
                /* Select the text field */
                copyText.select();
                copyText.setSelectionRange(0, 99999); /*For mobile devices*/
            
                /* Copy the text inside the text field */
                document.execCommand("copy");
            
                $('#password-copied').removeClass('hidden');
            }
            
            
            /* When the user clicks on the button,
            toggle between hiding and showing the dropdown content */
            function dropdown_btn(q) {
                $(".dropdown-content").removeClass("show");
                $(q).find("#myDropdown").toggleClass("show");
            }
        </script>
    @endsection
@endsection