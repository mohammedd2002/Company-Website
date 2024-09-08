<?php

namespace App\View\Components;

use App\Models\Company;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrontCompanyComponent extends Component
{
    public $companies;
    public function __construct()
    {
        $this->companies=Company::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-company-component');
    }
}
