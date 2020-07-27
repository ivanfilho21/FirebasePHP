<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

define('ROOT', __DIR__.'/');
define('SERVER_NAME', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME']);
define('URL', SERVER_NAME.'/test/');

require ROOT.'/vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade(
    ROOT.'/res/pages',
    ROOT .'/res/_cache'
);

function view(string $viewName, array $data = array())
{
    global $blade;
    $viewName = empty($viewName) ? 'home' : $viewName;
    $viewName = $blade->exists($viewName) ? $viewName : '404';
    echo $blade->make($viewName, $data)->render();
}

function redirect(string $url)
{
    ?>
    <script>
        window.location.href = '<?= $url ?>';
    </script>
    <?php
    die;
}