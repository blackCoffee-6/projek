<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tlp extends Component
{
    public $ruTlp;

    public $ruTlp2;
    public $ruInput2;
    
    public $riTlp;

    public $stTlp;
    public $stTlp2;

    public $meTlp;
    public $meTlp2;

    public $valTlp;
    public $valTlp2;
    public $valTlp3;
    public $valTlp4;
    public $valTlp5;
    public $valTlp6;
    public $valTlp7;
    public $valTlp8;
    public $valTlp9;
    public $valTlp10;
    public $valTlp11;
    public $valTlp12;
    public $valTlp13;
    public $valTlp14;

    public $trTlp;
    public $trTlp2;
    public $trTlp3;
    public $trTlp4;
    public $trTlp5;
    public $trTlp6;

    public $proTlp;
    public $proTlp2;
    public $proTlp3;

    public $dokTlp;
    public $dokTlp2;
    public $dokTlp3;
    public $dokTlp4;
    public $dokTlp5;
    public $dokTlp6;
    public $dokTlp7;
    public $dokTlp8;
    public $dokTlp9;
    public $dokTlp10;
    
    public $dkTlp;

    public $sisTlp;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $ruTlp, $ruTlp2, $ruInput2, $riTlp, 
        $stTlp, $stTlp2,
        $meTlp, $meTlp2,
        $valTlp, $valTlp2, $valTlp3, $valTlp4, $valTlp5,
        $valTlp6, $valTlp7, $valTlp8, $valTlp9, $valTlp10,
        $valTlp11, $valTlp12, $valTlp13, $valTlp14,
        $trTlp, $trTlp2, $trTlp3, $trTlp4, $trTlp5, $trTlp6,
        $proTlp, $proTlp2, $proTlp3,
        $dokTlp, $dokTlp2, $dokTlp3, $dokTlp4, $dokTlp5, $dokTlp6, $dokTlp7, $dokTlp8, $dokTlp9, $dokTlp10,
        $dkTlp, $sisTlp
    )
    {
        $this->ruTlp = $ruTlp;
        $this->ruTlp2 = $ruTlp2;
        $this->ruInput2 = $ruInput2;
        
        $this->riTlp = $riTlp;
        
        $this->stTlp = $stTlp;
        $this->stTlp2 = $stTlp2;

        $this->meTlp = $meTlp;
        $this->meTlp2 = $meTlp2;

        $this->alTlp = $valTlp;
        $this->valTlp2 = $valTlp2;
        $this->valTlp3 = $valTlp3;
        $this->valTlp4 = $valTlp4;
        $this->valTlp5 = $valTlp5;
        $this->valTlp6 = $valTlp6;
        $this->valTlp7 = $valTlp7;
        $this->valTlp8 = $valTlp8;
        $this->valTlp9 = $valTlp9;
        $this->valTlp10 = $valTlp10;
        $this->valTlp11 = $valTlp11;
        $this->valTlp12 = $valTlp12;
        $this->valTlp13 = $valTlp13;
        $this->valTlp14 = $valTlp14;

        $this->trTlp = $trTlp;
        $this->trTlp2 = $trTlp2;
        $this->trTlp3 = $trTlp3;
        $this->trTlp4 = $trTlp4;
        $this->trTlp5 = $trTlp5;
        $this->trTlp6 = $trTlp6;

        $this->proTlp = $proTlp;
        $this->proTlp2 = $proTlp2;
        $this->proTlp3 = $proTlp3;

        $this->dokTlp = $dokTlp;
        $this->dokTlp2 = $dokTlp2;
        $this->dokTlp3 = $dokTlp3;
        $this->dokTlp4 = $dokTlp4;
        $this->dokTlp5 = $dokTlp5;
        $this->dokTlp6 = $dokTlp6;
        $this->dokTlp7 = $dokTlp7;
        $this->dokTlp8 = $dokTlp8;
        $this->dokTlp9 = $dokTlp9;
        $this->dokTlp10 = $dokTlp10;
        
        $this->dkTlp = $dkTlp;

        $this->sisTlp = $sisTlp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tlp');
    }
}
