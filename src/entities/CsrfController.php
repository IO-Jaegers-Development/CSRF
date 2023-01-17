<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;


    use IOJaegers\CSRF\entities\templates\CsrfInterfaceIO;

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
         * @param CsrfInterfaceIO $io
         * @return void
         *
         */
        public function load( CsrfInterfaceIO $io ): void
        {

        }

        /**
         * @param CsrfInterfaceIO $io
         * @return void
         */
        public function save( CsrfInterfaceIO $io ): void
        {

        }


        // Variable
        private ?CsrfToken $token = null;
        const zero = 0;

        /**
         * @return CsrfToken|null
         */
        public final function getToken(): ?CsrfToken
        {
            return $this->token;
        }


        /**
         * @param CsrfToken|null $token
         */
        public final function setToken( ?CsrfToken $token ): void
        {
            $this->token = $token;
        }

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
            $isValueSet = $this->getToken()->isTokenSet();
            $isSizeEmpty = false;

            if( $isValueSet )
            {
                if( $this->getToken()->isTokenEmpty() )
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