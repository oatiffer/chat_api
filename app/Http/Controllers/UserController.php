<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoggedUserResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(): array
    {
        return [
            'logged_user' => new LoggedUserResource(Auth::user()),
            'contacts' => UserResource::collection(User::where('id', '!=', Auth::id())->get()->load('tokens'))
        ];
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
       //
    }

    public function destroy($id)
    {
        //
    }
}
