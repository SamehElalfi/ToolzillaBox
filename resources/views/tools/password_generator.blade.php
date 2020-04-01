@extends('layouts.app')

@section('title', 'Password Generator')

@section('description', 'Strong and random and secure Password generator tool creates passwords from Words and numbers and capital letters and small letters and Symbols to help you secure your device from hackers.')
@section('content')

    @include('layouts.header')

    <section class="section">
        <div class="container ">
            <div class="m-w-xl">		
                <div class="section__content">
                    <div class="block block--boxed block--contact" id="contact">
                        <div class="block__body row">
                            <h2 class="block__title h3">Password Generator</h2>
                            <div class="box__alert alert alert--info alert--faded alert--xlg">
                                <div class="alert__body h5">
                                    Donate for Toolzillabox on Patrion. This will make us happy. Thank You! ❤️
                                </div>
                                <div class="alert__actions">
                                    <a href="/donate" class="btn btn--primary">
                                        <span class="btn__text">Donate</span>
                                        <span class="btn-hover-effect" style="left: 100.719px; top: 41px;"></span>
                                        <span class="btn-hover-effect" style="left: 97.7188px; top: 20px;"></span>
                                        <span class="btn-hover-effect"></span><span class="btn-hover-effect"></span>
                                        <span class="btn-hover-effect" style="left: 59.7188px; top: 47px;"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row row--sm">
                                    <div class="col-sm-12 form-group">
                                        <label class="form-label">Your Password</label>
                                        <input type="text" placeholder="a0RH@4zlTXY05r$A1jjw"  id="password-input" class="form-control form-control--lg" style="padding: 0 125px 0 16px;" spellcheck="false" autocomplete="off">
                                        <div class="btn black-hover" onclick="copy_password()" style="position: absolute;top: 38px;right: 10px;color: #a1a5b2;background: transparent;">
                                            <span class="btn__text fa fa-copy"></span>
                                            <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect" style="left: 0.5px; top: 40px;"></span>
                                        </div>
                                        <div class="btn black-hover" onclick="generate_password()" style="position: absolute;top: 38px;right: 70px;color: #a1a5b2;background: transparent;">
                                            <span class="btn__text fa fa-refresh"></span>
                                            <span class="btn-hover-effect"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 " style="margin: 10px 0;">
                                        <div class="col-sm-12 col-md-6 row pull-left" id="password-length" style="border: 1px solid transparent;"> 
                                            <label class="form-label">Password Length</label>
                                            <div class="col-12">
                                                <select id="pgLength" title="Select the length of your password." onclick="S7P( false );" value="16">
                                                    <optgroup label="Weak">				
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                    </optgroup>
                                                    <optgroup label="Strong">   	  			   
                                                        <option value="16" selected="selected">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>		
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option>
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="59">59</option>
                                                        <option value="60">60</option>
                                                        <option value="61">61</option>
                                                        <option value="62">62</option>
                                                        <option value="63">63</option>
                                                        <option value="64">64</option>
                                                        <option value="65">65</option>
                                                        <option value="66">66</option>
                                                        <option value="67">67</option>
                                                        <option value="68">68</option>
                                                        <option value="69">69</option>
                                                        <option value="70">70</option>
                                                        <option value="71">71</option>
                                                        <option value="72">72</option>
                                                        <option value="73">73</option>
                                                        <option value="74">74</option>
                                                        <option value="75">75</option>
                                                        <option value="76">76</option>
                                                        <option value="77">77</option>
                                                        <option value="78">78</option>
                                                        <option value="79">79</option>
                                                        <option value="80">80</option>
                                                        <option value="81">81</option>
                                                        <option value="82">82</option>
                                                        <option value="83">83</option>
                                                        <option value="84">84</option>
                                                        <option value="85">85</option>
                                                        <option value="86">86</option>
                                                        <option value="87">87</option>
                                                        <option value="88">88</option>
                                                        <option value="89">89</option>
                                                        <option value="90">90</option>
                                                        <option value="91">91</option>
                                                        <option value="92">92</option>
                                                        <option value="93">93</option>
                                                        <option value="94">94</option>
                                                        <option value="95">95</option>
                                                        <option value="96">96</option>
                                                        <option value="97">97</option>
                                                        <option value="98">98</option>
                                                        <option value="99">99</option>
                                                        <option value="100">100</option>
                                                        <option value="101">101</option>
                                                        <option value="102">102</option>
                                                        <option value="103">103</option>
                                                        <option value="104">104</option>
                                                        <option value="105">105</option>
                                                        <option value="106">106</option>
                                                        <option value="107">107</option>
                                                        <option value="108">108</option>
                                                        <option value="109">109</option>
                                                        <option value="110">110</option>
                                                        <option value="111">111</option>
                                                        <option value="112">112</option>
                                                        <option value="113">113</option>
                                                        <option value="114">114</option>
                                                        <option value="115">115</option>
                                                        <option value="116">116</option>
                                                        <option value="117">117</option>
                                                        <option value="118">118</option>
                                                        <option value="119">119</option>
                                                        <option value="120">120</option>
                                                        <option value="121">121</option>
                                                        <option value="122">122</option>
                                                        <option value="123">123</option>
                                                        <option value="124">124</option>
                                                        <option value="125">125</option>
                                                        <option value="126">126</option>
                                                        <option value="127">127</option>
                                                        <option value="128">128</option>      		        
                                                    </optgroup>
                                                    <optgroup label="Unbelievable">
                                                        <option value="256">256</option>	 	  			   	  			   
                                                            <option value="512">512</option>		   	   		   	   
                                                            <option value="1024">1024</option>	   	   
                                                            <option value="2048">2048</option>		   
                                                    </optgroup>			
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 pull-left justify-content-center" id="password-options" style="border: 1px solid transparent;">
                                            <label class="form-label">Options</label>
                                            <div class="row">

                                                <label class="col-12 label" style="background: transparent">
                                                    <div class="toggle">
                                                        <input class="toggle-state" type="checkbox" name="check" value="check">
                                                        <div class="toggle-inner">
                                                            <div class="indicator"></div>
                                                        </div>
                                                        <div class="active-bg"></div>
                                                    </div>
                                                    <div class="label-text">Capital Charachers (e.g. ABCDEF)</div>
                                                </label>

                                                <label class="col-12 label" style="background: transparent">
                                                    <div class="toggle">
                                                        <input class="toggle-state" type="checkbox" name="check" value="check" checked="true">
                                                        <div class="toggle-inner">
                                                            <div class="indicator"></div>
                                                        </div>
                                                        <div class="active-bg"></div>
                                                    </div>
                                                    <div class="label-text">Small Charachers (e.g. abcdef)</div>
                                                </label>

                                                <label class="col-12 label" style="background: transparent">
                                                    <div class="toggle">
                                                        <input class="toggle-state" type="checkbox" name="check" value="check" checked="true">
                                                        <div class="toggle-inner">
                                                            <div class="indicator"></div>
                                                        </div>
                                                        <div class="active-bg"></div>
                                                    </div>
                                                    <div class="label-text">Numbers (e.g. 0123456)</div>
                                                </label>

                                                <label class="col-12 label" style="background: transparent">
                                                    <div class="toggle">
                                                        <input class="toggle-state" type="checkbox" name="check" value="check">
                                                        <div class="toggle-inner">
                                                            <div class="indicator"></div>
                                                        </div>
                                                        <div class="active-bg"></div>
                                                    </div>
                                                    <div class="label-text">symbols (e.g. !@#$%^)</div>
                                                </label>

                                                <span id="password-option-error" class="col-12 label text-danger hidden" style="background: transparent">
                                                    You must choose at least one option
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="btn btn--lg btn--primary" style="margin: 0 10px;" onclick="generate_password()">
                                            <span class="btn__text">
                                                <i class="fa fa-refresh"></i>
                                                <span style="margin: 0 0 0 11px;">Generate</span>
                                            </span>
                                            <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect"></span>
                                        </div>

                                        <div class="btn btn--lg" style="margin: 0 10px;" onclick="copy_password()">
                                            <span class="btn__text">
                                                <i class="fa fa-copy"></i>
                                                <span style="margin: 0 0 0 11px;">Copy Password</span>
                                            </span>
                                            <span class="btn-hover-effect"></span>
                                            <span class="btn-hover-effect"></span>
                                        </div>

                                        <span class="btn btn__text text-success hidden" onclick="$(this).addClass('hidden')" id="password-copied">
                                            <i class="fa fa-check"></i>
                                            <span>Password Copied</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.about_tool', ['about_title'=>'About Password Generator?', 'about_text'=>'The password generator is a tool to generate Strong random and secure Passwords from numbers and capital & small letters and Symbols to help you secure your accounts from hackers. To know more about passwords and how to protect yourself from hackers read our guide "Best guide To Create A Strong and secure Password in 2020"'])

    @include('layouts.usage', ['questions'=>[
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
            'answer'=>'You can read our article <a href="#">Best guide To Create A Strong and secure Password  in 2020 - toolzillabox</a>'
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
</script>
    @include('layouts.mail')

    @include('layouts.blog')
@endsection