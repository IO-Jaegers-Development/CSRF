<?php
    /**
 *
     */
    namespace IOJaegers\CSRF\drivers;

    /**
     *
     */
    enum CsrfDriverTypes
    {
        case HTTP;
        case FILESYSTEM;
        case DATABASES;
    }
?>