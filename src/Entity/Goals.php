<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 10/03/2019
 * Time: 22:45
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GoalsRepository")
 */

class Goals
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="DateTime", length=255)
     */
    private $deadLine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $weight_purpose;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $frequency;




    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return \DateTime|null
     */
    public function getDeadLine(): ?\DateTime
    {
        return $this->deadLine;
    }

    /**
     * @param \DateTime $deadLine
     * @return Goals
     */
    public function setDeadline(\DateTime $deadLine): self
    {
        $this->deadLine = $deadLine;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Goals
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }




    /**
     * @return integer|null
     */
    public function getWeightPurpose(): ?int
    {
        return $this->weight_purpose;
    }

    /**
     * @param integer $weight_purpose
     * @return Goals
     */
    public function setWeightPurpose(int $weight_purpose): self
    {
        $this->weight_purpose = $weight_purpose;

        return $this;
    }



    /**
     * @return integer|null
     */
    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    /**
     * @param integer $frequency
     * @return Goals
     */
    public function setFrequency(int $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
    }


}