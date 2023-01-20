# Security CSRF


    <?php
        namespace IOJaegers;
        require_once './vendor/autoload.php';
    
        use IOJaegers\CSRF\CSRF;
    
        $csrf = CSRF::getCsrf();
    
        CSRF::onEventStartup();
    ?>