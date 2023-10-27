@extends("layout.add")
@section("title","Porto - Bootstrap eCommerce Template")
@section("main")

		<main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('user')}}">Home</a></li>
								<li class="breadcrumb-item"><a href="{{url('cat')}}">Shop</a></li>
								<li class="breadcrumb-item active" aria-current="page">
									My Account
								</li>
							</ol>
						</div>
					</nav>

					<h1>My Account</h1>
				</div>
			</div>

			<div class="container reset-password-container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						@if (session("errormsg")!="")
                            <div class="alert alert-danger" role="alert">
                                    <strong>{{session("errormsg") }}</strong>
                            </div>
                            @endif
						<div class="feature-box border-top-primary">
							<div class="feature-box-content">
								<form class="mb-0" action="{{url('/reset')}}" method="POST">
									@csrf
									<p>
										Lost your password? Please enter your
										username or email address. You will receive
										a link to create a new password via email.
									</p>
									<div class="form-group mb-0">
										<label for="reset-email" class="font-weight-normal">email</label>
										<input type="email" class="form-control" id="reset-email" name="email" required />
										@error('email')
                            <div class="alert alert-danger" role="alert">
                                    <strong>{{$message}}</strong>
									</div>
									@enderror

									<div class="form-footer mb-0">
										<a href="{{url('login')}}">Click here to login</a>

										<button type="submit"
											class="btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none mr-0">
											Reset Password
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- End .main -->
@endsection