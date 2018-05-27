
@extends('page_model')

@section('main_content')
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bienvenue <i class="style : color-name">{{ Auth::user()->name }}</i> dans votre espace de travail</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Operation effectuée avec succes!

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
