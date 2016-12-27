<div id="page-content-wrapper">
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-th-list"></span> Menu</a>

    <?php 

        if (!isset($_GET['menu'])) {
        
            require 'moduls/content.php';

        }elseif ($_GET['menu'] == 'Dashboard') {

            require "moduls/dasboard.php";

        }elseif ($_GET['menu'] == 'Shortcuts') {

            require "moduls/shortcuts.php";

        }elseif ($_GET['menu'] == 'Projects') {

            require "moduls/projects.php";

        }elseif ($_GET['menu'] == 'Archives') {

            require "moduls/archives.php";

        }elseif ($_GET['menu'] == 'Source') {

            require "moduls/source.php";

        }elseif ($_GET['menu'] == 'Albums') {

            require "moduls/albums.php";

        }elseif ($_GET['menu'] == 'Documentations') {

            require "moduls/documentations.php";

        }

    ?>
    
</div>