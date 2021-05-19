<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Image;
use Flash;

class ContactController extends Controller

{
	protected $contact;

	public function __construct(Contact $contact) 

	{
		$this->contact = $contact;
	}

	public function index(Request $request)

	{
		$search = $request->input('search');

		if($search==""||$search=="0")

		{ $contact_search = "";}
		
		else

		{ $contact_search = " AND name like '%".$search."%'";}

		$contact = Contact::whereRaw('1 '.$contact_search)
		->orderBy('status','asc')
		->paginate(10);
		return view('contact.index', compact('contact'));

	}

	public function create()

	{
		return view('contact.create');
	}

	public function store(Request $request)

	{
		$contact                = new Contact;
		$contact->name          = $request->name;
		$contact->email         = $request->email;
		$contact->telephone     = $request->telephone;
		$contact->subject       = $request->subject;
		$contact->message       = $request->message;
		$contact->status        = 0;

		$contact->save();
		Flash::success('Contact Created Successfully.');
		return redirect('/contacts');

	}

	public function show(Contact $contact)

	{
		if ($contact) {
            $contact->status = 1;
            $contact->save();
        }
		return view('contact.show', compact('contact'));
	}

	public function edit(Contact $contact)

	{
		return view('contact.edit', compact('contact'));

	}

	public function update(Request $request, $id)

	{
		$contact                = Contact::find($id);
		$contact->name          = $request->input('name');
		$contact->email         = $request->input('email');
		$contact->telephone     = $request->input('telephone');
		$contact->subject       = $request->input('subject');
		$contact->message       = $request->input('message');
		$contact->status        = $request->input('status');

		$contact->save();
		Flash::success('Contact Updated Successfully.');
		return redirect('/contacts');

	}

	public function destroy($id)
	
	{
		$contact = Contact::find($id);
		$contact->delete();
		Flash::error('Contact Deleted Successfully.');
		return redirect('/contacts');
	}
}
