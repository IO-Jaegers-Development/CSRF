<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;

    /**
     *
     */
    class CsrfSingleToken
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