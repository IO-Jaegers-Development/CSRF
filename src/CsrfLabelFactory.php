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

            $this->setLength( 48 );

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
         * @return void
         */
        public final function generateLabel(): void
        {
            $bytes = $this->getRandom()->getBytes( $this->getLength() );
            $label = bin2hex( $bytes );

            $controller = $this->getController();
            $controller->setToken( $label );
        }


        // Accessors
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
         * @return Randomizer|null
         */
        public final function getRandom(): ?Randomizer
        {
            return $this->random;
        }

        /**
         * @param Randomizer|null $random
         */
        public final function setRandom( ?Randomizer $random ): void
        {
            $this->random = $random;
        }

        /**
         * @return int|null
         */
        public final function getLength(): ?int
        {
            return $this->length;
        }

        /**
         * @param int|null $length
         */
        public final function setLength( ?int $length ): void
        {
            $this->length = $length;
        }
    }
?>