<?php

namespace Accolon\ViewComponents\Components;

use Accolon\ViewComponents\Component;

class Button extends Component
{
    public function render()
    {
        $text = $this->getProp('text');
        $type = $this->getProp('type');
        return <<<TEMPLATE
        <div>
            <button type="$type">
                $text
            </button>
        </div>
        TEMPLATE;
    }
}
