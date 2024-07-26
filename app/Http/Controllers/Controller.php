<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
{
    // Filtrer les utilisateurs avec le rôle 'client'
    $clients = User::where('role', 'user')->get();
    return view('admin.clients.index', compact('clients'));
}

}
