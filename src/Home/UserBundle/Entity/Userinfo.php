<?php  

namespace Home\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\Table(name="userinfo")
 */
class Userinfo
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @OneToOne(targetEntity="User",inversedBy="userinfo")
     * @JoinColumn(name="userid",referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $truename;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sex;

    /**
     * @ORM\Column(type="integer")
     */
    protected $age;

    /**
     * @ORM\Column(type="string", length=1024)
     */
    protected $motto;

    /**
     * @ORM\Column(type="text")
     */
    protected $introduce;

    /**
     * @ORM\Column(type="string", length=1024)
     */
    protected $pic;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $email;

    /**
     * @ORM\Column(type="text")
     */
    protected $other;   
  

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
     * Set truename
     *
     * @param string $truename
     * @return Userinfo
     */
    public function setTruename($truename)
    {
        $this->truename = $truename;

        return $this;
    }

    /**
     * Get truename
     *
     * @return string 
     */
    public function getTruename()
    {
        return $this->truename;
    }

    /**
     * Set sex
     *
     * @param integer $sex
     * @return Userinfo
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return integer 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Userinfo
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set motto
     *
     * @param string $motto
     * @return Userinfo
     */
    public function setMotto($motto)
    {
        $this->motto = $motto;

        return $this;
    }

    /**
     * Get motto
     *
     * @return string 
     */
    public function getMotto()
    {
        return $this->motto;
    }

    /**
     * Set introduce
     *
     * @param string $introduce
     * @return Userinfo
     */
    public function setIntroduce($introduce)
    {
        $this->introduce = $introduce;

        return $this;
    }

    /**
     * Get introduce
     *
     * @return string 
     */
    public function getIntroduce()
    {
        return $this->introduce;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return Userinfo
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Userinfo
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Userinfo
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set other
     *
     * @param string $other
     * @return Userinfo
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Get other
     *
     * @return string 
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Set user
     *
     * @param \Home\UserBundle\Entity\User $user
     * @return Userinfo
     */
    public function setUser(\Home\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Home\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
