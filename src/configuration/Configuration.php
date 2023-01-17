<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\configuration;


    /**
     *
     */
    final class Configuration
    {
        // Variables
        private static ?string $PrefixUUID = null;
        private static ?bool $isToNormaliseUUID = null;

        // Accessors
        /**
         * @return string|null
         */
        public static function getPrefixUUID(): ?string
        {
            if( is_null( self::$PrefixUUID ) )
            {
                self::setPrefixUUID( Defaults::getPrefixUUID() );
            }

            return self::$PrefixUUID;
        }

        /**
         * @param string|null $PrefixUUID
         */
        public static function setPrefixUUID( ?string $PrefixUUID ): void
        {
            self::$PrefixUUID = $PrefixUUID;
        }

        /**
         * @return bool|null
         */
        public static function getIsToNormaliseUUID(): ?bool
        {
            if( is_null( self::$isToNormaliseUUID ) )
            {
                self::setIsToNormaliseUUID( Defaults::getIsToNormaliseUUID() );
            }

            return self::$isToNormaliseUUID;
        }

        /**
         * @param bool|null $isToNormaliseUUID
         */
        public static function setIsToNormaliseUUID( ?bool $isToNormaliseUUID ): void
        {
            self::$isToNormaliseUUID = $isToNormaliseUUID;
        }
    }
?>