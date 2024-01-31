<?php

namespace ebitkov\DoctrineApiDriver\Tests\Fixtures\API\Mailjet;


use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Contact
{
    #[ORM\Column]
    private ?bool $isExcludedFromCampaign = null;

    #[ORM\Column]
    private ?string $name = null;

    #[ORM\Column]
    private ?DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?int $deliveredCount = null;

    #[ORM\Column]
    private ?string $email = null;

    #[ORM\Column]
    private ?DateTimeImmutable $exclusionFromCampaignsUpdatedAt = null;

    #[ORM\Id()]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $isOptInPending = null;

    #[ORM\Column]
    private ?bool $isSpamComplaining = null;

    #[ORM\Column]
    private ?DateTimeImmutable $lastActivityAt = null;

    #[ORM\Column]
    private ?DateTimeImmutable $lasUpdateAt = null;


    ### METHODS ###

    public function getIsExcludedFromCampaign(): ?bool
    {
        return $this->isExcludedFromCampaign;
    }

    public function setIsExcludedFromCampaign(?bool $isExcludedFromCampaign): self
    {
        $this->isExcludedFromCampaign = $isExcludedFromCampaign;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getDeliveredCount(): ?int
    {
        return $this->deliveredCount;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getExclusionFromCampaignsUpdatedAt(): ?DateTimeImmutable
    {
        return $this->exclusionFromCampaignsUpdatedAt;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsOptInPending(): ?bool
    {
        return $this->isOptInPending;
    }

    public function getIsSpamComplaining(): ?bool
    {
        return $this->isSpamComplaining;
    }

    public function getLastActivityAt(): ?DateTimeImmutable
    {
        return $this->lastActivityAt;
    }

    public function getLasUpdateAt(): ?DateTimeImmutable
    {
        return $this->lasUpdateAt;
    }
}
