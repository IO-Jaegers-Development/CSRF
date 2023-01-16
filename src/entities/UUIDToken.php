<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities;

    use IOJaegers\CSRF\configuration\Defaults;

    /**
     *
     */
    class UUIDToken
    {
        // Constructors
        /**
         *
         */
        public function __construct( bool $generate = true )
        {
            if( $generate )
            {
                $this->generate();
            }
        }

        /**
         * @return void
         */
        public function generate(): void
        {
            $this->setToken( $this->UUIDAlgorithm_uniqid() );

            if( Defaults::UUID_normalise() )
            {
                $this->normalise();
            }
        }

        /**
         * @return void
         */
        protected function normalise(): void
        {
            $this->setToken(
                strtoupper(
                    $this->getToken()
                )
            );
        }

        /**
         * @return string
         */
        protected function UUIDAlgorithm_uniqid(): string
        {
            return uniqid( prefix: self::getPrefix(),
                           more_entropy: true );
        }

        // Variables
        private ?string $token = null;
        private static ?string $prefix = null;

        // Accessors
        /**
         * @return string
         */
        public function getToken(): string
        {
            return $this->token;
        }

        /**
         * @param string $token
         * @return void
         */
        public function setToken( string $token ): void
        {
            $this->token = $token;
        }

        /**
         * @return string
         */
        public static function getPrefix(): string
        {
            self::__load();
            return self::$prefix;
        }

        /**
         * @param string $prefix
         * @return void
         */
        public static function setPrefix( string $prefix ): void
        {
            self::$prefix = $prefix;
        }


        /**
         * @return bool
         */
        public static function isPrefixEmpty(): bool
        {
            return !isset( self::$prefix );
        }

        /**
         * @return void
         */
        protected static function __load(): void
        {
            if( self::isPrefixEmpty() )
            {
                self::setPrefix( Defaults::UUID_prefix() );
            }
        }
    }
?>