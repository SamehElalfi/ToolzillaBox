<section class="section section--register">
	<div class="container ">
		<h2 class="section__title ">Get best offers and latest news</h2>
		<div class="section__actions text-center">
			<form method="post" action="/mail" class="rail">

				@csrf
				
				<input name="previous_url" type="hidden" value="{{ url()->previous() }}">

				<div class="input-group input-group--xlg" style="max-width: 570px;width: 570px;">
					<input name="email" type="email" required="" class="form-control form-control--xlg" placeholder="Email Address">
				</div>
				
				<div class="rail__toolbar">
					<input class="btn btn--primary btn--lg" type="submit" value="Subscribe">
				</div>
				
			</form>
		</div>
	</div>
</section>