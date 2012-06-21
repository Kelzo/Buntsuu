<?php

namespace Buntsuu\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buntsuu\MainBundle\Entity\Notification
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Buntsuu\MainBundle\Entity\NotificationRepository")
 */
class Notification
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var datetime $datetime
     *
     * @ORM\Column(name="datetime", type="datetime")
     */
    private $datetime;
    
    /**
     * @ORM\ManyToOne(targetEntity="Buntsuu\MainBundle\Entity\Type")
     */
    private $type;
    
    /**
     * @ORM\OneToOne(targetEntity="Buntsuu\MainBundle\Entity\User")
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set datetime
     *
     * @param datetime $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }

    /**
     * Get datetime
     *
     * @return datetime 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }
}