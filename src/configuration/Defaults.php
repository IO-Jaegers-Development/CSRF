<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\configuration;

    use IOJaegers\CSRF\entities\types\CsrfPersistentType;

    /**
     *
     */
    class Defaults
    {
        /**
         * @return string
         */
        public final static function UUID_prefix(): string
        {
            return "Csrf_ID__";
        }


        /**
         * @return bool
         */
        public final static function UUID_normalise(): bool
        {
            return true;
        }


        /**
         * @return CsrfPersistentType
         */
        public final static function persistentType(): CsrfPersistentType
        {
            return CsrfPersistentType::PHPSession;
        }
    }
?>