<?php
    /**
     *
     */
    namespace IOJaegers\CSRF;

    use Random\Engine\Secure;
    use Random\Randomizer;

    /**
     *
     */
    class CsrfLabelFactory
    {
        // Constructors
        /**
         * @param CsrfController $controller
         */
        public function __construct( CsrfController $controller )
        {
            $this->setController( $controller );

            $this->setLength(32);

            $this->setRandom(
                new Randomizer(
                    new Secure()
                )
            );
        }

        // Variables
        private CsrfController|null $controller = null;
        private Randomizer|null $random = null;

        private ?int $length = null;

        // Code
        /**
         * @return string
         */
        protected function generateBytes(): string
        {
            return $this->getRandom()->getBytes( $this->getLength() );
        }

        /**
         * @return string
         */
        public function generateLabel(): string
        {
            return bin2hex( $this->generateBytes() );
        }

        // Accessors
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
         * @return Randomizer|null
         */
        public function getRandom(): ?Randomizer
        {
            return $this->random;
        }

        /**
         * @param Randomizer|null $random
         */
        public function setRandom(?Randomizer $random): void
        {
            $this->random = $random;
        }

        /**
         * @return int|null
         */
        public function getLength(): ?int
        {
            return $this->length;
        }

        /**
         * @param int|null $length
         */
        public function setLength( ?int $length ): void
        {
            $this->length = $length;
        }
    }
?>