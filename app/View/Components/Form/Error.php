<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Error extends Component
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(): View|Closure|string
    {
        return view('components.form.error');
    }
}
