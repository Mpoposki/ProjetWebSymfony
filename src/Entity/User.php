<?php


namespace App\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     *
     */
    private $name;

    /**
     * @ORM\Column(name="lastname",type="string" , length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean",length=1)
     */
    private $sex;

    /**
     * @ORM\Column(type="datetime" , length=255)
     */
    private $birth;
    /**
     * @ORM\Column(type="integer" , length=255)
     */
    private $weight;
    /**
     * @ORM\Column(type="integer" , length=255)
     */
    private $height;
    /**
     *
     * @ORM\Column(type="integer" , length=255)
     */
    private $time_worked;

    /**
     * @ORM\Column(type="integer" , length=255)
     */
    private $session;

    /**
     * @var \DateTime
     * @ORM\Column(name="createdAt" , type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @ORM\Column(name="updateAt" , type="datetime")
     */
    private $updateAt;


    /**
     * @return integer
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword($password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSex(): ?bool
    {
        return $this->sex;
    }

    /**
     * @param boolean $sex
     * @return User
     */
    public function setSex($sex): self
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirth(): ?\DateTime
    {
        return $this->birth;
    }

    /**
     * @param boolean $birth
     * @return User
     */
    public function setBirth($birth): self
    {
        $this->birth = $birth;
        return $this;
    }

    /**
     * @return integer
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param integer $weight
     *
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return integer
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param integer $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getTimeWorked()
    {
        return $this->time_worked;
    }

    /**
     * @param mixed $time_worked
     */
    public function setTimeWorked($time_worked): void
    {
        $this->time_worked = $time_worked;
    }

    /**
     * @return integer
     */
    public function getSession(): ?int
    {
        return $this->session;
    }

    /**
     * @param integer $session
     */
    public function setSession($session): void
    {
        $this->session = $session;

    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateAt(): \DateTime
    {
        return $this->updateAt;
    }

    /**
     * @param \DateTime $updateAt
     *@return User
     */
    public function setUpdateAt(\DateTime $updateAt): User
    {
        $this->updateAt = $updateAt;
        return $this;
    }


}