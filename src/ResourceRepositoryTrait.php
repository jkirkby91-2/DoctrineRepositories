<?php
	declare(strict_types=1);

	namespace Jkirkby91\DoctrineRepositories {

		use Doctrine\{
			Common\Collections\Collection, ORM\OptimisticLockException, ORM\ORMInvalidArgumentException
		};

		use Jkirkby91\{
			Boilers\NodeEntityBoiler\EntityContract as Entity, Boilers\NodeEntityBoiler\EntityContract
		};

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
			public function store(Entity $entity) : EntityContract
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
			public function update(Entity $entity) : EntityContract
			{
				$this->_em->merge($entity);
				$this->_em->flush();
				return $entity;
			}

			/**
			 * index()
			 * @return mixed
			 */
			public function index() : Collection
			{
				return $this->findAll();
			}

			/**
			 * show()
			 * @param $id
			 *
			 * @return mixed
			 */
			public function show(int $id) : EntityContract
			{
				return $this->find($id);
			}

			/**
			 * destroy()
			 * @param int $id
			 *
			 * @return bool
			 * @throws \Doctrine\ORM\OptimisticLockException
			 */
			public function destroy(int $id) : bool
			{
				try {
					$entity = $this->find($id);
					$this->_em->remove($entity);
					$this->_em->flush();
				} catch (OptimisticLockException $e) {
					throw new OptimisticLockException($e);
				} catch (ORMInvalidArgumentException $e) {
					throw new ORMInvalidArgumentException($e);
				}
				return true;
			}
		}
	}
