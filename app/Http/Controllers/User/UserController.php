<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(protected UserService $userService){       }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $list = $this->userService->list();
        return view('welcome',compact('list'));
    }

}
