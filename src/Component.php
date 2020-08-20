<?php

namespace Accolon\ViewComponents;

abstract class Component
{
    protected array $props;
    protected $children;

    abstract public function render();

    public static function factory(array $props = [], $children = "")
    {
        return new static($props, $children);
    }

    public function __construct(array $props = [], $children = "")
    {
        $this->props = $props;
        $this->children = $children;
    }

    public function getProp(string $name)
    {
        return $this->props[$name] ?? "";
    }

    public function __set(string $name, $value)
    {
        $this->props[$name] = $value;
    }

    public function __toString()
    {
        return $this->render();
    }
}
