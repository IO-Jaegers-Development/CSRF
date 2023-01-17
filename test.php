<?php
    namespace IOJaegers;
    require_once './vendor/autoload.php';

    use IOJaegers\CSRF\CSRF;
    use IOJaegers\CSRF\entities\UUIDToken;

    echo "started test: \r\n";
    CSRF::onEventStartup();

    echo "end of test. \r\n";
?>