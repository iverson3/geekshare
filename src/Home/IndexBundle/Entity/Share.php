<?php  

namespace Home\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

/**
 * @ORM\Entity(repositoryClass="ShareRepository")
 * @ORM\Table(name="share")
 */
class Share
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
    protected $url;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $reason;

    /**
     * @ManyToOne(targetEntity="Lang",inversedBy="share")
     * @JoinColumn(name="langid",referencedColumnName="id")
     */
    private $lang;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $labels;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Choice({0, 1})
     */
    protected $isown;

    /**
     * @ORM\Column(type="integer")
     */
    protected $hit;

    /**
     * @ManyToOne(targetEntity="Home\UserBundle\Entity\User",inversedBy="share")
     * @JoinColumn(name="userid",referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Choice({0, 1, 2})
     */
    protected $status;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sharetime;

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
     * Set url
     *
     * @param string $url
     * @return Share
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Share
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
     * Set reason
     *
     * @param string $reason
     * @return Share
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
     * Set labels
     *
     * @param string $labels
     * @return Share
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get labels
     *
     * @return string 
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set isown
     *
     * @param integer $isown
     * @return Share
     */
    public function setIsown($isown)
    {
        $this->isown = $isown;

        return $this;
    }

    /**
     * Get isown
     *
     * @return integer 
     */
    public function getIsown()
    {
        return $this->isown;
    }

    /**
     * Set hit
     *
     * @param integer $hit
     * @return Share
     */
    public function setHit($hit)
    {
        $this->hit = $hit;

        return $this;
    }

    /**
     * Get hit
     *
     * @return integer 
     */
    public function getHit()
    {
        return $this->hit;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Share
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
     * Set sharetime
     *
     * @param integer $sharetime
     * @return Share
     */
    public function setSharetime($sharetime)
    {
        $this->sharetime = $sharetime;

        return $this;
    }

    /**
     * Get sharetime
     *
     * @return integer 
     */
    public function getSharetime()
    {
        return $this->sharetime;
    }


    /**
     * Set lang
     *
     * @param \Home\IndexBundle\Entity\Lang $lang
     * @return Share
     */
    public function setLang(\Home\IndexBundle\Entity\Lang $lang = null)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return \Home\IndexBundle\Entity\Lang 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set user
     *
     * @param \Home\UserBundle\Entity\User $user
     * @return Share
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
