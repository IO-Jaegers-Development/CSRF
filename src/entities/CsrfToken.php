<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;

    /**
     *
     */
    class CsrfToken
    {
        /**
         *
         */
        public function __construct( ?string $value )
        {
            $this->setToken( $value );
        }

        // variables
        private ?string $token = null;

        /**
         * @return string|null
         */
        public function getToken(): ?string
        {
            return $this->token;
        }

        /**
         * @param string|null $token
         */
        public function setToken( ?string $token ): void
        {
            $this->token = $token;
        }
    }
?>