<?php  

namespace Home\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="apply")
 */
class Apply
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
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $reason;

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
    protected $applytime;


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
     * Set name
     *
     * @param string $name
     * @return Apply
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return Apply
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set contactway
     *
     * @param string $contactway
     * @return Apply
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
     * @return Apply
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
     * Set applytime
     *
     * @param integer $applytime
     * @return Apply
     */
    public function setApplytime($applytime)
    {
        $this->applytime = $applytime;

        return $this;
    }

    /**
     * Get applytime
     *
     * @return integer 
     */
    public function getApplytime()
    {
        return $this->applytime;
    }
}
