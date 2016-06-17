<?php

// src/AppBundle/Twig/AppExtension.php
namespace MB\AdminBundle\TwigExtension;

class UserManagerExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('displayUserRoles', array($this, 'displayUserRoles')),
        );
    }

    public function displayUserRoles(array $roles)
    {
        $rolesConcatenates = implode("|", $roles);

        return $rolesConcatenates;
    }

    public function getName()
    {
        return 'user_manager_extension';
    }
}