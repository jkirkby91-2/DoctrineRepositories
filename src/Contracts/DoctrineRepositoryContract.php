<?php

namespace Jkirkby91\DoctrineRepositories\Contracts;

/**
 * Interface DoctrineRepositoryContract
 * @package Jkirkby91\DoctrineRepositories\Contracts
 */
interface DoctrineRepositoryContract
{

    /**
     * resets the entity manager when an exception is thrown
     * @return mixed
     */
    public function resetEntityManager();
}