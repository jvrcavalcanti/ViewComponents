<?php

namespace Accolon\ViewComponents\Components;

use Accolon\ViewComponents\Component;

class Label extends Component
{
    public function render()
    {
        $props = $this->propsToString(['text']);
        return <<<TEMPLATE
        <label $props>
            $this->children
        </label>
        TEMPLATE;
    }
}
