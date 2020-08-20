<?php

namespace Accolon\ViewComponents\Components;

use Accolon\ViewComponents\Component;

class Form extends Component
{
    public function render()
    {
        return <<<TEMPLATE
        <form>
            $this->children
        </form>
        TEMPLATE;
    }
}
