<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class MainapiController extends Controller
{
    public function index(){
        ini_set('memory_limit', '-1');
        $users = DB::table('users')
                ->where('role_id', 2)
                ->orderBy('id', 'DESC')
                ->get();
        return response()->json(['success'=>true, 'message' => 'Friends retrived successfully', 'data'=>$users], 200);
    }

    public function getVideos(){
        $videos = DB::table('videos')
                ->where('status', 1)
                ->orderBy('id', 'DESC')
                ->get();
        return response()->json(['success'=>true, 'message' => 'Videos retrived successfully', 'data'=>$videos], 200);
    }
}
