<?php

namespace Buntsuu\MainBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buntsuu\MainBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Buntsuu\MainBundle\Entity\UserRepository")
 */
class User implements UserInterface {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $username
	 *
	 * @ORM\Column(name="username", type="string", length=20, unique=true)
	 */
	private $username;
	
 	/**
     * @ORM\Column(name="salt", type="string", length=255,unique=true)
     */
    private $salt;

    /**
     * @ORM\Column(name="password",type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    /**
     * @ORM\Column(type="array")
     */
    private $roles;
    
    /**
     * @var boolean $gender
     *
     * @ORM\Column(name="gender", type="boolean", nullable="true")
     */
    private $gender;
    
    /**
     * @var string $skype
     *
     * @ORM\Column(name="skype", type="string", length=60,nullable="true")
     */
    private $skype;
    
    /**
     * @var string $facebook
     *
     * @ORM\Column(name="facebook", type="string", length=60,nullable="true")
     */
    private $facebook;

    
    /**
     * @var string $birthdate
     *
     * @ORM\Column(name="birthdate", type="date",nullable="true")
     */
    private $birthdate;
    
    

    public function __construct()
    {
        $this->isActive = true;
        $this->roles = array("ROLE_USER");
        $this->salt = md5(uniqid(null, true));
    }

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set username
	 *
	 * @param string $username
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

	/**
	* Set email
	*
	* @param  string email
	*/
	public function setEmail($email)
	{
	    $this->email = $email;
	    return $this;
	}
	 
	/**
	*Get email 
	*
	* @return string
	*/
	public function getEmail()
	{
	    return $this->email;
	}
	

	 
	
	/**
	 * Get username
	 *
	 * @return string 
	 */
	public function getUsername() {
		return $this->username;
	}
	public function getRoles() {
		return array_unique($this->roles);
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 * Set password
	 *
	 * @param  string password
	 */
	public function setPassword($password) {
		$this->password = $password;
	}
	
	
	public function getSalt() {
		return $this->salt;
	}
	
	/**
	 * Set salt
	 *
	 * @param string $salt
	 */
	public function setSalt($salt) {
		$this->salt = $salt;
	}
	
	
	public function eraseCredentials() {
		// TODO: Auto-generated method stub

	}
	public function equals(UserInterface $user) {
		// TODO: Auto-generated method stub

	}
	
	public function isSuperAdmin(){
		
		return false;
	}
	
	/**
	* Set gender
	*
	* @param  boolean gender
	*/
	public function setGender($gender)
	{
	    $this->gender = $gender;
	    return $this;
	}
	 
	/**
	*Get gender 
	*
	* @return boolean
	*/
	public function getGender()
	{
	    return $this->gender;
	}
	
	/**
	* Set birthdate
	*
	* @param  date birthdate
	*/
	public function setBirthDate($birthdate)
	{
	    $this->birthdate = $birthdate;
	    return $this;
	}
	 
	/**
	*Get birthdate 
	*
	* @return date
	*/
	public function getBirthDate()
	{
	    return $this->birthdate;
	}
	
	/**
	* Set skype
	*
	* @param  string skype
	*/
	public function setSkype($skype)
	{
	    $this->skype = $skype;
	    return $this;
	}
	 
	/**
	*Get skype 
	*
	* @return string
	*/
	public function getSkype()
	{
	    return $this->skype;
	}
	
	/**
	* Set facebook
	*
	* @param  string facebook
	*/
	public function setFacebook($facebook)
	{
	    $this->facebook = $facebook;
	    return $this;
	}
	 
	/**
	*Get facebook 
	*
	* @return string
	*/
	public function getFacebook()
	{
	    return $this->facebook;
	}
	

	
	public function serialize()
	{
		return serialize($this->username);
	}
	
	public function unserialize($data)
	{
		$this->username = unserialize($data);
	}
	
}
