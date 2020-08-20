<?php

namespace Accolon\ViewComponents\Components;

use Accolon\ViewComponents\Component;

class Input extends Component
{
    public function render()
    {
        $props = $this->propsToString();
        return <<<TEMPLATE
        <input $props />
        TEMPLATE;
    }
}
