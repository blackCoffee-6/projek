<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ketUp extends Component
{
    public $ketUp;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ketUp)
    {
        $this->ketUp = $ketUp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ket-up');
    }
}
