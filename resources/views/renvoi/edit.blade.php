<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="header">
                <h4> Modification du renvoi du dossier: {{ $dossier->partie_civile }}</h4>

            </div>
            <div class="body">
                {{ Form::open(['url'=>'NewRenvoi ', 'method'=>'POST', 'id'=>'form_modif_renvoi']) }}

                <div class="form-group form-float">
                    <div class="form-line">
                        {{ Form::text('motif_renvoi', $renvoi->motif_renvoi, ['id'=>'motif_renvoi', 'class'=>'form-control', 'placeholder' => "Motif du renvoi", 'required']) }}
                    </div>
                </div>

                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    {!! Form::label('date_renvoi', 'Date du renvoi')!!}
                                    {{ Form::date('date_renvoi', $renvoi->date_renvoi, ['id'=>'date_renvoi', 'class'=>'form-control', 'placeholder' => "Date du renvoi", 'required']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="renvoi_id" value="{{ $renvoi->id }}">
                <div id="member-block" class="header">
                    <h2> Choisir les membres</h2>
                    <br>

                    <button id="insert-member" class="btn btn-success">Ajouter</button>

                    @foreach($renvoi->membres_tribunal as $membres_tribunal)
                        <div class="row">
                            <div class="form-group">
                                {{ Form::select('membre_id[]', $membres, $membres_tribunal->id, ['class'=>'form-control', 'placeholder' =>'-- Choisir --']) }}
                                <button type="button" class="close-select delete-member-block">&times;</button>
                            </div>
                        </div>
                    @endforeach

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

<script>
    console.log('Load script')
    var counter=1
    $("#insert-member").click(function(e){
        e.preventDefault()

        var clone = $("#base-member").clone();

        counter += 1;
        clone.appendTo('#member-block');
        clone.attr('id', 'member_id' + counter);
        clone.find('.form-group').append(clone.find('select'));
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

    $('.close-select').click(function () {
        $(this).parent().parent().remove()
    })

    $("#form_modif_renvoi").submit(function(e) {

        var url = "/updateRenvoi"; // the script where you handle the form input.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#form_modif_renvoi").serialize(), // serializes the form's elements.
            success: function(data)
            {
                hydradeRenvoiModal();
                $('#modifier_renvoi_Modal').modal('hide');
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
</script>
