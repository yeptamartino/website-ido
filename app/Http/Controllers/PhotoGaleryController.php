<?php

namespace App\Http\Controllers;

use App\Models\PhotoGalery;
use Image;
use Flash;
use Illuminate\Http\Request;

class PhotoGaleryController extends Controller

{
    protected $photo_galery;

    public function __construct(PhotoGalery $photo_galery) 

    {
        $this->photo_galery = $photo_galery;
    }

    public function index(Request $request)

    {
        $search = $request->input('search');

        if($search==""||$search=="0")
            
        { $photo_galery_search = ""; }
        
        else
        
        { $photo_galery_search = " AND title like '%".$search."%'"; }
    
    $photo_galery = PhotoGalery::whereRaw('1 '.$photo_galery_search)
    ->orderBy('title','asc')
    ->paginate(10);
    return view('photo-galery.index', compact('photo_galery'));

    }

    public function create()

    {
        return view('photo-galery.create');
    }

    public function store(Request $request)

    {
        $photo_galery                = new PhotoGalery;
        $photo_galery->title         = $request->title;
        $photo_galery->description   = $request->description;

        if ($request->image != null) 
        
        {
            $imageName       = time() . '.' . $request->image->getClientOriginalExtension();
            $photo_galery->image     = './images/photo_galery-foto/' . $imageName;
            $request->image->move(public_path('images/photo_galery-foto'), $imageName);
            $img             = Image::make(public_path('images/photo_galery-foto/' . $imageName));
            $img->save();
        } 
        
        else 

        { $image->image    = './images/default_product.jpg'; }

        $photo_galery->save();
        Flash::success('Photo Galery Created Successfully.');
        return redirect('/photo-galeries');

    }

    public function show(PhotoGalery $photo_galery)

    {
        return view('photo-galery.show', compact('photo_galery'));
    }

    public function edit(PhotoGalery $photo_galery)

    {
        return view('photo-galery.edit', compact('photo_galery'));

    }

    public function update(Request $request, $id)

    {
        $photo_galery                = PhotoGalery::find($id);
        $photo_galery->title         = $request->input('title');
        $photo_galery->description   = $request->input('description');
        if ($request->image != null) 
        
        {
            $imageName               = time() . '.' . $request->image->getClientOriginalExtension();
            $photo_galery->image     = './images/photo_galery-foto/' . $imageName;
            $request->image->move(public_path('images/photo_galery-foto'), $imageName);
            $img                     = Image::make(public_path('images/photo_galery-foto/' . $imageName));
            $img->save();
        }

        $photo_galery->save();
        Flash::success('Photo Galery Updated Successfully.');
        return redirect('/photo-galeries');
        
    }

    public function destroy($id)

    {
        $photo_galery = PhotoGalery::find($id);
        $photo_galery->delete();
        Flash::error('Photo Galery Deleted Successfully.');
        return redirect('/photo-galeries');
    }
}
