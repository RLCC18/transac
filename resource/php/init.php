<?php
    require_once 'function.php';

    spl_autoload_register (function($class) {
        require_once $_SERVER['DOCUMENT_ROOT'].'/transac/resource/php/class/'.$class.'.php';
    });
?>