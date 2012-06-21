<?php

namespace Buntsuu\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
	
	public function theLast()
	{
		$qb = $this->createQueryBuilder('a')
		->orderBy('a.date','DESC')
		->setMaxResults(1);
	
		return $qb->getQuery()
		->getSingleResult();
	
	}
	
	public function theNext($id)
	{
		$qb = $this->createQueryBuilder('a')
		->where('a.id < :id')
		->orderBy('a.date','DESC')
		->setMaxResults(1)
		->setParameter("id", $id);
	
		return $qb->getQuery()
		->getSingleResult();
	
	}
	
	public function thePrevious($id)
	{
		$qb = $this->createQueryBuilder('a')
		->where('a.id > :id')
		->orderBy('a.date','DESC')
		->setMaxResults(1)
		->setParameter("id", $id);
	
		return $qb->getQuery()
		->getSingleResult();
	
	}
	
}