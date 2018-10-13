<?php

    namespace de\mayflower\nada\controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    /**
     *  Represents the controller that handles all tasks for the task part.
     */
    class TaskController
    {
        /**
         *  @Route( "/task/{id}" )
         *
         *  Represents the get route that delivers one task item.
         *
         *  @param string $id The id of the task item to deliver.
         *
         *  @return Response The symfony response.
         */
        public function task( string $id ) : Response
        {
            return new Response
            (
                'controller invoked:<br>'
                . '<b>TaskController:todo('
                . $id
                . ')</b>'
            );
        }
    }
