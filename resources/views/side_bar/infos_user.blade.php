<div class="user-info">

    <div class="image">
        <img src="{{asset('bower_components/adminbsb-materialdesign/images/user.png')}}" width="48" height="48" alt="User" />
    </div>

    <div class="info-container">
        <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
        <h2>{{ $user->name }}'s Profile</h2>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                <li role="seperator" class="divider"></li>
                <li><a href="javascript:void(0);"><i class="material-icons">input</i>Deconnexion</a></li>
            </ul>
        </div>
    </div>




</div>