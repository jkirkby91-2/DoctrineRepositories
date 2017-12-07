<?php
	declare(strict_types=1);

	namespace Jkirkby91\DoctrineRepositories {

		use Jkirkby91\{
			Boilers\NodeEntityBoiler\EntityContract
		};

		/**
		 * Trait CrudRepositoryTrait
		 *
		 * @package Jkirkby91\DoctrineRepositories
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		trait CrudRepositoryTrait
		{

			/**
			 * create()
			 * @param \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract $entity
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function create(EntityContract $entity)
			{
				$this->_em->persist($entity);
				$this->_em->flush();
				return $entity;
			}

			/**
			 * read()
			 * @param int $id
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function read(int $id)
			{
				return $this->find($id);
			}

			/**
			 * update()
			 * @param \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract $entity
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function update(EntityContract $entity)
			{
				$this->_em->merge($entity);
				$this->_em->flush();
				return $entity;
			}

			/**
			 * @param $id
			 * @return bool
			 */
			public function delete(int $id) : bool
			{
				return false; //@TODO IMPLEMENT SOFT DELETE
			}
		}
	}