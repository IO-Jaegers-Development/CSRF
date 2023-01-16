<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;

    /**
     *
     */
    abstract class CsrfToken
    {
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