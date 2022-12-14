<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Image extends Component
{
    public $src;
    public $alt;
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src, $alt = null, $class = null)
    {
        $this->src = $src;
        $this->alt = is_null($alt) ? $src : $alt;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.image');
    }
}
