<?php

    namespace de\mayflower\nada\controller;

    use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

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
    }
