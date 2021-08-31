<?php

namespace App\View\Components;

use Illuminate\View\Component;

class realisasi extends Component
{
    public $ruRealisasi;
    public $ruRealisasi2;
    
    public $riRealisasi;

    public $stRealisasi;
    public $stRealisasi2;

    public $meRealisasi;
    public $meRealisasi2;

    public $valRealisasi;
    public $valRealisasi2;
    public $valRealisasi3;
    public $valRealisasi4;
    public $valRealisasi5;
    public $valRealisasi6;
    public $valRealisasi7;
    public $valRealisasi8;
    public $valRealisasi9;
    public $valRealisasi10;
    public $valRealisasi11;
    public $valRealisasi12;
    public $valRealisasi13;
    public $valRealisasi14;

    public $trRealisasi;
    public $trRealisasi2;
    public $trRealisasi3;
    public $trRealisasi4;
    public $trRealisasi5;
    public $trRealisasi6;

    public $proRealisasi;
    public $proRealisasi2;
    public $proRealisasi3;

    public $dokRealisasi;
    public $dokRealisasi2;
    public $dokRealisasi3;
    public $dokRealisasi4;
    public $dokRealisasi5;
    public $dokRealisasi6;
    public $dokRealisasi7;
    public $dokRealisasi8;
    public $dokRealisasi9;
    public $dokRealisasi10;
    
    public $dkRealisasi;

    public $sisRealisasi;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $ruRealisasi, $ruRealisasi2, $riRealisasi, 
        $stRealisasi, $stRealisasi2,
        $meRealisasi, $meRealisasi2,
        $valRealisasi, $valRealisasi2, $valRealisasi3, $valRealisasi4, $valRealisasi5,
        $valRealisasi6, $valRealisasi7, $valRealisasi8, $valRealisasi9, $valRealisasi10,
        $valRealisasi11, $valRealisasi12, $valRealisasi13, $valRealisasi14,
        $trRealisasi, $trRealisasi2, $trRealisasi3, $trRealisasi4, $trRealisasi5, $trRealisasi6,
        $proRealisasi, $proRealisasi2, $proRealisasi3,
        $dokRealisasi, $dokRealisasi2, $dokRealisasi3, $dokRealisasi4, $dokRealisasi5, $dokRealisasi6, $dokRealisasi7, $dokRealisasi8, $dokRealisasi9, $dokRealisasi10,
        $dkRealisasi, $sisRealisasi
    )
    {
        $this->ruRealisasi = $ruRealisasi;
        $this->ruRealisasi2 = $ruRealisasi2;
        
        $this->riRealisasi = $riRealisasi;
        
        $this->stRealisasi = $stRealisasi;
        $this->stRealisasi2 = $stRealisasi2;

        $this->meRealisasi = $meRealisasi;
        $this->meRealisasi2 = $meRealisasi2;

        $this->alRealisasi = $valRealisasi;
        $this->valRealisasi2 = $valRealisasi2;
        $this->valRealisasi3 = $valRealisasi3;
        $this->valRealisasi4 = $valRealisasi4;
        $this->valRealisasi5 = $valRealisasi5;
        $this->valRealisasi6 = $valRealisasi6;
        $this->valRealisasi7 = $valRealisasi7;
        $this->valRealisasi8 = $valRealisasi8;
        $this->valRealisasi9 = $valRealisasi9;
        $this->valRealisasi10 = $valRealisasi10;
        $this->valRealisasi11 = $valRealisasi11;
        $this->valRealisasi12 = $valRealisasi12;
        $this->valRealisasi13 = $valRealisasi13;
        $this->valRealisasi14 = $valRealisasi14;

        $this->trRealisasi = $trRealisasi;
        $this->trRealisasi2 = $trRealisasi2;
        $this->trRealisasi3 = $trRealisasi3;
        $this->trRealisasi4 = $trRealisasi4;
        $this->trRealisasi5 = $trRealisasi5;
        $this->trRealisasi6 = $trRealisasi6;

        $this->proRealisasi = $proRealisasi;
        $this->proRealisasi2 = $proRealisasi2;
        $this->proRealisasi3 = $proRealisasi3;

        $this->dokRealisasi = $dokRealisasi;
        $this->dokRealisasi2 = $dokRealisasi2;
        $this->dokRealisasi3 = $dokRealisasi3;
        $this->dokRealisasi4 = $dokRealisasi4;
        $this->dokRealisasi5 = $dokRealisasi5;
        $this->dokRealisasi6 = $dokRealisasi6;
        $this->dokRealisasi7 = $dokRealisasi7;
        $this->dokRealisasi8 = $dokRealisasi8;
        $this->dokRealisasi9 = $dokRealisasi9;
        $this->dokRealisasi10 = $dokRealisasi10;
        
        $this->dkRealisasi = $dkRealisasi;

        $this->sisRealisasi = $sisRealisasi;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.realisasi');
    }
}
