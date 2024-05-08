@extends('layouts.common')
@section('title', '掲示板')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form method="POST" action="/article/add">
            <div class="form-group">
                {{ csrf_field() }}
                <p class="ext-monospace">タイトル</p>
                <input type="text" name="title" class="form-control @if ($errors->has('title')) is-invalid @endif" value="{{old('title')}}">
                @if ($errors->has('title'))
                    <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                @endif

                <p class="ext-monospace">本文</p>
                <input type="text" name="body" class="form-control @if ($errors->has('body')) is-invalid @endif" value="{{old('body')}}">
                @if ($errors->has('body'))
                    <span class="invalid-feedback">{{ $errors->first('body') }}</span>
                @endif

                <br><input type="submit" value="投稿" class="btn btn-default">
            </div>
        </form>

    </div>
</div>

    <div class="mx-auto" style="width: 450px;">
        <div class="row">
            <div class="col-sm-12">
                @foreach($articles as $article)
                    <div class="card border-primary mb-4" style="max-width: 30rem;">
                    <div class="card-body text-primary">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->body}} </p>
                        <form method="post" action="/article/delete/{{$article->id}}">
                            {{ csrf_field() }}
                            <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("君は本当に削除するつもりかい？");'>
                        </form>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
@endsection
