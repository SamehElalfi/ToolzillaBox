<footer class="site-footer footer">
	<div class="container">
		<div class="footer__site-map">
			<div class="row">
				<div class="footer__column col-md-3">
					<h3 class="footer__title h6" data-toggle="footer-column">
						Categories
					</h3>
					<ul class="footer__nav nav">
						<li class="nav__item">
							<a class="nav__link" href="/tools#developmentTools">Development Tools</a>
						</li>
						<li class="nav__item">
							<a class="nav__link" href="/tools#securityTools">Security Tools</a>
						</li>
						<li class="nav__item">
							<a class="nav__link" href="/tools/">All Tools</a>
						</li>
					</ul>
				</div>
				<div class="footer__column col-md-3">
					<h3 class="footer__title h6" data-toggle="footer-column">Most Using</h3>
					<ul class="footer__nav nav">
						<li class="nav__item">
							<a class="nav__link" href="/tools/jsonformatter/">JSON Formatter</a>
						</li>
						<li class="nav__item">
							<a class="nav__link" href="/tools/passwordgenerator/">Password Generator</a>
						</li>
					</ul>
				</div>
				<div class="footer__column col-md-6 is-open">
					<h3 class="footer__title h6" data-toggle="footer-column">
						Subscribe to our newsletter
					</h3>
					<div class="footer__nav nav">
						<form method="post" action="https://toolzillabox.us19.list-manage.com/subscribe/post?u=12e818dab18ae1457e23013d2&amp;id=e132ec675b" class="rail validate" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
							@csrf
							<input name="previous_url" type="hidden" value="{{ url()->previous() }}">

							<div class="input-group input-group--xlg" style="border-radius: 50px;width: 500px;">
								<input name="EMAIL" type="email" required="" id="mce-EMAIL" class="email form-control form-control--xlg" placeholder="Email Address" style="border-radius: 50px;">
							</div>
							<div class="rail__toolbar" style="position:absolute; right:10px; border-radius:50px;">
								<input name="subscribe" id="mc-embedded-subscribe" class="button btn btn--primary btn--lg" type="submit" value="Subscribe" style="border-radius: 50px;right: 0;">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container">
			<div class="footer__brand brand brand--footer">
				<a href="/" class="brand__logo" data-logo="">
					<img src="/dist/img/brand.png">
				</a>
				<div class="brand__content">
					<div class="brand__title">
						© ToolzillaBox 2020
					</div>
					<p class="brand__desc">all rights reserved for ToolzillaBox</p>
				</div>
			</div>
			<div class="footer__bottom-nav nav nav--h">
				<li class="nav__item">
					<a class="nav__link" href="/legal/privacy/">Privacy Policy</a>
				</li>
				<li class="nav__item">
					<a class="nav__link" href="/legal/cookie_policy/">Cookie Policy</a>
				</li>
				<li class="nav__item">
					<a class="nav__link" href="/faq/">FAQ</a>
				</li>
				<li class="nav__item">
					<a class="nav__link" href="https://www.facebook.com/toolzillabox">
						<i class="fa fa-facebook is-hidden-sm-down"></i>
						<span class="is-hidden-md-up">Facebook</span>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__link" href="https://www.twitter.com/toolzillabox">
						<i class="fa fa-twitter is-hidden-sm-down"></i>
						<span class="is-hidden-md-up">Twitter</span>
					</a>
				</li>
			</div>
		</div>
	</div>
</footer>