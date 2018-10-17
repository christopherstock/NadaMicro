<?php

    namespace de\mayflower\nada\controller;

    use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

    /**
     * @covers \de\mayflower\nada\controller\TaskController
     */
    class TaskControllerTest extends WebTestCase
    {
        public function testRouteGetTask() : void
        {
            $client = static::createClient();

            $client->request( 'GET', '/task/123' );

            $this->assertEquals( 200, $client->getResponse()->getStatusCode() );
            $this->assertEquals
            (
                'controller invoked:<br><b>TaskController:getTask(123)</b>',
                $client->getResponse()->getContent()
            );
        }

        public function testRoutePostTask() : void
        {
            $client = static::createClient();

            $client->request( 'POST', '/task/123' );

            $this->assertEquals( 200, $client->getResponse()->getStatusCode() );
            $this->assertEquals
            (
                'controller invoked:<br><b>TaskController:postTask(123)</b>',
                $client->getResponse()->getContent()
            );
        }
    }
