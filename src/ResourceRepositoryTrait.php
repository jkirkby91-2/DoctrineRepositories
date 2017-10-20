<?php

	namespace Jkirkby91\DoctrineRepositories;

	use Doctrine\ORM\OptimisticLockException;
	use Doctrine\ORM\ORMInvalidArgumentException;
	use Jkirkby91\Boilers\NodeEntityBoiler\EntityContract AS Entity;

	/**
	 * Trait ResourceRepositoryTrait
	 *
	 * @package Jkirkby91\DoctrineRepositories
	 * @author  James Kirkby <jkirkby@protonmail.ch>
	 */
	trait ResourceRepositoryTrait
	{

		/**
		 * store()
		 * @param \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract $entity
		 *
		 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
		 */
		public function store(Entity $entity)
		{
			$this->_em->persist($entity);
			$this->_em->flush();
			return $entity;
		}

		/**
		 * update()
		 * @param \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract $entity
		 *
		 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
		 */
		public function update(Entity $entity)
		{
			$this->_em->merge($entity);
			$this->_em->flush();
			return $entity;
		}

		/**
		 * index()
		 * @return mixed
		 */
		public function index()
		{
			return $this->findAll();
		}

		/**
		 * show()
		 * @param $id
		 *
		 * @return mixed
		 */
		public function show($id)
		{
			return $this->find($id);
		}

		/**
		 * destroy()
		 * @param $id
		 *
		 * @return bool|\Exception|\Jkirkby91\DoctrineRepositories\OptimisticLockException|\Jkirkby91\DoctrineRepositories\ORMInvalidArgumentException
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