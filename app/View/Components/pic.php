<?php

namespace App\View\Components;

use Illuminate\View\Component;

class pic extends Component
{
    public $ruPic;
    public $ruPic2;
    
    public $riPic;

    public $stPic;
    public $stPic2;

    public $mePic;
    public $mePic2;

    public $valPic;
    public $valPic2;
    public $valPic3;
    public $valPic4;
    public $valPic5;
    public $valPic6;
    public $valPic7;
    public $valPic8;
    public $valPic9;
    public $valPic10;
    public $valPic11;
    public $valPic12;
    public $valPic13;
    public $valPic14;

    public $trPic;
    public $trPic2;
    public $trPic3;
    public $trPic4;
    public $trPic5;
    public $trPic6;

    public $proPic;
    public $proPic2;
    public $proPic3;

    public $dokPic;
    public $dokPic2;
    public $dokPic3;
    public $dokPic4;
    public $dokPic5;
    public $dokPic6;
    public $dokPic7;
    public $dokPic8;
    public $dokPic9;
    public $dokPic10;
    
    public $dkPic;

    public $sisPic;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $ruPic, $ruPic2, $riPic, 
        $stPic, $stPic2,
        $mePic, $mePic2,
        $valPic, $valPic2, $valPic3, $valPic4, $valPic5,
        $valPic6, $valPic7, $valPic8, $valPic9, $valPic10,
        $valPic11, $valPic12, $valPic13, $valPic14,
        $trPic, $trPic2, $trPic3, $trPic4, $trPic5, $trPic6,
        $proPic, $proPic2, $proPic3,
        $dokPic, $dokPic2, $dokPic3, $dokPic4, $dokPic5, $dokPic6, $dokPic7, $dokPic8, $dokPic9, $dokPic10,
        $dkPic, $sisPic
    )
    {
        $this->ruPic = $ruPic;
        $this->ruPic2 = $ruPic2;
        
        $this->riPic = $riPic;
        
        $this->stPic = $stPic;
        $this->stPic2 = $stPic2;

        $this->mePic = $mePic;
        $this->mePic2 = $mePic2;

        $this->alPic = $valPic;
        $this->valPic2 = $valPic2;
        $this->valPic3 = $valPic3;
        $this->valPic4 = $valPic4;
        $this->valPic5 = $valPic5;
        $this->valPic6 = $valPic6;
        $this->valPic7 = $valPic7;
        $this->valPic8 = $valPic8;
        $this->valPic9 = $valPic9;
        $this->valPic10 = $valPic10;
        $this->valPic11 = $valPic11;
        $this->valPic12 = $valPic12;
        $this->valPic13 = $valPic13;
        $this->valPic14 = $valPic14;

        $this->trPic = $trPic;
        $this->trPic2 = $trPic2;
        $this->trPic3 = $trPic3;
        $this->trPic4 = $trPic4;
        $this->trPic5 = $trPic5;
        $this->trPic6 = $trPic6;

        $this->proPic = $proPic;
        $this->proPic2 = $proPic2;
        $this->proPic3 = $proPic3;

        $this->dokPic = $dokPic;
        $this->dokPic2 = $dokPic2;
        $this->dokPic3 = $dokPic3;
        $this->dokPic4 = $dokPic4;
        $this->dokPic5 = $dokPic5;
        $this->dokPic6 = $dokPic6;
        $this->dokPic7 = $dokPic7;
        $this->dokPic8 = $dokPic8;
        $this->dokPic9 = $dokPic9;
        $this->dokPic10 = $dokPic10;
        
        $this->dkPic = $dkPic;

        $this->sisPic = $sisPic;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pic');
    }
}
