<?php

namespace Accolon\ViewComponents\Components;

use Accolon\ViewComponents\Component;

class Button extends Component
{
    public function render()
    {
        $text = $this->getProp('text');
        $props = $this->propsToString(['text']);
        return <<<TEMPLATE
        <button $props>
            $text
        </button>
        TEMPLATE;
    }
}
