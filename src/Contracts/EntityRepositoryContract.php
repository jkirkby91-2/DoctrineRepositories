<?php
	declare(strict_types=1);

	namespace Jkirkby91\DoctrineRepositories\Contracts {

		use Jkirkby91\Boilers\NodeEntityBoiler\EntityContract;

		/**
		 * Interface EntityRepositoryContract
		 *
		 * @package Jkirkby91\DoctrineRepositories\Contracts
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		interface EntityRepositoryContract
		{

			/**
			 * createNode()
			 * @param \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract $entity
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function createNode(EntityContract $entity) : EntityContract;
		}
	}
