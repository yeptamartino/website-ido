<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\User;
use Image;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller

{
    protected $news;

    public function __construct(News $news) 

    {
        $this->news = $news;
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        if($search==""||$search=="0")
            
        { $news_search = ""; }
        
        else
        
        { $news_search = " AND title like '%".$search."%'"; }
    
    $news = News::whereRaw('1 '.$news_search)
    ->orderBy('title','asc')
    ->paginate(10);
    return view('news.index', compact('news'));

    }

    public function create()

    {
        return view('news.create');
    }

    public function store(Request $request)

    {
        $news                = new News;
        $news->title         = $request->title;
        $news->description   = $request->description;
        $news->date          = $request->date;

        if ($request->image != null) 
        {
            $imageName       = time() . '.' . $request->image->getClientOriginalExtension();
            $news->image     = './images/news-foto/' . $imageName;
            $request->image->move(public_path('images/news-foto'), $imageName);
            $img             = Image::make(public_path('images/news-foto/' . $imageName));
            $img->save();
        } 
        
        else 

        {
            $image->image    = './images/default_product.jpg';
        }

        $news->save();
        Flash::success('News Created Successfully.');
        return redirect('/news');

    }

    public function show(News $news)

    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)

    {
        return view('news.edit', compact('news'));

    }

    public function update(Request $request, $id)

    {
        $news                = News::find($id);
        $news->title         = $request->input('title');
        $news->description   = $request->input('description');
        $news->date          = $request->input('date');
        if ($request->image != null) {
            $imageName       = time() . '.' . $request->image->getClientOriginalExtension();
            $news->image     = './images/news-foto/' . $imageName;
            $request->image->move(public_path('images/news-foto'), $imageName);
            $img             = Image::make(public_path('images/news-foto/' . $imageName));
            $img->save();
        }

        $news->save();
        Flash::success('News Updated Successfully.');
        return redirect('/news');
        
    }

    public function destroy($id)

    {
        $news = News::find($id);
        $news->delete();
        Flash::error('News Deleted Successfully.');
        return redirect('/news');
    }
}
