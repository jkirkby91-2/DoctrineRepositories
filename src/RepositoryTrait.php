<?php
	declare(strict_types=1);

	namespace Jkirkby91\DoctrineRepositories {

		use Doctrine\{
			Common\Collections\Collection
		};

		/**
		 * Class RepositoryTrait
		 * @package Jkirkby91\RepositoryBoiler\Libraries
		 */
		trait RepositoryTrait
		{

			/**
			 * all()
			 * @return \Doctrine\Common\Collections\Collection
			 */
			public function all() : Collection
			{
				return $this->findAll();
			}
		}
	}
