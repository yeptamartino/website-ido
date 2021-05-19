<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUser;
use App\Models\News;
use Image;
use Flash;

class ContactUserController extends Controller

{
	public function __construct(ContactUser $contact, News $news_content) 

	{
		$this->news_content    = $news_content;
		$this->contact         = $contact;
	}

	public function index(Request $request)

	{
		$search = $request->input('search');

		if($search==""||$search=="0")

			{ $contact_search = ""; }

		else

			{ $contact_search = " AND name like '%".$search."%'"; }
		$news_content    = News::orderBy('id','desc')->get();
		$contact = ContactUser::whereRaw('1 '.$contact_search)
		->orderBy('name','asc')
		->paginate(10);
		return view('user.contact', compact('contact','news_content'));

	}

	public function create()

	{
		return view('user.contact');
	}

	public function store(Request $request)

	{
		$contact                = new ContactUser;
		$contact->name          = $request->name;
		$contact->email         = $request->email;
		$contact->telephone     = $request->telephone;
		$contact->subject       = $request->subject;
		$contact->message       = $request->message;
		$contact->status        = 0;

		$contact->save();
		Flash::success('Pesan Anda Sudah Terkirim !');
		return redirect()->back(); 

	}

	public function show(ContactUser $contact)

	{
		if ($contact) {
			$contact->status = 0;
			$contact->save();
		}
		return view('contact.show', compact('contact'));
	}

	public function edit(ContactUser $contact)

	{
		return view('contact.edit', compact('contact'));

	}

	public function update(Request $request, $id)

	{
		$contact                = ContactUser::find($id);
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
		$contact = ContactUser::find($id);
		$contact->delete();
		Flash::error('Contact Deleted Successfully.');
		return redirect('/contacts');
	}
}
