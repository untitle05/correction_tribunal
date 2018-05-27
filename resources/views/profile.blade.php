@extends('page_model')

@section('main_content')
    <br> <br> <br> <br> <br>
    <div class="container">
        <div class="row"><br> <br>
            <div class="col-md-10 col-md-offset-2">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>Profile de Nom :{{ $user->name }} </h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Modifier Votre Photo de Profile</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection