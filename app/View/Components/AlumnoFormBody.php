<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Alumno;


class AlumnoFormBody extends Component
{
    private $alumno;
    /**
     * Create a new component instance.
     * @param \App\Models\Alumno $alumno
     * @return void
     */
    public function __construct( $alumno = null)
    {
        if(is_null($alumno))
        {
            $alumno = Alumno::make([]);
        }
        $this->alumno = $alumno;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $params = 
        [
            'alumno' => $this->alumno,

        ];
        return view('components.alumno-form-body', $params);
    }
}
