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

        }

        // Variables
        private static ?CSRF $csrf = null;

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
    }
?>