<?php

namespace AppBundle\Security\Authorization\Voter;

use AppBundle\Entity\Booking;
use AppBundle\Entity\TypeStatus;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class RecipesRecipeVoter implements VoterInterface
{
    const EDIT = 'edit';
    const VIEW = 'view';
    public function supportsAttribute($attribute)
    {
        return in_array($attribute, array(
            self::EDIT,
            self::VIEW,
        ));
    }

    public function supportsClass($class)
    {
        $supportedClass = 'AppBundle\Entity\RecipesRecipe';
        return $supportedClass === $class or is_subclass_of($class, $supportedClass);
    }

    public function vote(TokenInterface $token, $recipe, array $attributes)
    {
        if (!$this->supportsClass('AppBundle\Entity\RecipesRecipe')) {
            return VoterInterface::ACCESS_ABSTAIN;
        }
        if (1 !== count($attributes)) {
            throw new \InvalidArgumentException(
                'Only one attribute is allowed'
            );
        }
        $attribute = $attributes[0];
        if (!$this->supportsAttribute($attribute)) {
            return VoterInterface::ACCESS_ABSTAIN;
        }
        $user = $token->getUser();
        if (!$user instanceof UserInterface) {
            return VoterInterface::ACCESS_DENIED;
        }
        switch ($attribute) {
            case self::EDIT:
                return $this->canEditSolution($user, $recipe);
            case self::VIEW:
                return $this->canViewSolution($user, $recipe);
        }
        return VoterInterface::ACCESS_DENIED;
    }

    /**
     * Vérifie que l'utilisateur connecté a le droit d'éditer une solution.
     * @param  UserInterface $user     L'utilisateur connecté
     * @param  $recipe L'objet solution
     * @return int                     -1 si l'accès n'est pas autorisé, 1 s'il l'est 0 si le Voter laisse de système de sécurité répondre.
     */
    protected function canEditSolution(UserInterface $user, $recipe)
    {
        if ($recipe->getUser()->getUsername() !== $user->getUsername()) {
            return VoterInterface::ACCESS_DENIED;
        }
        return VoterInterface::ACCESS_GRANTED;
    }

    /**
     * Vérifie que l'utilisateur connecté a le droit de voir une solution.
     * @param  UserInterface $user     L'utilisateur connecté
     * @param  $recipe                  L'objet solution
     * @return int                     -1 si l'accès n'est pas autorisé, 1 s'il l'est 0 si le Voter laisse de système de sécurité répondre.
     */
    protected function canViewSolution(UserInterface $user, $recipe) {
        if (is_array($recipe)) {
            if (!in_array("ROLE_ADMIN", $user->getRoles()))
                return VoterInterface::ACCESS_DENIED;
        } else if ($recipe->getUser() !== $user) {
            return VoterInterface::ACCESS_DENIED;
        }
        return VoterInterface::ACCESS_GRANTED;
    }
}