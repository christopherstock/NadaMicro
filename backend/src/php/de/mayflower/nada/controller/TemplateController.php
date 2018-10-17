<?php

    namespace de\mayflower\nada\controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    /**
     *  Represents the controller that handles an example template.
     */
    class TemplateController extends AbstractController
    {
        /**
         *  @Route( "/template/{name}", methods={ "GET" } )
         *
         *  Represents the get route that delivers an example template.
         *
         *  @param string $name The name of the template to render.
         *
         *  @return Response The symfony response.
         */
        public function getTemplate( string $name ) : Response
        {
            return $this->render(
                'name/name.html.twig',
                [
                    'name' => $name,
                ]
            );
        }
    }
