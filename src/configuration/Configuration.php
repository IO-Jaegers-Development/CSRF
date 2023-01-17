<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\configuration;

    use IOJaegers\CSRF\entities\types\CsrfPersistentType;

    /**
     *
     */
    final class Configuration
    {
        // Variables
        private static ?string $PrefixUUID = null;
        private static ?bool $isToNormaliseUUID = null;
        private static ?CsrfPersistentType $persistentForm = null;


        // Accessors
        /**
         * @return string|null
         */
        public static function getPrefixUUID(): ?string
        {
            if( is_null( self::$PrefixUUID ) )
            {
                self::setPrefixUUID( Defaults::UUID_prefix() );
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
                self::setIsToNormaliseUUID( Defaults::UUID_normalise() );
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

        /**
         * @return CsrfPersistentType|null
         */
        public static function getPersistentForm(): ?CsrfPersistentType
        {
            return self::$persistentForm;
        }

        /**
         * @param CsrfPersistentType|null $persistentForm
         */
        public static function setPersistentForm( ?CsrfPersistentType $persistentForm ): void
        {
            self::$persistentForm = $persistentForm;
        }
    }
?>