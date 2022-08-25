<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateWondeIdRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function updateWondeId(User $user, UpdateWondeIdRequest $request)
    {
        $user->wonde_user_id = $request->wondeId;
        $user->save();

        Session::flash('status', 'Successfully set your Wonde ID');

        return $user;
    }
}
