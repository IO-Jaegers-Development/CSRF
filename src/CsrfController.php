<?php
    /**
     *
     */
    namespace IOJaegers\CSRF;


    /**
     *
     */
    class CsrfController
    {
        /**
         *
         */
        public function __construct()
        {

        }

        /**
         * @return void
         */
        public function onStartup(): void
        {
            $label = new CsrfLabelFactory($this);
            print_r($label->generateLabel());

            print("\r\n");
        }

        /**
         * @return string|null
         */
        public function requestToken(): ?string
        {
            return "";
        }
    }
?>