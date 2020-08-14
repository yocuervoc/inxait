<?php

namespace App\Exports;

use App\client;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return client::all();
    }
}