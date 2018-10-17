<?php

    namespace de\mayflower\nada\controller;

    use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

    /**
     * @covers \de\mayflower\nada\controller\DefaultController
     */
    class DefaultControllerTest extends WebTestCase
    {
        public function testRouteIndex() : void
        {
            $client = static::createClient();

            $client->request( 'GET', '/' );

            $this->assertEquals( 200, $client->getResponse()->getStatusCode() );
            $this->assertEquals
            (
                'controller invoked:<br><b>DefaultController:index</b>',
                $client->getResponse()->getContent()
            );
        }

        public function testRoutePing() : void
        {
            $client = static::createClient();

            $client->request( 'GET', '/ping' );

            $this->assertEquals( 200, $client->getResponse()->getStatusCode() );
            $this->assertEquals
            (
                'controller invoked:<br><b>DefaultController:ping</b>',
                $client->getResponse()->getContent()
            );
        }

        public function testRouteSite() : void
        {
            $client = static::createClient();

            $client->request( 'GET', '/site' );

            $this->assertEquals( 200, $client->getResponse()->getStatusCode() );
            $this->assertEquals
            (
                '<html><body>Test HTML content.</body></html>',
                $client->getResponse()->getContent()
            );
        }
    }
