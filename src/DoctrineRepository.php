<?php

namespace Jkirkby91\DoctrineRepositories;

use \Doctrine\ORM\EntityRepository;
use \Jkirkby91\DoctrineRepositories\Contracts\DoctrineRepositoryContract;

/**
 * Class DoctrineRepository
 *
 * @package Jkirkby91\DoctrineRepositories
 * @author James Kirkby <jkirkby91@gmail.com>
 */
abstract class DoctrineRepository extends EntityRepository implements DoctrineRepositoryContract
{

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
