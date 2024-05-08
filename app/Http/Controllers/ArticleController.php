<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // App\Article を正しくインポート
use Validator;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('article.index', ['articles' => $articles]);
    }
    public function add (Request $request)
    {
        // Validation
        // 入力情報の取得
        $inputs = $request->all();

        // ルールを設定
        $rules = [
            'title' => 'required|max:15',
            'body' => 'required|max:256'
        ];

        // エラーメッセージを設定
        $messages = [
            'title.required' => 'タイトルは必須だよ',
            'title.max' => 'タイトルは15文字以内だよ',
            'body.required' => '本文は必須だよ',
            'body.max' => '本文は256文字以内だよ'
        ];

        $validation = Validator::make($inputs, $rules, $messages);

        if ($validation->fails()){
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        // 保存の処理
        $article = new Article;
        $article->user_id = 1; // 今回は1固定       
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();

        return redirect()->to('/article');
    }
    public function delete (Request $request)
    {
        Article::find($request->id)->delete();
        return redirect('/article');
    }
}