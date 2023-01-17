<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\configuration;

    /**
     *
     */
    class Defaults
    {
        /**
         * @return string
         */
        public final static function getPrefixUUID(): string
        {
            return 'Csrf_ID__';
        }


        /**
         * @return bool
         */
        public final static function getIsToNormaliseUUID(): bool
        {
            return true;
        }
    }
?>