<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 10/03/2019
 * Time: 23:03
 */

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
     * @ORM\Column(type="array", length=255)
     */
    private $training;



    public function getId(): ?int
    {
        return $this->id;
    }



    /**
     * @return array|null
     */
    public function getTraining(): ?array
    {
        return $this->training;
    }

    /**
     * @param array $training
     * @return Training
     */
    public function setTraining(array $training): self
    {
        $this->training = $training;

        return $this;
    }
}