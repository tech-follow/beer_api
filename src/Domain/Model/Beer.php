<?php

namespace App\Domain\Model;

class Beer
{
    private string $id;
    private \DateTimeImmutable $createdAt;
    private \DateTimeImmutable $updatedAt;

    public function __construct(
        public string $name,
        public float $abvValue = 0.0,
        public float $ibuValue = 0.0,
        public Brewer|null $brewer = null,
        public int|null $importId = null,
    ) {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
