<?php

    namespace de\mayflower\nada\util;

    /**
     *  Offers utility arithmetic functions.
     */
    class Math
    {
        /**
         *  Returns the sine value from a given angle in degrees.
         *
         *  @param float $degrees The degrees to get the sine value for.
         *
         *  @return float The according sine value for the specified number.
         */
        public static final function sinDegrees( float $degrees ) : float
        {
            return sin( deg2rad( $degrees ) );
        }

        /**
         *  Returns the cosine value from a given angle in degrees.
         *
         *  @param float $degrees The degrees to get the cosine value for.
         *
         *  @return float The according cosine value for the specified number.
         */
        public static final function cosDegrees( float $degrees ) : float
        {
            return cos( deg2rad( $degrees ) );
        }
    }
