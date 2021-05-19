<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use Flash;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
	

	public function index(Request $request)
	{
		$search = $request->input('search');

		if($search==""||$search=="0")

			{ $agenda_search = ""; }

		else

			{ $agenda_search = " AND title like '%".$search."%'"; }

		$agenda = Agenda::whereRaw('1 '.$agenda_search)
		->orderBy('title','asc')
		->paginate(10);
		return view('agenda.index', compact('agenda'));

	}

	public function create()

	{
		return view('agenda.create');
	}

	public function store(Request $request)

	{
		$agenda                = new Agenda;
		$agenda->title         = $request->title;
		$agenda->description   = $request->description;
		$agenda->date          = $request->date;

		$agenda->save();
		Flash::success('Agenda Created Successfully.');
		return redirect('/agendas');

	}

	public function show(Agenda $agenda)

	{
		return view('agenda.show', compact('agenda'));
	}

	public function edit(Agenda $agenda)

	{
		return view('agenda.edit', compact('agenda'));

	}

	public function update(Request $request, $id)

	{
		$agenda                = Agenda::find($id);
		$agenda->title         = $request->input('title');
		$agenda->description   = $request->input('description');
		$agenda->date          = $request->input('date');
		
		$agenda->save();
		Flash::success('Agenda Updated Successfully.');
		return redirect('/agendas');

	}

	public function destroy($id)

	{
		$agenda = Agenda::find($id);
		$agenda->delete();
		Flash::error('Agenda Deleted Successfully.');
		return redirect('/agendas');
	}
}
