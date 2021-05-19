<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Image;
use Flash;

class HistoryController extends Controller

{
    protected $history;

    public function __construct(History $history)

    {
        $this->history = $history;
    }

    public function index(Request $request)

    {
        $search = $request->input('search');

        if($search==""||$search=="0")
            
        { $history_search = ""; }
        
        else
        
        { $history_search = " AND description like '%".$search."%'"; }
    
        $history = History::whereRaw('1 '.$history_search)
        ->orderBy('description','asc')
        ->paginate(10);
        return view('history.index', compact('history'));

    }

    public function create()

    {
        return view('history.create');
    }

    public function store(Request $request)

    {
        $history                = new History;
        $history->description   = $request->description;

        $history->save();
        Flash::success('History Created Successfully.');
        return redirect('/histories');

    }

    public function show(History $history)

    {
        return view('history.show', compact('history'));
    }

    public function edit(History $history)

    {
        return view('history.edit', compact('history'));

    }

    public function update(Request $request, $id)

    {
        $history                = History::find($id);
        $history->description         = $request->input('description');
       
        $history->save();
        Flash::success('History Updated Successfully.');
        return redirect('/histories');
        
    }

    public function destroy($id)
    
    {
        $history = History::find($id);
        $history->delete();
        Flash::error('History Deleted Successfully.');
        return redirect('/histories');
    }
}
