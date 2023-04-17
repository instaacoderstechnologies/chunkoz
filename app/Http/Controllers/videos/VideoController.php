<?php

namespace App\Http\Controllers\videos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index(){

        $videos = Video::query()
            ->where('status', 1)
            ->orderBy('id')
            ->paginate(config('app-config.datatable_default_row_count'));

        return view('videos.index', compact('videos'));
    }


    public function create(){
        return view('videos.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'video_thumb' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->video_thumb->extension();  
        $request->video_thumb->move(public_path('video_thumb'), $imageName);

        $video= new Video();
        if($request['status'] == 'active'){
            $status = 1;
        }else{
            $status = 0;
        }
        $video->video_url   = $request['video_url'];
        $video->video_thumb  = $imageName;
        $video->video_category  = $request['video_category'];
        $video->status  = $status;
        // add other fields
        $video->save();
        return redirect()->route('admin.videos.index');
    }

}
