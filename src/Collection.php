<?php
namespace App;

class Collection
{
    protected $items;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function isEmpty()
    {
        return count($this->items) === 0;
    }

    public function first()
    {
        if ($this->isEmpty()) {
            return false;
        }
        return $this->items[0];
    }

    public function last()
    {
        if ($this->isEmpty()) {
            return false;
        }
        return end($this->items);
    }
}
