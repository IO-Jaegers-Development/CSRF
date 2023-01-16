<?php
    /**
     *
     */
    namespace IOJaegers\CSRF;

    /**
     *
     */
    class CsrfFactory
    {
        // Constructors
        /**
         * @param CsrfController $controller
         */
        public function __construct( CsrfController $controller )
        {
            $this->setController( $controller );
        }

        // Variables
        private CsrfController|null $controller = null;

        // Accessors
        /**
         * @return CsrfController|null
         */
        public function getController(): ?CsrfController
        {
            return $this->controller;
        }

        /**
         * @param CsrfController|null $controller
         */
        public function setController( ?CsrfController $controller ): void
        {
            $this->controller = $controller;
        }
    }
?>