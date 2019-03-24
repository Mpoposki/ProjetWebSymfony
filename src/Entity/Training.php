<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingRepository")
 */
class Training
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $training = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTraining(): ?array
    {
        return $this->training;
    }

    public function setTraining(array $training): self
    {
        $this->training = $training;

        return $this;
    }
}
