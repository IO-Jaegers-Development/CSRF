<?php
    namespace IOJaegers;
    require_once './vendor/autoload.php';

    use IOJaegers\CSRF\CSRF;
    use IOJaegers\CSRF\entities\UUIDToken;

    echo "started test: \r\n";
    CSRF::onEventStartup();

    // do something
    $uuid = new UUIDToken();
    print_r($uuid);


    echo "end of test. \r\n";
?>