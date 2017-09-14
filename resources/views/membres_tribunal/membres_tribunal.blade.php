@extends('page_model')

@section('main_content')

	<!-- Striped Rows -->
	<section class="content" xmlns="http://www.w3.org/1999/html">
		<div class="container-fluid">
			<div class="block-header">
				<h2>FORM EXAMPLES</h2>
			</div>

			<!-- Vertical Layout -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								VERTICAL LAYOUT
							</h2>
							<ul class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="material-icons">more_vert</i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="javascript:void(0);">Action</a></li>
										<li><a href="javascript:void(0);">Another action</a></li>
										<li><a href="javascript:void(0);">Something else here</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="body">
							<form>
								<label for="email_address">Email Address</label>
								<div class="form-group">
									<div class="form-line">
										<input type="text" id="email_address" class="form-control" placeholder="Enter your email address">
									</div>
								</div>
								<label for="password">Password</label>
								<div class="form-group">
									<div class="form-line">
										<input type="password" id="password" class="form-control" placeholder="Enter your password">
									</div>
								</div>

								<input type="checkbox" id="remember_me" class="filled-in">
								<label for="remember_me">Remember Me</label>
								<br>
								<button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
			<!-- #END# Vertical Layout -->
	<!-- #END# Striped Rows -->
@endsection