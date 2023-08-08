@include('templates.partial.header')
<body>
	<!-- sign in -->
	<div class="sign section--bg" data-bg="{{ asset('admin') }}/img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="{{ route('auth.signin') }}" method="POST" class="sign__form">
                            @csrf
							<a href="index.html" class="sign__logo">
								<img src="{{ asset('admin') }}/img/logo.svg" alt="">
							</a>

                            @if (\Session::has('signup_success'))
                                <div class="sign__group">
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        {{ \Session::get('signup_success') }}.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                </div>
                            @endif

                            @if (\Session::has('loginError'))
                                <div class="sign__group">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ \Session::get('loginError') }}.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                </div>
                            @endif

							<div class="sign__group">
								<input type="text" class="sign__input @error('email') is-invalid @enderror" name="email" placeholder="Email" required value="{{ old('email') }}">
                                @error('email')
								    <div class="invalid-feedback" style="font-size: 10px; font-style: italic; color: #eb5757; margin-left: 1rem">{{ $message }}</div>
							    @enderror
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" name="password" placeholder="Password" required>
							</div>

							<button class="sign__btn" type="submit">Sign in</button>

							<span class="sign__text">Don't have an account? <a href="{{ route('auth.signup') }}">Sign up!</a></span>

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
