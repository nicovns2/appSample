<?php

namespace JOYAS\JoyasBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ClienteProveedorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClienteRepository extends EntityRepository{
    public function findAll()    {
        return $this->findBy(array(), array('razonSocial' => 'ASC'));
    }    
}