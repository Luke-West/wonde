<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateWondeIdRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function updateWondeId(User $user, UpdateWondeIdRequest $request): User
    {
        $user->wonde_user_id = $request->wondeId;
        $user->save();

        Session::flash('status', 'Your Wonde ID has been set.');

        return $user;
    }
}
