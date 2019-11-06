@extends('layouts.application')

@section('title','記事一覧')


<style>
  .container{
    margin: 30px auto;
    text-align: center;
    position: relative;
    width: 500px;
    padding: 30px 40px;
    height: 100%;
    overflow: scroll;
  }

  .btn {
    background-color: #66FF66;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    width: 140px;
    text-align: center;
    height: 60px;
    line-height: 60px;
    letter-spacing: 5px;
  }

  .btn:hover{
    background-color: #00AA00;
  }

  .create {
    font-size: 20px;
    float: left;
    position: fixed;
    left: 80px;
    top: 120px;
  }

  .main {
    margin-top: 20px;
    flex-direction: column;
    display: flex;
    border: solid 2px gray;
  }

  h3 {
    color: #00EE00;
    letter-spacing: 3px;
  }

  p{
   padding: 0 10px;
  }

  .a-edit{
    display: inline-block;
    float: left;
    padding: 15px 0 0 0;
    margin-top: 15px;
    font-size: 15px;
  }

  .edit{
    text-decoration: none;
    margin: 5px;
  }

  .btn-delete {
    cursor: pointer;
    letter-spacing: 8px;
    font-size: 20px;
    float: right;
    margin-right: 30px;
  }

</style>
@section('content')
<a href="/articles/create" class="btn create">投稿を作成</a>
  <div class="container">
  
    
      @foreach($articles as $article)
      <div class="main"> 
       
        <h3>{{$article->title}}</h3>
        <p>{{$article->body}}</p>
        <div class="a-edit">
          <a class="edit" href="/articles/{{$article->id}}">詳細</a>
          <a class="edit" href="/articles/{{$article->id}}/edit">編集</a>
        </div>
        <form action="/articles/{{$article->id}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="delete">
          <input type="submit" name="" value="削除する" class="btn-delete">
        </form>
      </div>
        @endforeach
       
     
    </div>
    
</div>
  
@endsection