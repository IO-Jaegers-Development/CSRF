<?php
    /**
     *
     */
    namespace IOJaegers\CSRF;

    use IOJaegers\CSRF\singleton\CsrfSingleton;


    /**
     *
     */
    class CSRF
        implements CsrfSingleton
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setController(
                new CsrfController()
            );

            $this->setFactory(
                new CsrfFactory(
                    $this->getController()
                )
            );
        }

        // Variables
            // Global Version
        private static ?CSRF $csrf = null;

            // Local variables
        private ?CsrfController $controller = null;
        private ?CsrfFactory $factory = null;

        // Wrapper functions
        /**
         * @return CSRF
         */
        public function getFacade(): CSRF
        {
            return self::getCsrf();
        }

        /**
         * @param CSRF $value
         * @return void
         */
        public function setFacade( CSRF $value ): void
        {
            self::setCsrf( $value );
        }


        //
        /**
         * @return CSRF|null
         */
        public static function getCsrf(): ?CSRF
        {
            if( !isset( self::$csrf ) )
            {
                self::$csrf = new CSRF();
            }

            return self::$csrf;
        }

        /**
         * @param CSRF|null $csrf
         */
        public static function setCsrf( ?CSRF $csrf ): void
        {
            self::$csrf = $csrf;
        }

        /**
         * @return void
         */
        public static function onEventStartup(): void
        {
            $facade = CSRF::getCsrf();
            $facade->getController()->onStartup();


        }

        /**
         * @return CsrfController|null
         */
        public function getController(): ?CsrfController
        {
            return $this->controller;
        }

        /**
         * @param CsrfController|null $controller
         */
        public function setController( ?CsrfController $controller ): void
        {
            $this->controller = $controller;
        }

        /**
         * @return CsrfFactory|null
         */
        public function getFactory(): ?CsrfFactory
        {
            return $this->factory;
        }

        /**
         * @param CsrfFactory|null $factory
         */
        public function setFactory( ?CsrfFactory $factory ): void
        {
            $this->factory = $factory;
        }
    }
?>