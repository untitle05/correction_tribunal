<div class="menu">
    <ul class="list">
        <li class="header">TABLEAU DE BORD</li>
        <li class="active">
            <a href='{!! url('#')!!}'>

                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>

        <li>
            <a href="{{ url('members') }}"  class="mce-menu-item">
                <span>MEMBRE TRIBUNAL</span>
            </a>

        </li>

        <li>
            <a href="{{ url('dossiers') }}" class="mce-menu-item">
                <span>DOSSIERS CORRECTIONNELS</span>
            </a>

        </li>

        @if (Auth::user()->admin == 1)
        <li>
            <a href="{{ url('Renvois') }}" class="mce-menu-item">
                <span>RENVOI DOSSIERS</span>
            </a>
        </li>

        <li>
            <a href="/register">
                <i class="material-icons"></i>
                <span>GESTION DES UTILISATEURS</span>
            </a>
        </li>
        @endif

        <li class="header">by ....</li>
    </ul>
</div>