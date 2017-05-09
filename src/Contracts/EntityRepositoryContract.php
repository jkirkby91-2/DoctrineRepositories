<?php

namespace Jkirkby91\DoctrineRepositories\Contracts;

/**
 * Interface EntityRepositoryContract
 * @package Jkirkby91\DoctrineRepositories\Contracts
 */
interface EntityRepositoryContract
{

    /**
     * resets the entity manager when an exception is thrown
     * @return mixed
     */
    public function createNode($entity);
}