<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\singleton;

    use IOJaegers\CSRF\CSRF;

    /**
     *
     */
    interface CsrfSingleton
    {
        public function getFacade(): CSRF;
        public function setFacade( CSRF $value ): void;
    }
?>