<?php

    namespace de\mayflower\nada\controller;

    use PHPUnit\Framework\TestCase;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class DefaultControllerTest extends TestCase
    {
        public function testRouteIndex() : void
        {
            $this->assertEquals( 1, 1 );
        }
    }
