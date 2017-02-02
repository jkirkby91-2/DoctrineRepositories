<?php

namespace Jkirkby91\DoctrineRepositories;

/**
 * Class DoctrineRepository
 *
 * @package Jkirkby91\DoctrineRepositories
 * @author James Kirkby <jkirkby91@gmail.com>
 */
abstract class DoctrineRepository extends \Doctrine\ORM\EntityRepository implements \Jkirkby91\DoctrineRepositories\Contracts\DoctrineRepositoryContract
{
    /**
     * @param array $input
     * @param $paginate
     * @return mixed
     */
//    public function search(array $input, $paginate)
//    {
//        return false @TODO implement search
//    }

//    public function paginatedQuery()
//    {
//        return false @TODO  implement
//    }

    /**
     * When exception is thrown in try/catch block of entity manager, a error is thrown when you next try use the entity manager
     * 'The EntityManager is closed'
     * you need to reset the entity manager
     */
    public function resetEntityManager()
    {
        if (!$this->_em->isOpen()) {
            $this->_em = $this->_em->create(
                $this->_em->getConnection(),
                $this->_em->getConfiguration()
            );
        }
    }
}
