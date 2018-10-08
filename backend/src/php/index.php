<?php

    require_once( __DIR__ . '/../../vendor/autoload.php' );

    use de\mayflower\nada\{ Main };
    use de\mayflower\nada\util\{ Math, Util };
    use PHPUnit\Util\{ Test };

    /**
     *  This is the starting script for nada that does nothing for everybody.
     *
     *  TODO Fix PHPDoc
     *  TODO Add symfony Edge support
     *  TODO Add jenkins support
     *  TODO Add swagger doc tool
     *
     *  TODO Add node.js frontend
     *  TODO Add webpack + TypeScript support
     *  TODO Add Material-UI
     */
    echo "\n" . 'PHP > index.php being invoked' . "\n\n";

    // test composer autoload
    echo '1. Composer Autoloading - PHPUnit value: [' . Test::MEDIUM . ']' . "\n";

    // test own classes and namespaces
    $util = new Util();
    echo '2. Composer Autoloading - Utility function format string: [' . $util->formatNumber( 1370421 ) . ']' . "\n";

    echo '3. Composer Autoloading - Invoke different custom package.' . "\n\n";
    Main::main();

    echo '4. Composer Autoloading - sine   of 90 degrees [' . Math::sinDegrees( 90 ) . ']' . "\n\n";
    echo '                          cosine of  0 degrees [' . Math::cosDegrees( 0  ) . ']' . "\n\n";
