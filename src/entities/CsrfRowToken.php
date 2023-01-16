<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;

    /**
     *
     */
    class CsrfRowToken
        extends CsrfToken
    {
        /**
         *
         */
        public function __construct( ?string $value )
        {
            $this->setToken( $value );
        }


    }
?>