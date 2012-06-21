<?php

namespace Buntsuu\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Buntsuu\MainBundle\Entity\Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Buntsuu\MainBundle\Entity\MessageRepository")
 * 
 */
class Message
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
     * @var string $message
     *
     * @ORM\Column(name="message", type="string", length=80)
     */
    private $message;

    /**
     * @var datetime $datetime
     *
     * @ORM\Column(name="datetime", type="datetime")
     */
    private $datetime;
    
 
    /**
     * @ORM\ManyToOne(targetEntity="Buntsuu\MainBundle\Entity\User")
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity="Buntsuu\MainBundle\Entity\User")
     */
    private $target;

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
     * Set message
     *
     * @param text $message
     */
    public function setMessage($message)
    {
    	$message = substr($message,0,80);
        $this->message = $message;
    }

    /**
     * Get message
     *
     * @return text 
     */
    public function getMessage()
    {
        return $this->message;
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
    
    public function getAuthor()
    {
    	return $this->author;
    }

    public function addAuthor(\Buntsuu\MainBundle\Entity\User $author)
    {
    	$this->author = $author;
    }
    
    public function getTarget()
    {
    	return $this->target;
    }
    
    public function addTarget(\Buntsuu\MainBundle\Entity\User $target)
    {
    	$this->target = $target;
    }
}