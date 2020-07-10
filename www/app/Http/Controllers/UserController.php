<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    /**
     * @param User $user
     * @return JsonResponse
     */
    public function showAll()
    {
        return new JsonResponse([]);
    }

    /**
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user)
    {
        return new JsonResponse($user->toArray());
    }
}
