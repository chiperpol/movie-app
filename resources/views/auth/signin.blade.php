@include('templates.partial.header')
<body>
	<!-- sign in -->
	<div class="sign section--bg" data-bg="{{ asset('admin') }}/img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="#" class="sign__form">
							<a href="index.html" class="sign__logo">
								<img src="{{ asset('admin') }}/img/logo.svg" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password">
							</div>

							<button class="sign__btn" type="button">Sign in</button>

							<span class="sign__text">Don't have an account? <a href="signup.html">Sign up!</a></span>

							<span class="sign__text"><a href="forgot.html">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end sign in -->

	<!-- JS -->
	@include('templates.partial.script')
</body>
</html>
