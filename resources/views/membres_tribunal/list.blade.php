@extends('page_model')

@section('main_content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>NORMAL TABLES</h2>
                <br />
                <div class="table-responsive">
                    <div align="right">
                        <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning" >Ajouter un nouveau membre</button>
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
                                    <th>Nom du Membre</th>
                                    <th>Numero de Telephone</th>
                                    <th>grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($membres as $membre)
                                    <tr id="membres{{$membre->id}}">
                                        <td>{{ $membre->nom }}</td>
                                        <td>{{ $membre->telephone }}</td>
                                        <td>{{ $membre->grade }}</td>
                                        <td>
                                            <button class="btn btn-xs btn-info" data-id="{{ $membre->id }}">Edit</button>
                                            <button class="btn btn-xs btn-danger" data-id="{{ $membre->id }}">Supprimer</button>
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
    <div id="dataModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Informations du membre</h4>
                </div>
                <div class="modal-body" id="infos_membre">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="add_data_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ajout du membre</h4>
                </div>
                <div class="modal-body">
                    <form id="insert_form" name="insert_form" method="POST" action="{{ route('membretribunal.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group form-float">
                            <div class="form-line{{ $errors->has('id') ? ' has-error' : '' }}">
                                <input type="hidden" id="id" name="id" class="form-control">
                                <label class="form-label">Nom du Membre</label>
                                @if ($errors->has('id'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('id') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

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
                            <div class="form-line{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                <input type="text" id="telephone" name="telephone" class="form-control">
                                <label class="form-label">Telephone du Membre</label>
                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line{{ $errors->has('grade') ? ' has-error' : '' }}">
                                <input type="text" id="grade" name="grade"class="form-control">
                                <label class="form-label">Grade du Membre</label>
                                @if ($errors->has('grade'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('grade') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <br>
                        <button name="insert" id="inserto" type="submit" class="btn btn-success" >OK</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
            $('#insert_form').on('submit', function (e) {
                e.preventDefault();
                var url = $(this).attr('action');
                var post = $(this).attr('method');
                var data = $(this).serialize();

                if($('#nom').val()=='')
                {
                    alert("Name is requred");
                }
                else if($('#telephone').val()=='')
                {
                    alert("le numero de telephone est requis");
                }
                else if($('#grade').val()=='')
                {
                    alert("le grade est requis");
                }
                else
                {

                    $.ajax({
                        type: post,
                        url: url,
                        data: data,
                        success:function (data) {
                            console.log(data)
                            /*$('#insert_form')[0].reset();
                            $('#add_data_Modal').modal('hide');
                            $('#membre_table').html(data);*/

                            var row = '<tr>'+
                                    '<td>'+ data.nom +'<td>'+
                                    '<td>'+  data.telephone +'<td>'+
                                    '<td>'+ data.grade +'<td>'+
                                    '<td>  ' +
                                    '<button class="btn btn-xs btn-info" data-id="'+ data.id +'" > Edit </button>'+
                                    '<button class="btn btn-xs btn-danger" data-id="'+data.id+'">Delete</button>'+ '</td>'+
                                    '</tr>';
                             $('tbody').append(row);


                        }

                    });



     //---------reset_formulaire--------------------
                    $(this).trigger('reset');
                }
            });

    //--------edit_modal-------------------------------
        $('tbody').delegate('.btn-info','click',function () {

            var value = $(this).data('id');
            var url = '{{ URL::to('membretribunal/show') }}';

            // alert(value);

            $.ajax({
                type : 'get',
                url : url,
                data : {'id':value},

                success:function (data) {
                    $('#id').val(data.id);
                    $('#nom').val(data.nom);
                    $('#telephone').val(data.telephone);
                    $('#grade').val(data.grade);
                    $('#insert').val('modifier');
                    $('#add_data_Modal').modal('show');

                }

            });

        });
    </script>
    @stop