<?php
    /**
     *
     */
    namespace IOJaegers\CSRF\entities\templates;

    use IOJaegers\CSRF\entities\CsrfToken;


    /**
     *
     */
    interface CsrfInterfaceIO
    {
        /**
         * @param string $id
         * @return CsrfToken|null
         */
        public function load( string $id ): ?CsrfToken;

        /**
         * @param array $values
         * @return bool
         */
        public function save( array $values ): bool;
    }
?>