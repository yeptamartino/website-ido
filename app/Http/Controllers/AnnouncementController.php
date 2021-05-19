<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Flash;

class AnnouncementController extends Controller
{
    protected $announcement;

    public function __construct(Announcement $announcement) 

    {
        $this->announcement = $announcement;
    }

    public function index(Request $request)

    {
        $search     = $request->input('search');

        if($search ==""||$search=="0")
            
        { $announcement_search = "";}
        
        else
        
        { $announcement_search = " AND title like '%".$search."%'"; }
    
    $announcement = Announcement::whereRaw('1 '.$announcement_search)
    ->orderBy('title','asc')
    ->paginate(10);

    return view('announcement.index', compact('announcement'));

    }

    public function create()

    {
        return view('announcement.create');
    }

    public function store(Request $request)

    {
        $announcement                = new Announcement;
        $announcement->title         = $request->title;
        $announcement->description   = $request->description;
        
        $announcement->save();
        Flash::success('Announcement Created Successfully.');
        return redirect('/announcements');

    }

    public function show(Announcement $announcement)

    {
        return view('announcement.show', compact('announcement'));
    }

    public function edit(Announcement $announcement)

    {
        return view('announcement.edit', compact('announcement'));

    }

    public function update(Request $request, $id)

    {
        $announcement                = Announcement::find($id);
        $announcement->title         = $request->input('title');
        $announcement->description   = $request->input('description');
        
        $announcement->save();
        Flash::success('Announcement Updated Successfully.');
        return redirect('/announcements');
        
    }

    public function destroy($id)

    {
        $announcement = Announcement::find($id);
        $announcement->delete();
        Flash::success('Announcement Deleted Successfully.');
        return redirect('/announcements');
    }
}
