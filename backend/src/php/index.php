<?php

    require_once( __DIR__ . '/../../vendor/autoload.php' );
    require_once( __DIR__ . '/de/mayflower/nada/util/Util.php' );

    use de\mayflower\nada\util\Util;
    use PHPUnit\Util\Test;

    /**
    *   This is the starting script for nada that does nothing for everybody.
    *
    *   TODO Add jenkins
    *   TODO Add swagger doc tool
    *   TODO PHPDoc
    *   TODO Add symfony Edge support
    *
    */
    echo 'PHP > index.php being invoked' . "\n";

    // test composer autoload
    echo 'PHPUnit value: [' . Test::MEDIUM . ']' . "\n";

    // test own classes and namespaces
    $util = new util();
    echo 'Utility function format string: [' . $util->formatNumber( 1370421 ) . ']' . "\n";
