<?php

declare(strict_types=1);

namespace MaxStack;

final class MaxStack
{
    /** @var list<array{value: int, max: int}> */
    private array $items = [];

    public function push(int $value): void
    {
        $currentMax = $this->items === []
            ? $value
            : max($value, $this->items[array_key_last($this->items)]['max']);

        $this->items[] = [
            'value' => $value,
            'max' => $currentMax,
        ];
    }

    public function pop(): int
    {
        if ($this->items === []) {
            throw new \UnderflowException('Cannot pop from an empty stack.');
        }

        return array_pop($this->items)['value'];
    }

    public function max(): int
    {
        if ($this->items === []) {
            throw new \UnderflowException('Cannot read max from an empty stack.');
        }

        return $this->items[array_key_last($this->items)]['max'];
    }
}
