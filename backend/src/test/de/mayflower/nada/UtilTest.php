<?php

    namespace de\mayflower\nada\util;

    use PHPUnit\Framework\TestCase;

    class UtilTest extends TestCase
    {
        public final function testFormatNumber() : void
        {
            $util           = new Util();
            $numberToFormat = 123456789.2;

            $expected = '123,456,789.20';
            $actual   = $util->formatNumber( $numberToFormat );

            $this->assertEquals( $expected, $actual );
        }
    }
