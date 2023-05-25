<?php

namespace App\Row;

interface RowInterface
{
    public function __construct(int $id, string $name, int $value, float $percentageValue = 0);
    public function setId(int $id);
    public function setName(string $name);
    public function setValue(int $id);
    public function setPercentageValue(float $percentageValue);
    public function getId(): int;
    public function getName(): string;
    public function getValue(): int;
    public function getPercentageValue(): float;
    public function toCsvLine(): string;
}