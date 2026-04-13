<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class NavbarCell extends Cell
{
    public function show()
    {
        return view('Components/navbar');
    }
}
