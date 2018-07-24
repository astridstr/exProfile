<?php

namespace App;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class Exports implements FromCollection
{
    use Exportable;

    public function collection()
    {
        return Exprofile::all();
    }
}