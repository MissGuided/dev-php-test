<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * @param User $user
     * @return JsonResponse
     */
    public function showAll()
    {
        return view('user.index', ['users' => User::all()]);
    }

    /**
     * @return JsonResponse
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();

        return new JsonResponse($user->toArray());
    }
}
