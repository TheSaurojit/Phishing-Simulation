<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Excel;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}