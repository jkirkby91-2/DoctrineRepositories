<?php

namespace Jkirkby91\DoctrineRepositories;

use Jkirkby91\Boilers\NodeEntityBoiler\EntityContract AS Entity;

/**
 * Class ResourceRepositoryTrait
 *
 * Doctrine Resource Repository helper functions.
 *
 * @package Jkirkby91\RepositoryBoiler\Libraries
 * @author James Kirkby <jkirkby91@gmail.com>
 */
trait ResourceRepositoryTrait
{

    /**
     * @return mixed
     */
    public function store(Entity $entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush();
        return $entity;
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
     * @return mixed
     */
    public function index()
    {
        return $this->findAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->find($id);
    }

    /**
     * @param int $id
     * @return bool|OptimisticLockException|ORMInvalidArgumentException|\Exception
     */
    public function destroy($id)
    {
        try {
            $entity = $this->find($id);
            $this->_em->remove($entity);
            $this->_em->flush();
        } catch (OptimisticLockException $e) {
            return $e;
        } catch (ORMInvalidArgumentException $e) {
            return $e;
        }
        return true;
    }
}