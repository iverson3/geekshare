<?php  

namespace Home\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="advice")
 */
class Advice
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $contactman;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $contactway;

    /**
     * @ORM\Column(type="integer")
     */
    protected $status;

    /**
     * @ORM\Column(type="integer")
     */
    protected $advicetime;


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
     * @return Advice
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     * Set content
     *
     * @param string $content
     * @return Advice
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set contactman
     *
     * @param string $contactman
     * @return Advice
     */
    public function setContactman($contactman)
    {
        $this->contactman = $contactman;

        return $this;
    }

    /**
     * Get contactman
     *
     * @return string 
     */
    public function getContactman()
    {
        return $this->contactman;
    }

    /**
     * Set contactway
     *
     * @param string $contactway
     * @return Advice
     */
    public function setContactway($contactway)
    {
        $this->contactway = $contactway;

        return $this;
    }

    /**
     * Get contactway
     *
     * @return string 
     */
    public function getContactway()
    {
        return $this->contactway;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Advice
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set advicetime
     *
     * @param integer $advicetime
     * @return Advice
     */
    public function setAdvicetime($advicetime)
    {
        $this->advicetime = $advicetime;

        return $this;
    }

    /**
     * Get advicetime
     *
     * @return integer 
     */
    public function getAdvicetime()
    {
        return $this->advicetime;
    }
}
