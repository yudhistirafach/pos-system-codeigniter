<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class SidebarCell extends Cell
{
    public function show() 
    {
        return view('Components/sidebar');
    }
}
