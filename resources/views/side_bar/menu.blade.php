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
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons"></i>
                <span>SECTION TRIBUNAL</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>JURY</span>
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>COMPOSITION MEMBRE JURY</span>
                    </a>

                </li>
                <li>
                    <a href="{{ url('membretribunal') }}"  class="mce-menu-item">
                        <span>MEMBRE TRIBUNAL</span>
                    </a>

                </li>
            </ul>
        </li><li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons"></i>
                <span>DOSSIERS CORRECTIONNELS</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>RENVOI</span>
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>DOSSIERS</span>
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>CONSULTATIONS</span>
                    </a>

                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons"></i>
                <span>ADMINISTRATION</span>
            </a>
            <ul class="ml-menu">

                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>GREFFRIES</span>
                    </a>

                </li>
                <li>
                    <a href="{!! url('test') !!}" class="mce-menu-item">
                        <span>UTILISATEURS</span>
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>PROFILS</span>
                    </a>

                </li>


            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons"></i>
                <span>STATISTIQUES</span>
            </a>
            <ul class="ml-menu">

                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>PAR RENVOI</span>
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>PAR DOSSIER</span>
                    </a>

                </li>
                <li>
                    <a href="javascript:void(0);" class="mce-menu-item">
                        <span>PAR JURY</span>
                    </a>

                </li>
            </ul>
        </li>

        <li class="header">AUTRES</li>
        <li>
            <a href="javascript:void(0);">
                <i class="material-icons col-red">donut_large</i>
                <span>Important</span>
            </a>
        </li>

        <li>
            <a href="javascript:void(0);">
                <i class="material-icons col-light-blue">donut_large</i>
                <span>Information</span>
            </a>
        </li>
    </ul>
</div>