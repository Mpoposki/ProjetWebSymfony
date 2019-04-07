<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MusclesRepository")
 */
class Muscles
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $epaules;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bras;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pectoraux;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $abdos;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fessiers;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dorsaux;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jambes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEpaule(): ?int
    {
        return $this->epaule;
    }

    public function setEpaule(?int $epaule): self
    {
        $this->epaule = $epaule;

        return $this;
    }

    public function getBras(): ?int
    {
        return $this->bras;
    }

    public function setBras(?int $bras): self
    {
        $this->bras = $bras;

        return $this;
    }

    public function getPectoraux(): ?int
    {
        return $this->pectoraux;
    }

    public function setPectoraux(?int $pectoraux): self
    {
        $this->pectoraux = $pectoraux;

        return $this;
    }

    public function getAbdos(): ?int
    {
        return $this->abdos;
    }

    public function setAbdos(?int $abdos): self
    {
        $this->abdos = $abdos;

        return $this;
    }

    public function getFessiers(): ?int
    {
        return $this->fessiers;
    }

    public function setFessiers(?int $fessiers): self
    {
        $this->fessiers = $fessiers;

        return $this;
    }

    public function getDorsaux(): ?int
    {
        return $this->dorsaux;
    }

    public function setDorsaux(?int $dorsaux): self
    {
        $this->dorsaux = $dorsaux;

        return $this;
    }

    public function getJambes(): ?int
    {
        return $this->jambes;
    }

    public function setJambes(?int $jambes): self
    {
        $this->jambes = $jambes;

        return $this;
    }
}
