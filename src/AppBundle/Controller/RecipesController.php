<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RecipesRecipe;
use AppBundle\Form\RecipesRecipeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;


class RecipesController extends Controller
{
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"new_recipe"})
     * @Rest\Post("/users/{name}/recipes.json")
     */
    public function postRecipes(Request $request)
    {
        $user = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:UsersUser')
            ->findOneBy(array('username' => $request->get('name')));
        /* @var $user UsersUser */

        if (empty($user)) {
            return new JsonResponse(['code' => 404, 'message' => 'user not found'], Response::HTTP_NOT_FOUND);
        }

        $recipes = new RecipesRecipe();
        $recipesForm = $this->createForm(RecipesRecipeType::class, $recipes);
        $recipesForm->submit($request->request->all());

        if ($recipesForm->isValid()) {
            $recipes->setUser($user);
            $entityManager = $this->get('doctrine.orm.entity_manager');
            $entityManager->persist($recipes);
            $entityManager->flush();
            return ["code" => 201, "message" => "success", "datas"=> $recipes];
        } else {
            return $recipesForm;
        }
    }

    /**
     * @Rest\View(serializerGroups={"user_recipes"})
     * @Rest\Get("/users/{name}/recipes.json")
     */
    public function getRecipesUsername(Request $request)
    {
        $recipes = $this->get('doctrine.orm.entity_manager')
            ->createQueryBuilder()
            ->select(['recipe.id', 'recipe.name', 'recipe.slug'])
            ->from('AppBundle:RecipesRecipe', 'recipe')
            ->innerJoin('recipe.user', 'recipeuser')
            ->where('recipeuser.username = :name')->setParameter('name', $request->get('name'))
            ->getQuery()
            ->getScalarResult();
        /* @var $recipes RecipesRecipe */


        if (empty($recipes)) {
            return new JsonResponse(['code' => 404, 'message' => 'user not found'], Response::HTTP_NOT_FOUND);
        }

        return ["code" => 200,
            "message" => "success",
            "datas" => $recipes];
    }

    /**
     * @Rest\View(serializerGroups={"recipesByName"})
     * @Rest\Get("/recipes/{name}")
     */
    public function getRecipesName(Request $request)
    {
        $recipeName = explode('.', $request->get('name'))[0];
        $recipes = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:RecipesRecipe')
            ->findOneBy(array('slug' => $recipeName));

        /* @var $recipes RecipesRecipe */
        if (empty($recipes)) {
            return new JsonResponse(['code' => 404, 'message' => 'recipes not found'], Response::HTTP_NOT_FOUND);
        }

        return ["code" => 200,
            "message" => "success",
            "datas" => $recipes];
    }

    /**
     * @Rest\View(serializerGroups={"recipes"})
     * @Rest\Get("/recipes.json")
     */
    public function getRecipes(Request $request)
    {
        $recipes = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:RecipesRecipe')
            ->findAll();

        /* @var $recipes RecipesRecipe */
        if (empty($recipes)) {
            return new JsonResponse(['code' => 404, 'message' => 'recipes not found'], Response::HTTP_NOT_FOUND);
        }

        return ["code" => 200,
            "message" => "success",
            "datas" => $recipes];
    }

}

