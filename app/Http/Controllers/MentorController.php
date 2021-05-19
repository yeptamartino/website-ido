<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use Image;
use Flash;

class MentorController extends Controller

{
    protected $mentor;

    public function __construct(Mentor $mentor) 

    {
        $this->mentor = $mentor;
    }

    public function index(Request $request)

    {
        $search = $request->input('search');

        if($search ==""||$search=="0")
            
        { $mentor_search = ""; }
        
        else
        
        { $mentor_search = " AND name like '%".$search."%'"; }
    
        $mentor = Mentor::whereRaw('1 '.$mentor_search)
        ->orderBy('name','asc')
        ->paginate(10);
        return view('mentor.index', compact('mentor'));

    }

    public function create()

    {
        return view('mentor.create');
    }

    public function store(Request $request)

    {
        $mentor                = new Mentor;
        $mentor->name          = $request->name;
        $mentor->telephone     = $request->telephone;
        $mentor->email         = $request->email;
        $mentor->description   = $request->description;

        if ($request->photo != null) 
        
        {
            $imageName          = time() . '.' . $request->photo->getClientOriginalExtension();
            $mentor->photo     = './images/mentor-foto/' . $imageName;
            $request->photo->move(public_path('images/mentor-foto'), $imageName);
            $img                = Image::make(public_path('images/mentor-foto/' . $imageName));
            $img->save();
        } 
        
        else 

        { $image->photo    = './images/default_product.jpg'; }

        $mentor->save();
        Flash::success('Mentor Created Successfully.');
        return redirect('/mentors');

    }

    public function show(Mentor $mentor)

    {
        return view('mentor.show', compact('mentor'));
    }

    public function edit(Mentor $mentor)

    {
        return view('mentor.edit', compact('mentor'));

    }

    public function update(Request $request, $id)

    {
        $mentor                = Mentor::find($id);
        $mentor->name         = $request->input('name');
        $mentor->telephone         = $request->input('telephone');
        $mentor->email         = $request->input('email');
        $mentor->description   = $request->input('description');

        if ($request->photo != null) 
        
        {
            $imageName       = time() . '.' . $request->photo->getClientOriginalExtension();
            $mentor->photo     = './images/mentor-foto/' . $imageName;
            $request->photo->move(public_path('images/mentor-foto'), $imageName);
            $img             = Image::make(public_path('images/mentor-foto/' . $imageName));
            $img->save();
        }

        $mentor->save();
        Flash::success('Mentor Updated Successfully.');
        return redirect('/mentors');
        
    }

    public function destroy($id)

    {
        $mentor = Mentor::find($id);
        $mentor->delete();
        Flash::error('Mentor Deleted Successfully.');
        return redirect('/mentors');
    }
}
