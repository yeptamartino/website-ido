<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Image;
use Flash;
use Illuminate\Http\Request;

class AdminController extends Controller

{
    protected $admin;

    public function __construct(Admin $admin) 

    {
        $this->admin = $admin;
    }

    public function index(Request $request)

    {
        $search = $request->input('search');

        if($search == "" || $search == "0")
            
        { $admin_search = ""; 
        
        }else
        
        { $admin_search = " AND name like '%".$search."%'"; }
    
        $admin = Admin::whereRaw('1 '.$admin_search)
        ->orderBy('name','asc')
        ->paginate(10);
        return view('admin.index', compact('admin'));

    }

    public function create()

    {
        return view('admin.create');
    }

    public function store(Request $request)

    {
        $admin               = new Admin;
        $admin->name         = $request->name;
        $admin->telephone    = $request->telephone;
        $admin->email        = $request->email;
        $admin->address      = $request->address;
        $admin->password     = bcrypt($request->password);

        if ($request->photo != null) 
        
        {
            $imageName       = time() . '.' . $request->photo->getClientOriginalExtension();
            $admin->photo     = './images/admin-foto/' . $imageName;
            $request->photo->move(public_path('images/admin-foto'), $imageName);
            $img             = Image::make(public_path('images/admin-foto/' . $imageName));
            $img->save();
        } 
        
        else 
        
        { $image->photo    = './images/default_product.jpg'; }

        $admin->save();
        Flash::Success('Admin Created Successfully.');
        return redirect('/admins');

    }

    public function show(Admin $admin)

    {
        return view('admin.show', compact('admin'));
    }

    public function edit(Admin $admin)

    {
        return view('admin.edit', compact('admin'));

    }

    public function update(Request $request, $id)

    {
        $admin                = Admin::find($id);
        $admin->name          = $request->input('name');
        $admin->telephone     = $request->input('telephone');
        $admin->email         = $request->input('email');
        $admin->address       = $request->input('address');
        $admin->password      = bcrypt($request->input('password'));

        if ($request->photo != null) 
        
        {
            $imageName       = time() . '.' . $request->photo->getClientOriginalExtension();
            $admin->photo     = './images/admin-foto/' . $imageName;
            $request->photo->move(public_path('images/admin-foto'), $imageName);
            $img             = Image::make(public_path('images/admin-foto/' . $imageName));
            $img->save();
        }

        $admin->save();
        Flash::Success('Admin Updated Successfully.');
        return redirect('/admins');
        
    }

    public function destroy($id)

    {
        $admin = Admin::find($id);
        $admin->delete();
        Flash::error('Admin Deleted Successfully.');
        return redirect('/admins');
    }
}
