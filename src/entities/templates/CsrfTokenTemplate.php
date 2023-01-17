<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities\templates;

    use IOJaegers\CSRF\entities\UUIDToken;


    /**
     *
     */
    abstract class CsrfTokenTemplate
        implements CsrfInterfaceIO
    {
        /**
         *
         */
        protected final function instantiateUUID(): void
        {
            $i = new UUIDToken();
            $this->setUuid( $i );
        }

        // Variables
        const zero = 0;

        private ?string $token = null;
        private ?UUIDToken $uuid = null;

        // Accessors
        /**
         * @return string|null
         */
        public final function getToken(): ?string
        {
            return $this->token;
        }

        /**
         * @param string|null $token
         */
        public final function setToken( ?string $token ): void
        {
            $this->token = $token;
        }

        /**
         * @return UUIDToken|null
         */
        public final function getUuid(): ?UUIDToken
        {
            return $this->uuid;
        }

        /**
         * @param UUIDToken|null $uuid
         */
        public final function setUuid( ?UUIDToken $uuid ): void
        {
            $this->uuid = $uuid;
        }

        // Class states
        /**
         * @return bool
         */
        public final function isTokenNull(): bool
        {
            return is_null( $this->token );
        }

        /**
         * @return bool
         */
        public final function isTokenSet(): bool
        {
            return isset( $this->token );
        }

        /**
         * @return bool
         */
        public final function isTokenEmpty(): bool
        {
            if( $this->isTokenNull() )
            {
                return true;
            }

            $sizeOfToken = strlen( $this->getToken() );
            return ($sizeOfToken == self::zero);
        }
    }
?>