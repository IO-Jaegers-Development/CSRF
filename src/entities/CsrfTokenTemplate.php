<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;


    /**
     *
     */
    abstract class CsrfTokenTemplate
        implements CsrfInterface
    {
        // variables
        private ?string $token = null;
        private ?UUIDToken $uuid = null;

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

        /**
         * @return UUIDToken|null
         */
        public function getUuid(): ?UUIDToken
        {
            return $this->uuid;
        }

        /**
         * @param UUIDToken|null $uuid
         */
        public function setUuid( ?UUIDToken $uuid ): void
        {
            $this->uuid = $uuid;
        }
    }
?>