<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;



class User
{
    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';



    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean", length=1)
     */
    private $sex;

    /**
     * @ORM\Column(type="DateTime", length=255)
     */
    private $birth;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $weight;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $height;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $time_worked;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $session;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string $username
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return boolean|null
     */
    public function getSex(): ?bool
    {
        return $this->sex;
    }

    /**
     * @param boolean $sex
     */
    public function setSex($sex): void
    {
         $this->sex = $sex;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirth(): ?\DateTime
    {
        return $this->birth;
    }

    /**
     * @param boolean $birth
     */
    public function setBirth($birth): void
    {
        $this->birth = $birth;
    }

    /**
     * @return integer|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param boolean $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return integer|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param boolean $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return integer|null
     */
    public function getSession(): ?int
    {
        return $this->session;
    }

    /**
     * @param boolean $session
     */
    public function setSession($session): void
    {
        $this->session = $session;
    }


    /**
     * @return \DateTime|null
     */
    public function getCreated(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt(\DateTime $updatedAt): User
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getSalt()
    {
        return null;
    }
    public function eraseCredentials()
    {
    }

    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string $username The username
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername($username)
    {
        // TODO: Implement loadUserByUsername() method.
    }
    /**
     * Refreshes the user for the account interface.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     *
     * @param UserInterface $user
     *
     * @return UserInterface
     *
     * @throws UnsupportedUserException if the account is not supported
     */
    public function refreshUser(UserInterface $user)
    {
        // TODO: Implement refreshUser() method.
    }
    /**
     * Whether this provider supports the given user class.
     *
     * @param string $class
     *
     * @return bool
     */
    public function supportsClass($class)
    {
        // TODO: Implement supportsClass() method.
    }
}
