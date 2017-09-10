<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RecipesRecipe;
use AppBundle\Form\RecipesRecipeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Security\Authorization\Voter\RecipesRecipeVoter;
use FOS\RestBundle\Controller\Annotations as Rest;


class RecipesController extends Controller
{
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"postRecipe"})
     * @Rest\Post("/users/{name}/recipes.json")
     */
    public function postRecipesAction(Request $request)
    {
        $entity = $this->getDoctrine()->getManager();
        $user = $entity->getRepository('AppBundle:UsersUser')
            ->findOneBy(['username' => $request->get('name')]);
        /* @var $user UsersUser */

        if (empty($user)) {
            return new JsonResponse(['code' => 404, 'message' => 'user not found'], Response::HTTP_NOT_FOUND);
        }

        $recipes = new RecipesRecipe();
        $form = $this->createForm(RecipesRecipeType::class, $recipes);
        $recipes->setUser($user);

        $authChecker = $this->get('security.authorization_checker');
        if (!$authChecker->isGranted(RecipesRecipeVoter::EDIT, $recipes)) {
            throw $this->createAccessDeniedException();
        }

        $form->submit($request->request->all());

        if ($form->isValid()) {
            $recipes->setUser($user);
            $entity->persist($recipes);
            $entity->flush();
            return [
                "code" => 201,
                "message" => "success",
                "datas" => $recipes
            ];
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(serializerGroups={"userRecipes"})
     * @Rest\Get("/users/{name}/recipes.json")
     */
    public function getRecipesUsername(Request $requestUsername)
    {
        $recipes = $this->get('doctrine.orm.entity_manager')
            ->createQueryBuilder()
            ->select(['recipe.id', 'recipe.name', 'recipe.slug'])
            ->from('AppBundle:RecipesRecipe', 'recipe')
            ->innerJoin('recipe.user', 'recipeuser')
            ->where('recipeuser.username = :name')->setParameter('name', $requestUsername->get('name'))
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
     * @Rest\View(serializerGroups={"recipesName"})
     * @Rest\Get("/recipes/{name}")
     */
    public function getRecipesName(Request $requestRecipesName)
    {
        $recipeName = explode('.', $requestRecipesName->get('name'))[0];
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
    public function getRecipes(Request $requestRecipes)
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

