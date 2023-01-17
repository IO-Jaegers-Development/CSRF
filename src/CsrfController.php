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
        public function load(): void
        {

        }

        /**
         * @return void
         */
        public function save(): void
        {

        }

        // Variable
        private ?string $token = null;

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
         * @return bool
         */
        public final function isTokenEmpty(): bool
        {
            $isValueSet = isset( $this->token );
            $isSizeEmpty = false;

            if( $isValueSet )
            {
                $size_of_token = $this->lengthOfToken();

                if( $size_of_token == self::zero )
                {
                    $isSizeEmpty = true;
                }

                return $isSizeEmpty;
            }
            else
            {
                return true;
            }
        }

        /**
         * @return int
         */
        public final function lengthOfToken(): int
        {
            return strlen( $this->token );
        }

        const zero = 0;
    }
?>