<?php

namespace App\Request\Hotel;

use App\Request\BaseRequest;
use Symfony\Component\Validator\Constraints as Assert;

class ListHotelRequest extends BaseRequest
{
    public const ORDER_BY_LIST = ['asc', 'desc'];
    public const DEFAULT_SORT_BY = 'price';
    public const DEFAULT_ORDER = 'asc';
    public const DEFAULT_LIMIT = 10;
    public const DEFAULT_OFFSET = 0;

    #[Assert\Type('string')]
    private $city = null;

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

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
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
}