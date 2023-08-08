@include('templates.partial.header')
<body>
	<!-- sign in -->
	<div class="sign section--bg" data-bg="{{ asset('admin') }}/img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="{{ route('auth.store') }}" method="POST" class="sign__form">
                            @csrf
							<a href="index.html" class="sign__logo">
								<img src="{{ asset('admin') }}/img/logo.svg" alt="">
							</a>

							<div class="sign__group">
								<input type="text" name="name" class="sign__input" placeholder="Name" required value="{{ old('name') }}">
                                @error('name')
								    <div class="invalid-feedback" style="font-size: 10px; font-style: italic; color: #eb5757; margin-left: 1rem">{{ $message }}</div>
							    @enderror
							</div>

							<div class="sign__group">
								<input type="text" name="email" class="sign__input" placeholder="Email" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback" style="font-size: 10px; font-style: italic; color: #eb5757; margin-left: 1rem">{{ $message }}</div>
                                @enderror
							</div>

							<div class="sign__group">
								<input type="password" name="password" class="sign__input" placeholder="Password" required>
								@error('password')
								<div class="invalid-feedback" style="font-size: 10px; font-style: italic; color: #eb5757; margin-left: 1rem">The password must be at least 5 characters!</div>
							@enderror
							</div>

							<button class="sign__btn" type="submit">Sign up</button>

							<span class="sign__text">Already have an account? <a href="{{ route('auth.signin') }}">Sign in!</a></span>
						</form>
						<!-- registration form -->
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
