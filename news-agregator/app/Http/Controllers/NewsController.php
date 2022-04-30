<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        $body = '';
        foreach(Controller::getNews() as $news) {
            if ($news['category'] == $category || $category == 'all') {
                $body .= "<a href=\"/category/$category/news/$news[id]\">$news[heading]</a><br>";
            }
        }

        return $body;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category)
    {
        return "
            <form action=\"/category/$category/news\" method=\"post\">
                <p>Заголовок: <input type=\"text\" name=\"heading\"></p>
                <p>Текст новости: <textarea name=\"body\"></textarea></p>
                <p>Краткое описание: <textarea name=\"description\"></textarea></p>
                <p><input type=\"submit\" value=\"Создать\"></p>
            </form>
        ";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, $newsId)
    {
        $newsList = Controller::getNews();
        $body = "";
        foreach($newsList as $news) {
            if ($news['id'] == $newsId) {
                $body .= "<h1>$news[heading]</h1>
                          <p>$news[body]</p>"; 
            }
        }
        return $body;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
