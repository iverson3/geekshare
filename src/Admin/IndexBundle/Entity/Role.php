<?php  

namespace Admin\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="role")
 */
class Role
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $remark;

    /**
     * @ORM\Column(type="string", length=1024)
     */
    protected $rolefield;
  

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
     * @return Role
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
     * Set remark
     *
     * @param string $remark
     * @return Role
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string 
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set rolefield
     *
     * @param string $rolefield
     * @return Role
     */
    public function setRolefield($rolefield)
    {
        $this->rolefield = $rolefield;

        return $this;
    }

    /**
     * Get rolefield
     *
     * @return string 
     */
    public function getRolefield()
    {
        return $this->rolefield;
    }
}
