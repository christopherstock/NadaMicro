<?php

    require_once( __DIR__ . '/../../vendor/autoload.php' );

    use de\mayflower\nada\Main;
    use de\mayflower\nada\util\Util;
    use PHPUnit\Util\Test;

    /**
     *  This is the starting script for nada that does nothing for everybody.
     *
     *  TODO Customize PHPUnit:
     *  TODO 1. PHPUnit own test runner in index.php
     *  TODO 2. run config for PHPUnit via PHPStorm!
     *
     *  TODO Add symfony Edge support
     *  TODO PHPDoc
     *  TODO Add jenkins
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
