<section class="section section--register">
	<div class="container ">
		<h2 class="section__title ">Get best offers and latest news</h2>
		<div class="section__actions text-center">
			<form method="post" action="/mail" class="rail row col-lg-8 col-sm-12 justify-content-center">

				@csrf
				
				<input name="previous_url" type="hidden" value="{{ url()->previous() }}">

				<input name="email" type="email" required="" class="form-control form-control--xlg" placeholder="Email Address" style="border-radius: 50px;">
				
				<input class="btn btn--primary btn--lg" type="submit" value="Subscribe" style="border-radius: 50px;right: 0;position: absolute;">
				
			</form>
		</div>
	</div>
</section>