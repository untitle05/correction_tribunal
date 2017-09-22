@extends('page_model')

@section('main_content')
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2>
									ENREGISTREMENT D'UN MEMBRE DU TRIBUNAL
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
								<form id="formulaire_membre" method="POST" action="{{ route('membretribunal.store') }}">
									{{ csrf_field() }}
									<div class="form-group form-float">
										<div class="form-line{{ $errors->has('nom') ? ' has-error' : '' }}">
											<input type="text" id="nom" name="nom" class="form-control">
											<label class="form-label">Nom du Membre</label>
											@if ($errors->has('nom'))
												<span class="help-block">
                                                <strong>{{ $errors->first('nom') }}</strong>
                                            </span>
											@endif
										</div>
									</div>

									<div class="form-group form-float">
										<div class="form-line{{ $errors->has('tel') ? ' has-error' : '' }}">
											<input type="tel" id="tel" class="form-control">
											<label class="form-label">Telephone du Membre</label>
											@if ($errors->has('tel'))
												<span class="help-block">
                                                <strong>{{ $errors->first('tel') }}</strong>
                                            </span>
											@endif
										</div>
									</div>

									<div class="form-group form-float">
										<div class="form-line{{ $errors->has('grade') ? ' has-error' : '' }}">
											<input type="text" id="grade" class="form-control">
											<label class="form-label">Grade du Membre</label>
											@if ($errors->has('grade'))
												<span class="help-block">
                                                <strong>{{ $errors->first('grade') }}</strong>
                                            </span>
											@endif
										</div>
									</div>

									<br>
									<button class="btn btn-primary m-t-15 waves-effect"  type="submit">OK</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Vertical Layout | With Floating Label -->
			</div>

			<div class="block-header">
				<h2>NORMAL TABLES</h2>
			</div>
			<!-- Striped Rows -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								STRIPED ROWS
								<small>Use <code>.table-striped</code> to add zebra-striping to any table row within the
									<code>&lt;tbody&gt;</code></small>
							</h2>
							<ul class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
									   role="button" aria-haspopup="true" aria-expanded="false">
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
						<div class="body table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Nom du Membre</th>
									<th>Numero de Telephone</th>
									<th>grade</th>
								</tr>
								</thead>
								<tbody id="data">
									<tr>
										<td>1</td>
										<td>nom</td>
										<td>tel</td>
										<td>grade</td>
										<td>
											<button class="btn btn-xs btn-danger">Delete</button>
											<button class="btn btn-xs btn-info">Edit</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('script')
	<script type="text/javascript ">

	</script>
	@stop