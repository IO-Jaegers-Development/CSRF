<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities\templates;


    /**
     *
     */
    abstract class CsrfTokenTemplate
    {
        // Variables
        const zero = 0;

        private ?string $token = null;

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
            return ( $sizeOfToken == self::zero );
        }
    }
?>