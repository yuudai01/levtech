<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="category">
            <h2>Category</h2>
            <select name="post[category_id]">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            </div>
            <div classs= "NG">
  	        <p>ネタバレはありますか？</p>
  	        <label><input type="radio" name="post[NG]" value="あり">ネタバレあり</label>
  	        <label><input type="radio" name="post[NG]" value="なし">ネタバレなし</label>
	        </div>
	        <div classs= "ranking">
	        <p>漫画の評価</p>
  	        <label><input type="radio" name="post[ranking]" value="5">5</label>
  	        <label><input type="radio" name="post[ranking]" value="4">4</label>
  	        <label><input type="radio" name="post[ranking]" value="3">3</label>
  	        <label><input type="radio" name="post[ranking]" value="2">2</label>
  	        <label><input type="radio" name="post[ranking]" value="1">1</label>
	        </div>
	        <input type="hidden" name="post[user_id]" value="{{ auth()->id() }}" />
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        @endsection
    </body>
</html>