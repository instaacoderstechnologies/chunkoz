<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class MainapiController extends Controller
{
    public function index(){
        $users = DB::table('users')
                ->where('role_id', 2)
                ->get();
        return response()->json(['success'=>true, 'message' => 'Friends retrived successfully', 'data'=>$users], 200);
    }
}
