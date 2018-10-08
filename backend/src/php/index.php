<?php

    require_once( __DIR__ . '/../../vendor/autoload.php' );

    use de\mayflower\nada\Main;
    use de\mayflower\nada\util\Util;
    use PHPUnit\Util\Test;

    /**
    *   This is the starting script for nada that does nothing for everybody.
    *
    *   TODO Add jenkins
    *   TODO Add swagger doc tool
    *   TODO PHPDoc
    *   TODO Add symfony Edge support
    */
    echo "\n" . 'PHP > index.php being invoked' . "\n\n";

    // test composer autoload
    echo '1. Composer Autoloading - PHPUnit value: [' . Test::MEDIUM . ']' . "\n";

    // test own classes and namespaces
    $util = new Util();
    echo '2. Composer Autoloading - Utility function format string: [' . $util->formatNumber( 1370421 ) . ']' . "\n";

    echo '3. Composer Autoloading - Invoke different custom package.' . "\n\n";
    Main::main();
