<?php

namespace App\Row;

class Row implements RowInterface
{
    private int $id;
    private string $name;
    private int $value;
    private float $percentageValue;

    /**
     * @param int $id
     * @param string $name
     * @param int $value
     * @param float $percentageValue
     */
    public function __construct(int $id, string $name, int $value, float $percentageValue = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        if (!$percentageValue) {
            $this->percentageValue = $this->value * 1.1;
        } else {
            $this->percentageValue = $percentageValue;
        }
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    public function getPercentageValue(): float
    {
        return $this->percentageValue;
    }

    public function setPercentageValue(float $percentageValue): void
    {
        $this->percentageValue = $percentageValue;
    }

    public function toCsvLine(): string
    {
        return $this->getId() . ',' . $this->getName() . ',' . $this->getValue() . ',' . $this->getPercentageValue() . PHP_EOL;
    }
}