<?php

function createElement(string $class, array $props = [], $children = "")
{
    $component = new $class($props, $children);
    return $component->render();
}

function render(string $class, array $props = [])
{
    $component = new $class($props);
    echo $component->render();
}
