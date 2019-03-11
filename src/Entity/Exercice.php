<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 10/03/2019
 * Time: 22:57
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ExerciceRepository")
 */

class Exercice
{
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
     * @ORM\Column(type="string", length=255)
     */
    private $gif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;


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
     * @return Exercice
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGif(): ?string
    {
        return $this->gif;
    }

    /**
     * @param string $gif
     * @return Exercice
     */
    public function setGif(string $gif): self
    {
        $this->gif = $gif;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Exercice
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

}