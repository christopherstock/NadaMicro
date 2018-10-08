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
         *  @param int $number The number to format.
         *
         *  @return string The formatted number with two decimal digits.
         */
        public final function formatNumber( int $number ) : string
        {
            return number_format( $number, 2 );
        }
    }
