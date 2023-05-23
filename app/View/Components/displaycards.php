<?php

namespace App\View\Components;

use Illuminate\View\Component;

class displaycards extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $price;
    public $demo;
    public function __construct($title=null,$price,$demo=0)
    {
        $this->title=$title;$this->price=$price;
        $this->demo=$demo;
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.displaycards');
    }
}
