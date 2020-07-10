<?php

namespace App\Http\Controllers;

use App\User;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    /**
     * @param User $user
     * @return JsonResponse
     */
    public function showAll()
    {
        $users = User::all();

        return new JsonResponse($users->toArray());
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
