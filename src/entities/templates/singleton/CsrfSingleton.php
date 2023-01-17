<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities\templates\singleton;

    use IOJaegers\CSRF\CSRF;


    /**
     *
     */
    interface CsrfSingleton
    {
        /**
         * @return CSRF
         */
        public function getFacade(): CSRF;

        /**
         * @param CSRF $value
         * @return void
         */
        public function setFacade( CSRF $value ): void;
    }
?>