<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoryId)
    {
        if ($categoryId != 'all') {
            return view('news.list', ['newsList' => News::query()->where('category_id', $categoryId)->get(), 'categoryId' => $categoryId]);
        }
        return view('news.list', ['newsList' => News::all(), 'categoryId' => $categoryId]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($categoryId)
    {
        return view('news.create', ['categories' => Category::all(), 'categoryId' => $categoryId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->fill($request->all());
        $news->save();
        return redirect()->route('category.news.index', $request->get('category_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoryId, News $news)
    {
        return view('news.news', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryId, News $news)
    {
        return view('news.update', ['news' => $news, 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryId, $newsId)
    {
        $category = News::query()->where('id', $newsId)->get()[0];
        $category->fill($request->all());
        $category->save();
        return redirect()->route('category.news.show', [$categoryId, $newsId]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
