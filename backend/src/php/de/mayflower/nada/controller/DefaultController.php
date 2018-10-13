<?php

    namespace de\mayflower\nada\controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    /**
     *  Represents the default controller without a special purpose.
     */
    class DefaultController
    {
        /**
         *  @Route( "/" )
         *
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
         *  @Route( "/ping" )
         *
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

        /**
         *  @Route( "/site" )
         *
         *  Represents the site route.
         *
         * @return Response The symfony response.
         */
        public function site() : Response
        {
            return new Response
            (
                '<html>
                    <body>
                        Test HTML content.
                    </body>
                </html>'
            );
        }
    }
