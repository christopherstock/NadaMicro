<?php

    namespace de\mayflower\nada\controller;

    use Symfony\Component\HttpFoundation\Response;

    /**
     *  Represents the default controller without a special purpose.
     */
    class DefaultController
    {
        /**
         *  Represents the index route.
         *
         * @return Response The symfony response.
         */
        public function index() : Response
        {
            return new Response
            (
                'controller invoked:<br>'
                . '<b>DefaultController:index</b>'
            );
        }

        /**
         *  Represents the ping route.
         *
         * @return Response The symfony response.
         */
        public function ping() : Response
        {
            return new Response
            (
                'controller invoked:<br>'
                . '<b>DefaultController:ping</b>'
            );
        }
    }
