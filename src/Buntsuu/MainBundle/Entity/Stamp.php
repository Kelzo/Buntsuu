<?php

namespace Buntsuu\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buntsuu\MainBundle\Entity\Stamp
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Buntsuu\MainBundle\Entity\StampRepository")
 */
class Stamp
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    
    /**
     * @ORM\ManyToMany(targetEntity="Buntsuu\MainBundle\Entity\User")
     */
    private $user;
    


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
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}