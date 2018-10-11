<?php

    namespace de\mayflower\nada\util;

    use PHPUnit\Framework\TestCase;

    class UtilTest extends TestCase
    {
        public final function testFormatNumberLarge() : void
        {
            $util           = new Util();
            $numberToFormat = 123456789.2;

            $expected = '123,456,789.20';
            $actual   = $util->formatNumber( $numberToFormat );

            $this->assertEquals( $expected, $actual );
        }

        public final function testFormatNumberRoundDecimals() : void
        {
            $util           = new Util();
            $numberToFormat = 12.257;

            $expected = '12.26';
            $actual   = $util->formatNumber( $numberToFormat );

            $this->assertEquals( $expected, $actual );
        }

        public final function test3() : void
        {
            $this->assertEquals( 1, 1 );
        }
    }
