<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 07/04/2019
 * Time: 16:24
 */

namespace App\Controller\Admin;


use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use App\Entity\Admin;


class AdminController extends EasyAdminController
{


    public function __construct()
    {

    }

    /**
     * @param object $entity
     */


    protected function updateEntity($entity)
    {
        if (!$entity instanceof Admin) {
            return;
        }

        if ($entity->getPassword()) {
            $entity->setPassword($entity->getPassword());
        }

        $entity->setRole('ROLE_SUPER_ADMIN');

        parent::updateEntity($entity);
    }

    /**
     * @param object $entity
     */
    protected function persistEntity($entity)
    {
        if (!$entity instanceof Admin) {
            return;
        }

        if ($entity->getPassword()) {
            $entity->setPassword($entity->getPassword());
        }

        $entity->setRole('ROLE_SUPER_ADMIN');

        parent::persistEntity($entity);
    }
}