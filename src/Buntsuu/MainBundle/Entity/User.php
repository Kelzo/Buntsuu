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
	 * @ORM\Column(name="username", type="string", length=20)
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

}
