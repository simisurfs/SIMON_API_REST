<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RecipesRecipe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;


class RecipesController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"recipes"})
     * @Rest\Get("/recipes.json")
     */
    public function getRecipesAction(Request $request)
    {
        $recipes = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:RecipesRecipe')
            ->findAll();

        /* @var $recipes RecipesRecipe */
        if (empty($recipes)) {
            return new JsonResponse(['message' => 'recipes not found'], Response::HTTP_NOT_FOUND);
        }

        return ["code" => 200,
            "message" => "success",
            "datas" => $recipes];
    }
}