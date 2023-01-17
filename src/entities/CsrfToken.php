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
        public function __construct()
        {
            $this->instantiateUUID();
        }


    }
?>