<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrganizationalStructure;
use Image;
use Flash;

class OrganizationalStructureController extends Controller
{
	protected $organizational_structure;

	public function __construct(OrganizationalStructure $organizational_structure)

	{
		$this->organizational_structure = $organizational_structure;
	}

	public function index(Request $request)

	{
		$search = $request->input('search');

		if($search==""||$search=="0")

			{ $organizational_structure_search = ""; }

		else

			{ $organizational_structure_search = " AND description like '%".$search."%'"; }

		$organizational_structure = OrganizationalStructure::whereRaw('1 '.$organizational_structure_search)
		->orderBy('description','asc')
		->paginate(10);
		return view('organizational-structure.index', compact('organizational_structure'));

	}

	public function create()

	{
		return view('organizational-structure.create');
	}

	public function store(Request $request)

	{
		$organizational_structure                = new OrganizationalStructure;
		$organizational_structure->description   = $request->description;

		$organizational_structure->save();
		Flash::success('Organizational Structure Created Successfully.');
		return redirect('/organizational-structures');

	}

	public function show(OrganizationalStructure $organizational_structure)

	{
		return view('organizational-structure.show', compact('organizational_structure'));
	}

	public function edit(OrganizationalStructure $organizational_structure)

	{
		return view('organizational-structure.edit', compact('organizational_structure'));

	}

	public function update(Request $request, $id)

	{
		$organizational_structure                = OrganizationalStructure::find($id);
		$organizational_structure->description         = $request->input('description');

		$organizational_structure->save();
		Flash::success('Organizational Structure Updated Successfully.');
		return redirect('/organizational-structures');

	}

	public function destroy($id)

	{
		$organizational_structure = OrganizationalStructure::find($id);
		$organizational_structure->delete();
		Flash::error('Organizational Structure Deleted Successfully.');
		return redirect('/organizational-structures');
	}
}
