<?php

namespace Jkirkby91\DoctrineRepositories;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Class CrudRepositoryTrait
 * @package Jkirkby91\RepositoryBoiler\Libraries
 */
trait CrudRepositoryTrait
{

    /**
     * @param ServerRequestInterface $request
     * @return mixed
     */
    abstract public function create(ServerRequestInterface $request);

    /**
     * @param $id
     */
    public function read($id)
    {
        //@TODO implement
    }

    /**
     * @param ServerRequestInterface $request
     * @return mixed
     */
    abstract public function update(ServerRequestInterface $request);

    /**
     * @param $id
     */
    public function delete($id)
    {
        //@TODO impleement
    }
}