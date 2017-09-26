@extends('page_model')

@section('css')
	<style>
		html{
			overflow-y : scroll;
		}
	</style>
	{!! Html::style('bower_components/adminbsb-materialdesign/plugins/bootstrap-select/css/bootstrap-select.css') !!}
@stop

@section('main_content')
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>NORMAL TABLES</h2>
				<br />
				<div class="table-responsive">
					<div align="right">
						<button type="button" name="add" id="add" class="btn btn-warning" >Effectuer un Renvoi de Dossier </button>
					</div>
				</div>
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
						<div id="membre_table" class="body table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>Motif du Renvoi</th>
									<th>Date de Renvoi</th>
									<th>Dossier à Renvoyer</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								@foreach($renvois as $renvoi)
									<tr id="membres{{$renvoi->id}}">
										<td>{{ $renvoi->motif_renvoi }}</td>
										<td>{{ $renvoi->date_renvoi }}</td>
										<td>{{ $renvoi->dossier_id }}</td>
										<td>
											<button class="btn btn-xs btn-info" name="edit" id="edit" data-target="#add_data_Modal" data-id="{{ $renvoi->id }}">Edit</button>
											<button class="btn btn-xs btn-danger" data-id="{{ $renvoi->id }}">Supprimer</button>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- #END# Striped Rows -->
@stop

@section('modal_content')
	<div id="add_data_Modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Informations sur le Renvoi de Dossier Correctionnel</h4>
				</div>
				<div class="modal-body">
					<form id="insert_form" method="POST" action="NewRenvoi" >
						{{ csrf_field() }}

						<input type="hidden" id="memberid" name="id">

						<div class="form-group form-float">
							<div class="form-line{{ $errors->has('motif_renvoi') ? ' has-error' : '' }}">
								<input type="text" id="motif_renvoi" name="motif_renvoi" class="form-control" placeholder="motif renvoi">
								@if ($errors->has('motif_renvoi'))
									<span class="help-block">
                                                <strong>{{ $errors->first('motif_renvoi') }}</strong>
                                            </span>
								@endif
							</div>
						</div>

						<div class="form-group form-float">
							<div class="form-line{{ $errors->has('motif_renvoi') ? ' has-error' : '' }}">
								<input type="date" id="date_renvoi" name="date_renvoi" class="form-control" placeholder="date renvoi">
								@if ($errors->has('date_renvoi'))
									<span class="help-block">
                                                <strong>{{ $errors->first('date_renvoi') }}</strong>
                                    </span>
								@endif
							</div>
						</div>

						<div class="form-group form-float">
							{!! Form::select('dossier_id',$dossiers,null,['id'=>'dossier_id','class' => 'form-control']) !!}
						</div>




						<input type="submit" id="save" value="Save" class="btn btn-primary">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</form>
				</div>

			</div>
		</div>
	</div>


	<script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });

        $('#add').on('click',function () {
            $('#save').val('save');
            $('#insert_form').trigger('reset');
            $('#add_data_Modal').modal('show');

        });


        $('#insert_form').on('submit', function (e) {
            e.preventDefault();
            var url = $('#insert_form').attr('action');
            var data = $('#insert_form').serialize();
            var type = 'POST';
            var statut = $('#save').val();

            if( statut == 'modifier')
            {
                type = 'PUT';
                //data += '&id='+$(this).data('id');
            }
            if($('#motif_renvoi').val()=='')
            {
                alert("Motif is required");
            }
            else if($('#date_renvoi').val()=='')
            {
                alert("la date de renvoi est requise");
            }
            else if($('#dossier_id').val()=='')
            {
                alert("le dossier à renvoyer est requis");
            }
            else
            {

                $.ajax({
                    type: type,
                    url: url,
                    data: data,
                    success:function (data) {
                        console.log(data)
                        /*$('#insert_form')[0].reset();
                         $('#add_data_Modal').modal('hide');
                         $('#membre_table').html(data);*/

                        var row = '<tr id="membres'+ data.id+'" >' +
                            '<td>' + data.motif_renvoi + '</td>' +
                            '<td>' + data.date_renvoi + '</td>' +
                            '<td>' + data.dossier_id + '</td>' +
                            '<td>  ' +
                            '<button class="btn btn-xs btn-info" data-id="' + data.id + '" > Edit </button> ' +
                            '<button class="btn btn-xs btn-danger" data-id="' + data.id + '">Supprimer</button>'+
                            '</td>' +
                            '</tr>';
                        if (statut == 'save') {
                            $('tbody').append(row);
                        }
                        else
                        {
                            $('#membres'+ data.id).replaceWith(row);
                            $('#add_data_Modal').modal('hide');
                        }


                    }

                });



                //---------reset_formulaire--------------------
                $(this).trigger('reset');
            }
        });

        //--------update-------------------------------
        $('tbody').delegate('.btn-info','click',function () {

            var value = $(this).data('id');
            var url = '{{ URL::to('listRenvois') }}';

            // alert(value);

            $.ajax({
                type : 'get',
                url : url,
                data : {'id':value},

                success:function (data) {
                    $('#motif_renvoi').val(data.motif_renvoi);
                    $('#date_renvoi').val(data.date_renvoi);
                    $('#dossier_id').val(data.dossier_id);
                    $('#memberid').val(data.id);
                    $('#save').val('modifier');
                    $('#add_data_Modal').modal('show');

                }

            });

        });

        //------------------supprimer--------------------
        $('tbody').delegate('.btn-danger','click',function () {

            var value= $(this).data('id');
            var url = '{{ URL::to('deleteRenvoi') }}';
            if(confirm("etez vous sure de vouloir Supprimer")==true){

                $.ajax({type : 'post',  url : url, data : {'id':value}, success:function () {
                    $('#membres'+value).remove();

                }
                });
            }

        });


	</script>
@stop
@section('js')
	{!! Html::script('bower_components/adminbsb-materialdesign/plugins/bootstrap-select/js/bootstrap-select.js') !!}
	@stop