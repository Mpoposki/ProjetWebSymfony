<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @UniqueEntity(
 *     fields={"email"},
 *     message="L'email que vous avez tapé est déjà utilisé"
 * )
 */
class User implements UserInterface
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
     * @Assert\Length(min="8",minMessage="Votre mot de passe doit etre minimum 8 caractères")
     *
     */
    private $password;
    /**
     * @Assert\EqualTo(propertyPath="password", message="Vous n'avez pas tapé le meme mot de passe")
     */
    public $confirm_password;
    /**
     * @ORM\Column(type="string" , length=255)
     * @Assert\Email()
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
    private $weightObj;

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
    public function getWeightObj(): ?int
    {
        return $this->weightObj;
    }
    /**
     * @param integer $weight
     *
     */
    public function setWeightObj($weight): void
    {
        $this->weightObj = $weight;
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




    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return['ROLE_USER'];
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->name;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}