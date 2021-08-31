<?php

namespace App\View\Components;

use Illuminate\View\Component;

class rencana extends Component
{
    public $ruRencana;

    public $ruRencana2;
    
    public $riRencana;

    public $stRencana;
    public $stRencana2;

    public $meRencana;
    public $meRencana2;

    public $valRencana;
    public $valRencana2;
    public $valRencana3;
    public $valRencana4;
    public $valRencana5;
    public $valRencana6;
    public $valRencana7;
    public $valRencana8;
    public $valRencana9;
    public $valRencana10;
    public $valRencana11;
    public $valRencana12;
    public $valRencana13;
    public $valRencana14;

    public $trRencana;
    public $trRencana2;
    public $trRencana3;
    public $trRencana4;
    public $trRencana5;
    public $trRencana6;

    public $proRencana;
    public $proRencana2;
    public $proRencana3;

    public $dokRencana;
    public $dokRencana2;
    public $dokRencana3;
    public $dokRencana4;
    public $dokRencana5;
    public $dokRencana6;
    public $dokRencana7;
    public $dokRencana8;
    public $dokRencana9;
    public $dokRencana10;
    
    public $dkRencana;

    public $sisRencana;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $ruRencana, $ruRencana2, $riRencana, 
        $stRencana, $stRencana2,
        $meRencana, $meRencana2,
        $valRencana, $valRencana2, $valRencana3, $valRencana4, $valRencana5,
        $valRencana6, $valRencana7, $valRencana8, $valRencana9, $valRencana10,
        $valRencana11, $valRencana12, $valRencana13, $valRencana14,
        $trRencana, $trRencana2, $trRencana3, $trRencana4, $trRencana5, $trRencana6,
        $proRencana, $proRencana2, $proRencana3,
        $dokRencana, $dokRencana2, $dokRencana3, $dokRencana4, $dokRencana5, $dokRencana6, $dokRencana7, $dokRencana8, $dokRencana9, $dokRencana10,
        $dkRencana, $sisRencana
    )
    {
        $this->ruRencana = $ruRencana;
        $this->ruRencana2 = $ruRencana2;
        
        $this->riRencana = $riRencana;
        
        $this->stRencana = $stRencana;
        $this->stRencana2 = $stRencana2;

        $this->meRencana = $meRencana;
        $this->meRencana2 = $meRencana2;

        $this->alRencana = $valRencana;
        $this->valRencana2 = $valRencana2;
        $this->valRencana3 = $valRencana3;
        $this->valRencana4 = $valRencana4;
        $this->valRencana5 = $valRencana5;
        $this->valRencana6 = $valRencana6;
        $this->valRencana7 = $valRencana7;
        $this->valRencana8 = $valRencana8;
        $this->valRencana9 = $valRencana9;
        $this->valRencana10 = $valRencana10;
        $this->valRencana11 = $valRencana11;
        $this->valRencana12 = $valRencana12;
        $this->valRencana13 = $valRencana13;
        $this->valRencana14 = $valRencana14;

        $this->trRencana = $trRencana;
        $this->trRencana2 = $trRencana2;
        $this->trRencana3 = $trRencana3;
        $this->trRencana4 = $trRencana4;
        $this->trRencana5 = $trRencana5;
        $this->trRencana6 = $trRencana6;

        $this->proRencana = $proRencana;
        $this->proRencana2 = $proRencana2;
        $this->proRencana3 = $proRencana3;

        $this->dokRencana = $dokRencana;
        $this->dokRencana2 = $dokRencana2;
        $this->dokRencana3 = $dokRencana3;
        $this->dokRencana4 = $dokRencana4;
        $this->dokRencana5 = $dokRencana5;
        $this->dokRencana6 = $dokRencana6;
        $this->dokRencana7 = $dokRencana7;
        $this->dokRencana8 = $dokRencana8;
        $this->dokRencana9 = $dokRencana9;
        $this->dokRencana10 = $dokRencana10;
        
        $this->dkRencana = $dkRencana;

        $this->sisRencana = $sisRencana;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rencana');
    }
}
