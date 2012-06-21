<?php

namespace Buntsuu\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buntsuu\MainBundle\Entity\Preference
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Buntsuu\MainBundle\Entity\PreferenceRepository")
 */
class Preference
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var boolean $skype
     *
     * @ORM\Column(name="skype", type="boolean",nullable="true")
     */
    protected $skype;

    /**
     * @var boolean $facebook
     *
     * @ORM\Column(name="facebook", type="boolean",nullable="true")
     */
    protected $facebook;

    /**
     * @var boolean $email
     *
     * @ORM\Column(name="email", type="boolean",nullable="true")
     */
    protected $email;

    /**
     * @var boolean $letter
     *
     * @ORM\Column(name="letter", type="boolean",nullable="true")
     */
    protected $letter;

    /**
     * @var boolean $webcam
     *
     * @ORM\Column(name="webcam", type="boolean",nullable="true")
     */
    protected $webcam;
    
    /**
     * @ORM\OneToOne(targetEntity="Buntsuu\MainBundle\Entity\User")
     */
    private $user;
    
    
  
    /**
     * @ORM\ManyToOne(targetEntity="Buntsuu\MainBundle\Entity\Language")
     */
    protected $firstLanguageSpoken;
    
    /**
     * @ORM\ManyToOne(targetEntity="Buntsuu\MainBundle\Entity\Language")
     */
    protected $secondLanguageSpoken;
    
    /**
     * @ORM\ManyToOne(targetEntity="Buntsuu\MainBundle\Entity\Language")
     */
    protected $thirdLanguageSpoken;
    
    /**
     * @ORM\ManyToOne(targetEntity="Buntsuu\MainBundle\Entity\Language")
     */
    protected $firstLanguageSearched;
    
    /**
     * @ORM\ManyToOne(targetEntity="Buntsuu\MainBundle\Entity\Language")
     */
    protected $secondLanguageSearched;
    
    /**
     * @ORM\ManyToOne(targetEntity="Buntsuu\MainBundle\Entity\Language")
     */
    protected $thirdLanguageSearched;
    
    

	public function __construct(){

	}
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set skype
     *
     * @param boolean $skype
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
    }

    /**
     * Get skype
     *
     * @return boolean 
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set facebook
     *
     * @param boolean $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * Get facebook
     *
     * @return boolean 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set email
     *
     * @param boolean $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return boolean 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set letter
     *
     * @param boolean $letter
     */
    public function setLetter($letter)
    {
        $this->letter = $letter;
    }

    /**
     * Get letter
     *
     * @return boolean 
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * Set webcam
     *
     * @param boolean $webcam
     */
    public function setWebcam($webcam)
    {
        $this->webcam = $webcam;
    }

    /**
     * Get webcam
     *
     * @return boolean 
     */
    public function getWebcam()
    {
        return $this->webcam;
    }
    
	/* GetSet First Language Spoken */
    public function setFirstLanguageSpoken($firstLanguageSpoken)
    {
        $this->firstLanguageSpoken = $firstLanguageSpoken;
        return $this;
    }

    public function getFirstLanguageSpoken()
    {	
        return $this->firstLanguageSpoken;
    }
    
    /* GetSet Second Language Spoken */
    public function setSecondLanguageSpoken($secondLanguageSpoken)
    {
    	$this->secondLanguageSpoken = $secondLanguageSpoken;
    	return $this;
    }
    
    public function getSecondLanguageSpoken()
    {
    	return $this->secondLanguageSpoken;
    }
    
    /* GetSet Third Language Spoken */
    public function setThirdLanguageSpoken($thirdLanguageSpoken)
    {
    	$this->thirdLanguageSpoken = $thirdLanguageSpoken;
    	return $this;
    }
    
    public function getThirdLanguageSpoken()
    {
    	return $this->thirdLanguageSpoken;
    }
    
    
    
    /* GetSet First Language Searched */
    public function setFirstLanguageSearched($firstLanguageSearched)
    {
    	$this->firstLanguageSearched = $firstLanguageSearched;
    	return $this;
    }
    
    public function getFirstLanguageSearched()
    {
    	return $this->firstLanguageSearched;
    }
    
    /* GetSet Second Language Searched */
    public function setSecondLanguageSearched($secondLanguageSearched)
    {
    	$this->secondLanguageSearched = $secondLanguageSearched;
    	return $this;
    }
    
    public function getSecondLanguageSearched()
    {
    	return $this->secondLanguageSearched;
    }
    
    /* GetSet Third Language Searched */
    public function setThirdLanguageSearched($thirdLanguageSearched)
    {
    	$this->thirdLanguageSearched = $thirdLanguageSearched;
    	return $this;
    }
    
    public function getThirdLanguageSearched()
    {
    	return $this->thirdLanguageSearched;
    }
    
    public function getUser()
    {
    	return $this->user;
    }
    
    // The argument must be a User !
    public function setUser(\Buntsuu\MainBundle\Entity\User $user)
    {
    	$this->user = $user;
    }
    
}