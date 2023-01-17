<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;

    use IOJaegers\CSRF\entities\templates\CsrfTokenTemplate;


    /**
     *
     */
    class CsrfToken
        extends CsrfTokenTemplate
    {
        /**
         *
         */
        public function __construct( bool $generate_uuid = true )
        {
            if( $generate_uuid )
            {
                $this->instantiateUUID();
            }
        }


    }
?>