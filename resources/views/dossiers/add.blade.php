@extends('page_model')

@sectioZzn('css')
    <link href={{asset("css/sweetalert2.min.css")}} rel="stylesheet" />
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap-select/css/bootstrap-select.css")}} rel="stylesheet">
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/waitme/waitMe.css")}} rel="stylesheet">

    <style>
        .delete-member-block{
            position: absolute;
            right: 5px;
            z-index: 2;
        }
    </style>
@stop
@section('main_content')
    <section class="content">
        <div class="container" style="width: 90%;">
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> Enregistrement d'un dossier correctionnel</h2>

                        </div>
                        <div class="body">
                            {{ Form::open(['url'=>'NewDossiers', 'method'=>'POST']) }}

                                  <div class="form-group form-float">
                                        <div class="form-line">
                                            {{ Form::number('numero_ordre', null, ['id'=>'numero_ordre', 'class'=>'form-control', 'placeholder' => "Numero d'ordre", 'required']) }}
                                        </div>
                                    </div>

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                {!! Form::label('date_premiere_audience', 'Date Premiere Audience')!!}
                                                {{ Form::date('date_premiere_audience', null, ['id'=>'date_premiere_audience', 'class'=>'datepicker form-control', 'placeholder' => "Date Premiere Audience", 'required']) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{ Form::text('partie_civile', null, ['id'=>'partie_civile', 'class'=>'form-control', 'placeholder' => 'Partie Civile', 'required']) }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{ Form::text('prevenu', null, ['id'=>'prevenu', 'class'=>'form-control', 'placeholder' => "Prevenu", 'required']) }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{ Form::text('situation_penale', null, ['id'=>'situation_penale', 'class'=>'form-control', 'placeholder' => "Situation Penale", 'required']) }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{ Form::text('jugment_ADD', null, ['id'=>'jugment_ADD', 'class'=>'form-control', 'placeholder' => "jugment_ADD", 'required']) }}
                                </div>
                            </div>



                            <div class="form-group form-float">
                                        <div class="form-line">
                                            {{ Form::text('jugement_au_fond', null, ['id'=>'jugement_au_fond', 'class'=>'form-control', 'placeholder' => "Jugement au Fond", 'required']) }}
                                        </div>
                                    </div>

                            <div id="member-block" class="header">
                                <h2> Choisir les membres</h2>
                                <br>

                                <button id="insert-member" class="btn btn-success">Ajouter</button>

                                <div id="base-member" class="row">
                                        <div class="form-group">
                                            {{ Form::select('membre_id[]', $membres, null, ['id'=>'membre_id1', 'class'=>'form-control', 'placeholder' =>'-- Choisir --']) }}
                                        </div>
                                    </div>
                                </div>


                                <input type="submit" onsubmit="swal('hello');" value="Save" class="btn btn-primary m-t-15 waves-effect">

                            {{ Form::close() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop

@section('js')
<script>
    var counter=1
$("#insert-member").click(function(e){
    e.preventDefault()

    var clone = $("#base-member").clone();

    counter += 1;
    clone.appendTo('#member-block');
    clone.attr('id', 'member_id' + counter);
    clone.find('.form-group').append(clone.find('select'))
    clone.find('.bootstrap-select').remove();
    clone.find('select')
            .addClass('form-control')
            .selectpicker();

    var closeBtn = $('<button type="button" class="close delete-member-block" data-dismiss="modal">&times;</button>');
    closeBtn.click(function () {
        clone.remove();
    });
    clone.find('select')
            .after(closeBtn);
})
</script>
@stop
