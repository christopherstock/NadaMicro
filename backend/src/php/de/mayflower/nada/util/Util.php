<?php

    namespace de\mayflower\nada\util;

    /**
     *  Offers utility functions.
     */
    class Util
    {
        /**
         *  Formats the given number.
         *
         *  @param float $number The number to format.
         *
         *  @return string The formatted number with two decimal digits.
         */
        public final function formatNumber( float $number ) : string
        {
            return number_format( $number, 2 );
        }
    }
