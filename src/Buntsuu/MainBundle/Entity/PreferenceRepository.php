<?php

namespace Buntsuu\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PreferenceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PreferenceRepository extends EntityRepository
{
	
	public function principalPreference(Preference $preferences)
	{
		$qb = $this->createQueryBuilder('p')
		->join('p.user','u')
		->join('p.firstLanguageSpoken','flp')
		->join('p.secondLanguageSpoken','slp')
		->join('p.thirdLanguageSpoken','tlp')
		->join('p.firstLanguageSearched','fls')
		->join('p.secondLanguageSearched','sls')
		->join('p.thirdLanguageSearched','tls')
		->select('u.username as username, u.gender as gender')
		->where('
				flp.name IN (:FirstLanguageSearched,:SecondLanguageSearched,:ThirdLanguageSearched) AND
				slp.name IN (:FirstLanguageSearched,:SecondLanguageSearched,:ThirdLanguageSearched) AND
				tlp.name IN (:FirstLanguageSearched,:SecondLanguageSearched,:ThirdLanguageSearched) AND
				fls.name IN (:FirstLanguageSpoken,:SecondLanguageSpoken,:ThirdLanguageSpoken) AND
				sls.name IN (:FirstLanguageSpoken,:SecondLanguageSpoken,:ThirdLanguageSpoken) AND
				tls.name IN (:FirstLanguageSpoken,:SecondLanguageSpoken,:ThirdLanguageSpoken) AND
				p.skype = :skype AND
				p.facebook = :facebook AND
				p.email = :email AND
				p.letter = :letter AND
				p.webcam = :webcam
				')
		->setParameter('FirstLanguageSearched', $preferences->getFirstLanguageSearched()->getName())
		->setParameter('SecondLanguageSearched', $preferences->getSecondLanguageSearched()->getName())
		->setParameter('ThirdLanguageSearched', $preferences->getThirdLanguageSearched()->getName())
		->setParameter('FirstLanguageSpoken', $preferences->getFirstLanguageSpoken()->getName())
		->setParameter('SecondLanguageSpoken', $preferences->getSecondLanguageSpoken()->getName())
		->setParameter('ThirdLanguageSpoken', $preferences->getThirdLanguageSpoken()->getName())
		->setParameter('skype',$preferences->getSkype())
		->setParameter('facebook',$preferences->getFacebook())
		->setParameter('email',$preferences->getEmail())
		->setParameter('letter',$preferences->getLetter())
		->setParameter('webcam',$preferences->getWebcam());
		return $qb->getQuery()->getResult();
	}
	
	public function secondaryPreference(Preference $preferences)
	{
		$qb = $this->createQueryBuilder('p')
		->join('p.user','u')
		->join('p.firstLanguageSpoken','flp')
		->join('p.secondLanguageSpoken','slp')
		->join('p.thirdLanguageSpoken','tlp')
		->join('p.firstLanguageSearched','fls')
		->join('p.secondLanguageSearched','sls')
		->join('p.thirdLanguageSearched','tls')
		->select('u.username as username, u.gender as gender')
		->where('
				(flp.name IN (:FirstLanguageSearched,:SecondLanguageSearched,:ThirdLanguageSearched) OR
				slp.name IN (:FirstLanguageSearched,:SecondLanguageSearched,:ThirdLanguageSearched) OR
				tlp.name IN (:FirstLanguageSearched,:SecondLanguageSearched,:ThirdLanguageSearched)) AND (
				fls.name IN (:FirstLanguageSpoken,:SecondLanguageSpoken,:ThirdLanguageSpoken) OR
				sls.name IN (:FirstLanguageSpoken,:SecondLanguageSpoken,:ThirdLanguageSpoken)) OR 
				tls.name IN (:FirstLanguageSpoken,:SecondLanguageSpoken,:ThirdLanguageSpoken) AND (
				p.skype = :skype OR
				p.facebook = :facebook OR
				p.email = :email OR
				p.letter = :letter OR
				p.webcam = :webcam )
				')
				->setParameter('FirstLanguageSearched', $preferences->getFirstLanguageSearched()->getName())
				->setParameter('SecondLanguageSearched', $preferences->getSecondLanguageSearched()->getName())
				->setParameter('ThirdLanguageSearched', $preferences->getThirdLanguageSearched()->getName())
				->setParameter('FirstLanguageSpoken', $preferences->getFirstLanguageSpoken()->getName())
				->setParameter('SecondLanguageSpoken', $preferences->getSecondLanguageSpoken()->getName())
				->setParameter('ThirdLanguageSpoken', $preferences->getThirdLanguageSpoken()->getName())
				->setParameter('skype',$preferences->getSkype())
				->setParameter('facebook',$preferences->getFacebook())
				->setParameter('email',$preferences->getEmail())
				->setParameter('letter',$preferences->getLetter())
				->setParameter('webcam',$preferences->getWebcam());
	
	
		return $qb->getQuery()->getResult();
	}
	
	public function tertiaryPreference(Preference $preferences)
	{
		$qb = $this->createQueryBuilder('p')
		->join('p.user','u')
		->join('p.firstLanguageSpoken','flp')
		->join('p.secondLanguageSpoken','slp')
		->join('p.thirdLanguageSpoken','tlp')
		->join('p.firstLanguageSearched','fls')
		->join('p.secondLanguageSearched','sls')
		->join('p.thirdLanguageSearched','tls')
		->select('u.username as username, u.gender as gender')
		->where('
				flp.name IN (:FirstLanguageSearched,:SecondLanguageSearched,:ThirdLanguageSearched) OR
				slp.name IN (:FirstLanguageSearched,:SecondLanguageSearched,:ThirdLanguageSearched) OR
				tlp.name IN (:FirstLanguageSearched,:SecondLanguageSearched,:ThirdLanguageSearched) 
				')
				->setParameter('FirstLanguageSearched', $preferences->getFirstLanguageSearched()->getName())
				->setParameter('SecondLanguageSearched', $preferences->getSecondLanguageSearched()->getName())
				->setParameter('ThirdLanguageSearched', $preferences->getThirdLanguageSearched()->getName());


	
	
		return $qb->getQuery()->getResult();
	}
	
	public function simpleSearch($languageSearched,$languageSpoken)
	{
		$qb = $this->createQueryBuilder('p')
		->join('p.user','u')
		->join('p.firstLanguageSpoken','flp')
		->join('p.secondLanguageSpoken','slp')
		->join('p.thirdLanguageSpoken','tlp')
		->join('p.firstLanguageSearched','fls')
		->join('p.secondLanguageSearched','sls')
		->join('p.thirdLanguageSearched','tls')
		->select('u.username as username, u.gender as gender')
		->where('
				flp.name IN (:FirstLanguageSearched) OR
				slp.name IN (:FirstLanguageSearched)OR
				tlp.name IN (:FirstLanguageSearched)OR
				fls.name IN (:FirstLanguageSpoken) OR
				sls.name IN (:FirstLanguageSpoken) OR
				tls.name IN (:FirstLanguageSpoken)
				')
				->setParameter('FirstLanguageSearched', $languageSearched)
				->setParameter('FirstLanguageSpoken', $languageSpoken);
	
		return $qb->getQuery()->getResult();
	}
}