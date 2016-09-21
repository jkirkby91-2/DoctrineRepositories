<?php

namespace Jkirkby91\DoctrineRepositories;

/**
 * Class ResourceRepositoryTrait
 * @package Jkirkby91\RepositoryBoiler\Libraries
 */
trait ResourceRepositoryTrait
{

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->all();
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