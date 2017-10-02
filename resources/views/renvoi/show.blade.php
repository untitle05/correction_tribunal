<div class="dossier" data-partiecivil="{{ $dossier->partie_civile }}">{{ $dossier->numero_ordre }}, {{ $dossier->partie_civile }}</div>
<br><hr>
@foreach($renvois as $renvoi)
    <h4>Renvoi du {{ date('d M Y', strtotime($dossier->date_renvoi)) }} </h4>
    Motif : {{ $renvoi->motif_renvoi }}
    <div class="row">
        <div class="col-sm-8">
            <h5>Membres du jury : </h5>
            <ul>
            @foreach($renvoi->membres_tribunal as $membres_tribunal)
                <li>{{ $membres_tribunal->nom }}</li>
             @endforeach
            </ul>
        </div>
        <div class="col-sm-4">
            <a class="btn btn-primary modifier-renvoi" data-id={{$renvoi->id}} >Modifier</a>
            <a class="btn btn-danger supprimer-renvoi" data-id={{$renvoi->id}} >Supprimer</a>
        </div>
    </div>
    <hr>
@endforeach