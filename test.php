<?php
    namespace IOJaegers;
    require_once './vendor/autoload.php';

    use IOJaegers\CSRF\CSRF;

    $facade = CSRF::getCsrf();

?>