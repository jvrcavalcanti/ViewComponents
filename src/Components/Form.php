<?php

namespace Accolon\ViewComponents\Components;

use Accolon\ViewComponents\Component;

class Form extends Component
{
    public function render()
    {
        $children = (string) $this->children;
        return <<<TEMPLATE
        <form>
            $children
        </form>
        TEMPLATE;
    }
}
