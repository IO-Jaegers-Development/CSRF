<?php
    namespace IOJaegers\CSRF\configuration;

    class Defaults
    {
        public static function UUID_prefix(): string
        {
            return "CsrfID__";
        }

        public static function UUID_normalise(): bool
        {
            return true;
        }
    }
?>