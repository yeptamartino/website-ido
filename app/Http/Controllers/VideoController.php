<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Flash;

class VideoController extends Controller

{
    protected $video;

    public function __construct(Video $video) 

    {
        $this->video = $video;
    }

    public function index(Request $request)

    {
        $search = $request->input('search');

        if($search ==""||$search=="0")
            
        { $video_search = "";  }
        
        else
        
        { $video_search = " AND url like '%".$search."%'"; }
    
        $video = Video::whereRaw('1 '.$video_search)
        ->orderBy('url','asc')
        ->paginate(10);
        return view('video.index', compact('video'));

    }

    public function create()

    {
        return view('video.create');
    }

    public function store(Request $request)

    {
        $video              = new Video;
        $video->url         = $request->url;

        $video->save();
        Flash::success('Video Created Successfully.');
        
        return redirect('/videos');

    }

    public function show(video $video)

    {
        return view('video.show', compact('video'));
    }

    public function edit(video $video)

    {
        return view('video.edit', compact('video'));

    }

    public function update(Request $request, $id)

    {
        $video                = Video::find($id);
        $video->url           = $request->input('url');
       
        $video->save();
        Flash::success('Video Updated Successfully.');
        return redirect('/videos');
        
    }

    public function destroy($id)
    
    {
        $video = Video::find($id);
        $video->delete();
        Flash::error('Video Deleted Successfully.');
        return redirect('/videos')->with('status','Video Deleted !');
    }
}
