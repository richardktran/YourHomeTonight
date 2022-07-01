<?php

namespace App\Request\Room;

use App\Request\BaseRequest;
use App\Traits\DateTimeTraits;
use Symfony\Component\Validator\Constraints as Assert;

class ListRoomRequest extends BaseRequest
{
    use DateTimeTraits;

    public const ORDER_BY_LIST = ['asc', 'desc'];
    public const DEFAULT_SORT_BY = 'price';
    public const DEFAULT_ORDER = 'asc';
    public const DEFAULT_LIMIT = 10;
    public const DEFAULT_OFFSET = 0;

    #[Assert\Type('string')]
    private $type = null;

    #[Assert\Type('numeric')]
    private $beds = null;

    #[Assert\Type('string')]
    private $sortBy = self::DEFAULT_SORT_BY;

    #[Assert\Choice(
        choices: self::ORDER_BY_LIST,
    )]
    #[Assert\Type('string')]
    private $order = self::DEFAULT_ORDER;

    #[Assert\Type('integer')]
    private int $limit = self::DEFAULT_LIMIT;

    #[Assert\Type('integer')]
    private int $offset = self::DEFAULT_OFFSET;

    #[Assert\Type('numeric')]
    private ?float $maxPrice = null;

    #[Assert\Type('numeric')]
    private ?float $minPrice = null;

    #[Assert\Type('numeric')]
    private ?int $checkIn = null;

    #[Assert\Type('numeric')]
    private ?int $checkOut = null;

    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return null
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * @param null $beds
     */
    public function setBeds($beds): void
    {
        $this->beds = $beds;
    }

    public function getSortBy(): string
    {
        return $this->sortBy;
    }

    public function setSortBy(string $sortBy): void
    {
        $this->sortBy = $sortBy;
    }

    public function getOrder(): string
    {
        return $this->order;
    }

    public function setOrder(string $order): void
    {
        $this->order = $order;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    public function getMaxPrice(): ?float
    {
        return $this->maxPrice;
    }

    public function setMaxPrice(?float $maxPrice): void
    {
        $this->maxPrice = $maxPrice;
    }

    public function getMinPrice(): ?float
    {
        return $this->minPrice;
    }

    public function setMinPrice(?float $minPrice): void
    {
        $this->minPrice = $minPrice;
    }

    public function getCheckIn(): ?string
    {
        return $this->timestampToDateTime($this->checkIn);
    }

    public function setCheckIn(?int $checkIn): void
    {
        $this->checkIn = $checkIn;
    }

    public function getCheckOut(): ?string
    {
        return $this->timestampToDateTime($this->checkOut);
    }

    public function setCheckOut(?int $checkOut): void
    {
        $this->checkOut = $checkOut;
    }
}