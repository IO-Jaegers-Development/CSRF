<?php
    namespace IOJaegers;
    require_once './vendor/autoload.php';

    use IOJaegers\CSRF\CSRF;
    use IOJaegers\CSRF\entities\UUIDToken;

    $csrf = CSRF::getCsrf();
    $csrf->getController()->setToken("klmadfsklmfasdkmlkmfakmlsdkmkm");

    echo "started test: \r\n";

    CSRF::onEventStartup();

    print_r($csrf);

    print("\r\n");
    echo "end of test. \r\n";
?>