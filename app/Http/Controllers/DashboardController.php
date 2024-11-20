<?php

namespace App\Http\Controllers;

use App\Models\BalanceOfUser;
use App\Models\Operation;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $balance = $user->balance ? $user->balance->balance : 0;
        $recentTransactions = $user->operations()->orderBy('operation_date', 'desc')->take(5)->get();

        return view('dashboard.index', compact('balance', 'recentTransactions'));
    }

    public function history()
    {
        $operations = Auth::user()
            ->operations()
            ->orderBy('operation_date', 'desc')
            ->paginate(10);

        return view('history.history', compact('operations'));
    }
}

