<?php  

namespace Home\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
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
    protected $username;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $password;

    /**
     * @ManyToOne(targetEntity="Admin\IndexBundle\Entity\Role", inversedBy="user")
     * @JoinColumn(name="roleid", referencedColumnName="id")
     */
    private $role;

    /**
     * @ORM\Column(type="integer")
     */
    protected $points;

    /**
     * @ORM\Column(type="integer")
     */
    protected $isopen;

    /**
     * @ORM\Column(type="integer")
     */
    protected $logintime;

    /**
     * @ORM\Column(type="integer")
     */
    protected $status;
  

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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return User
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set isopen
     *
     * @param integer $isopen
     * @return User
     */
    public function setIsopen($isopen)
    {
        $this->isopen = $isopen;

        return $this;
    }

    /**
     * Get isopen
     *
     * @return integer 
     */
    public function getIsopen()
    {
        return $this->isopen;
    }

    /**
     * Set logintime
     *
     * @param integer $logintime
     * @return User
     */
    public function setLogintime($logintime)
    {
        $this->logintime = $logintime;

        return $this;
    }

    /**
     * Get logintime
     *
     * @return integer 
     */
    public function getLogintime()
    {
        return $this->logintime;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return User
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
     * Set role
     *
     * @param \Admin\IndexBundle\Entity\Role $role
     * @return User
     */
    public function setRole(\Admin\IndexBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \Admin\IndexBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
}
