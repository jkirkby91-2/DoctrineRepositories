<?php

namespace Jkirkby91\DoctrineRepositories;

//use LaravelDoctrine\ORM\Pagination\Paginatable;
//    use Paginatable;

//@TODO implement paginate this higher up dep tree in laravelDoctrineboiler

/**
 * Class RepositoryTrait
 * @package Jkirkby91\RepositoryBoiler\Libraries
 */
trait RepositoryTrait
{

    /**
     * @return array
     */
    public function all()
    {
        return $this->findAll();
    }
}