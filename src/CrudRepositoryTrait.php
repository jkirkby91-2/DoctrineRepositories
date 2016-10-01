<?php

namespace Jkirkby91\DoctrineRepositories;

use Jkirkby91\Boilers\NodeEntityBoiler\EntityContract AS Entity;

/**
 * Class CrudRepositoryTrait
 *
 * @package Jkirkby91\RepositoryBoiler\Libraries
 * @author James Kirkby <jkirkby91@gmail.com>
 */
trait CrudRepositoryTrait
{

    /**
     * @param Entity $entity
     * @return Entity
     */
    public function create(Entity $entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush();
        return $entity;
    }

    /**
     * @param $id
     * @return bool
     */
    public function read($id)
    {
        return $this->find($id);
    }

    /**
     * @param Entity $entity
     * @return Entity
     */
    public function update(Entity $entity)
    {
        $this->_em->merge($entity);
        $this->_em->flush();
        return $entity;
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        return false; //@TODO IMPLEMENT SOFT DELETE
    }
}