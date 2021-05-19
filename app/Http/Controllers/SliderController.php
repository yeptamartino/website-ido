<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Image;
use Flash;
use Illuminate\Http\Request;

class SliderController extends Controller

{
    protected $slider;

    public function __construct(Slider $slider) 

    {
        $this->slider = $slider;
    }

    public function index(Request $request)

    {
        $search = $request->input('search');

        if($search==""||$search=="0")
            
        { $slider_search = ""; }
        
        else
        
        { $slider_search = " AND title like '%".$search."%'"; }
    
        $slider = Slider::whereRaw('1 '.$slider_search)
        ->orderBy('title','asc')
        ->paginate(10);
        return view('slider.index', compact('slider'));

    }

    public function create()

    {
        return view('slider.create');
    }

    public function store(Request $request)

    {
        $slider                = new Slider;
        $slider->title         = $request->title;
        $slider->description   = $request->description;

        if ($request->image != null) 
        
        {
            $imageName       = time() . '.' . $request->image->getClientOriginalExtension();
            $slider->image     = './images/slider-foto/' . $imageName;
            $request->image->move(public_path('images/slider-foto'), $imageName);
            $img             = Image::make(public_path('images/slider-foto/' . $imageName));
            $img->save();
        } 

        else 
        
        { $image->image    = './images/default_product.jpg'; }

        $slider->save();
        Flash::success('Slider Created Successfully.');
        return redirect('/sliders');

    }

    public function show(Slider $slider)

    {
        return view('slider.show', compact('slider'));
    }

    public function edit(Slider $slider)

    {
        return view('slider.edit', compact('slider'));

    }

    public function update(Request $request, $id)

    {
        $slider                = Slider::find($id);
        $slider->title         = $request->input('title');
        $slider->description   = $request->input('description');
        
        if ($request->image != null) 
        
        {
            $imageName       = time() . '.' . $request->image->getClientOriginalExtension();
            $slider->image     = './images/slider-foto/' . $imageName;
            $request->image->move(public_path('images/slider-foto'), $imageName);
            $img             = Image::make(public_path('images/slider-foto/' . $imageName));
            $img->save();
        }

        $slider->save();
        Flash::success('Slider Updated Successfully.');
        return redirect('/sliders');
        
    }

    public function destroy($id)
    
    {
        $slider = Slider::find($id);
        $slider->delete();
        Flash::error('Slider Deleted Successfully.');
        return redirect(url('sliders'));
    }
}
