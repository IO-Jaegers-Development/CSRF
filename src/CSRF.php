<?php
    /**
     *
     */
    namespace IOJaegers\CSRF;

    use IOJaegers\CSRF\configuration\Configuration;
    use IOJaegers\CSRF\entities\CsrfController;
    use IOJaegers\CSRF\entities\CsrfLabelFactory;
    use IOJaegers\CSRF\entities\templates\CsrfInterfaceIO;
    use IOJaegers\CSRF\entities\templates\singleton\CsrfSingleton;


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

            $this->setLabelFactory(
                new CsrfLabelFactory(
                    $this->getController()
                )
            );
        }

        // Variables
            // Global Version
        private static ?CSRF $csrf = null;

            // Local variables
        private ?CsrfController $controller = null;
        private ?CsrfLabelFactory $labelFactory = null;
        private ?CsrfInterfaceIO $io = null;



        /**
         * @return void
         */
        public final function setup(): void
        {
            $this->getController()->load( $this->getIo() );

            if( $this->getController()->isTokenEmpty() )
            {
                $this->generate();
            }
        }

        /**
         * @return void
         */
        public final function refresh(): void
        {
            $this->generate();
        }

        /**
         * @return void
         */
        protected function generate(): void
        {
            $this->getLabelFactory()->generateLabel();
            $this->getController()->save($this->getIo());
        }


        // Wrapper functions
        /**
         * @return CSRF
         */
        public final function getFacade(): CSRF
        {
            return self::getCsrf();
        }

        /**
         * @param CSRF $value
         * @return void
         */
        public final function setFacade( CSRF $value ): void
        {
            self::setCsrf( $value );
        }


        //
        /**
         * @return CSRF|null
         */
        public final static function getCsrf(): ?CSRF
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
        public final static function setCsrf( ?CSRF $csrf ): void
        {
            self::$csrf = $csrf;
        }

        // Events
        /**
         * @return void
         */
        public final static function onEventStartup(): void
        {
            $csrf = self::getCsrf();
            $csrf->setup();
        }

        /**
         * @return CsrfController|null
         */
        public final function getController(): ?CsrfController
        {
            return $this->controller;
        }

        /**
         * @param CsrfController|null $controller
         */
        public final function setController( ?CsrfController $controller ): void
        {
            $this->controller = $controller;
        }

        /**
         * @return CsrfLabelFactory|null
         */
        public final function getLabelFactory(): ?CsrfLabelFactory
        {
            return $this->labelFactory;
        }

        /**
         * @param CsrfLabelFactory|null $labelFactory
         */
        public final function setLabelFactory(?CsrfLabelFactory $labelFactory ): void
        {
            $this->labelFactory = $labelFactory;
        }

        /**
         * @return CsrfInterfaceIO|null
         */
        public function getIo(): ?CsrfInterfaceIO
        {
            return $this->io;
        }

        /**
         * @param CsrfInterfaceIO|null $io
         */
        public function setIo(?CsrfInterfaceIO $io): void
        {
            $this->io = $io;
        }
    }
?>