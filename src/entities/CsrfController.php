<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;


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
            $this->token = new CsrfToken();
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
        private ?CsrfToken $token = null;
        const zero = 0;

        /**
         * @return string|null
         */
        public final function getTokenSecret(): ?string
        {
            return $this->token->getToken();
        }

        /**
         * @param string|null $token
         */
        public final function setTokenSecret( ?string $token ): void
        {
            $this->token->setToken( $token );
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

    }
?>