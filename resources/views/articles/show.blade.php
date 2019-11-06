@extends('layouts.application')

@section('title','記事詳細')

<style>
  .edit-box{
    width: 300px;
    margin:90px auto;
    width: 400px;
    flex-direction: column;
    display: flex;
    border: solid 2px gray;
    text-align: center;
  }
  span{
    font-weight: normal ;
    font-size: 18px;
    margin: 5px 0 0 16px;
    float: left;
    display: inline;
    padding-left: 12px;
    padding-bottom: 18px;
  }

  .edit-btn {
    padding: 12px 0;
    text-decoration: none;
  }

  p{
    font-size: 18px;
  }

  .return-btn{
    display: inline-block;
    text-align: center;
    margin-left: 670px;
  }
  
  
</style>
@section('content')
  <div class="edit-box">
    <h2><span>title:</span>{{$article->title}}</h2>
    <p><span>内容:</span>{{$article->body}}</p>
    <p><span>作成日:</span>{{$article->created_at}}</p>
    <br><br>
    <a href="/articles/{{$article->id}}/edit" class="edit-btn">編集する</a>
    <form action="/articles/{{$article->id}}" method="post">
      <input type="hidden" name="_method" value="post">
      <input type="submit" name="" value="削除する">
    </form>
  </div>
  <a href="/articles" class="return-btn">一覧に戻る</p>
@endsection