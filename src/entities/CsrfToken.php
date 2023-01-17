<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;


    /**
     *
     */
    class CsrfToken
        extends CsrfTokenTemplate
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setUuid( new UUIDToken() );
        }


    }
?>