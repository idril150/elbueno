<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;

class UserExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        $users = User::all();

        return view('export.usuarios_export', [
            'users' => $users,
        ]);
    }
}

