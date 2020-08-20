<?php

namespace Accolon\ViewComponents\Components;

use Accolon\ViewComponents\Component;

class Img extends Component
{
    public function render()
    {
        $props = $this->propsToString();
        return <<<TEMPLATE
        <img $props />
        TEMPLATE;
    }
}
