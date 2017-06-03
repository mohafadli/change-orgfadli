<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();

        $data = [
            'message' => 'Success',
            'code' => 200,
            'data' => $news
        ];

        return response($data, 200);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $input = $request->input();

        $news = New News($input);

        $news->Save();

        $data = [
            'message' => 'Success',
            'code' => 200,
            'data' => $news
        ];

        return response($data, 201);
    }

    public function show(News $news)
    {
        $data = [
            'message' => 'Success',
            'code' => 200,
            'data' => $news
        ];

        return response($data, 200);
    }

public function edit(News $news)
    {
        //
    }

    public function update(Request $request, News $news)
    {
        //
    }

    public function destroy(News $news)
    {
        //
    }
}
