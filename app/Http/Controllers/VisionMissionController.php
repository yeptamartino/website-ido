<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisionMission;
use Image;
use Flash;

class VisionMissionController extends Controller

{
    protected $vision_mission;

    public function __construct(VisionMission $vision_mission) 

    {
        $this->vision_mission = $vision_mission;
    }

    public function index(Request $request)

    {
        $search = $request->input('search');

        if($search ==""||$search=="0")
            
        { $vision_mission_search = ""; }
        
        else
        
        { $vision_mission_search = " AND description like '%".$search."%'"; }
    
        $vision_mission = VisionMission::whereRaw('1 '.$vision_mission_search)
        ->orderBy('description','asc')
        ->paginate(10);
        return view('vision-mission.index', compact('vision_mission'));

    }

    public function create()

    {
        return view('vision-mission.create');
    }

    public function store(Request $request)

    {
        $vision_mission                = new VisionMission;
        $vision_mission->description   = $request->description;

        $vision_mission->save();
        Flash::success('Vision Mission Created Successfully.');
        return redirect('/vision-missions');

    }

    public function show(VisionMission $vision_mission)

    {
        return view('vision-mission.show', compact('vision_mission'));
    }

    public function edit(VisionMission $vision_mission)

    {
        return view('vision-mission.edit', compact('vision_mission'));

    }

    public function update(Request $request, $id)

    {
        $vision_mission                = VisionMission::find($id);
        $vision_mission->description   = $request->input('description');
       
        $vision_mission->save();
        Flash::success('Vision Mission Updated Successfully.');
        return redirect('/vision-missions');
        
    }

    public function destroy($id)

    {
        $vision_mission = VisionMission::find($id);
        $vision_mission->delete();
        Flash::error('Vision Mission Deleted Successfully.');
        return redirect('/vision-missions');
    }
}

