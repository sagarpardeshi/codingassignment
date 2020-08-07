<?php

namespace App\Entity;

use App\Repository\PlatformRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlatformRepository::class)
 */
class Platform
{

    public function __toString() {
        return $this->name;
    }

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
     * @ORM\ManyToOne(targetEntity=Provider::class, inversedBy="platform")
     * @ORM\JoinColumn(nullable=false)
     */
    private $provider;

    /**
     * @ORM\OneToOne(targetEntity=Bundle::class, mappedBy="platform", cascade={"persist", "remove"})
     */
    private $bundle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getProvider(): ?Provider
    {
        return $this->provider;
    }

    public function setProvider(?Provider $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    public function getBundle(): ?Bundle
    {
        return $this->bundle;
    }

    public function setBundle(Bundle $bundle): self
    {
        $this->bundle = $bundle;

        // set the owning side of the relation if necessary
        if ($bundle->getPlatform() !== $this) {
            $bundle->setPlatform($this);
        }

        return $this;
    }
}
