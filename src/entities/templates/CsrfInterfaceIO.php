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
        public function load(): ?CsrfToken;

        public function save(): bool;
    }
?>