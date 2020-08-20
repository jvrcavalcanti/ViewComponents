<?php

namespace Accolon\ViewComponents\Components;

use Accolon\ViewComponents\Component;

class Input extends Component
{
    public function render()
    {
        $name = $this->getProp('name');
        $type = $this->getProp('type');
        return <<<TEMPLATE
        <input name="$name" type="$type" />
        TEMPLATE;
    }
}
