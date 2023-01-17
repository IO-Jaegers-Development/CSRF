<?php
    /**
 *
 */
    namespace IOJaegers\CSRF\entities\types;

    /**
     *
     */
    enum CsrfPersistentType
    {
        case None;

        case Cookie;
        case PHPSession;

        case Database;
        case FileSystem;
    }
?>