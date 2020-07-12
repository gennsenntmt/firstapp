@extends('layouts.application')

@section('title','新規作成')

<style>
.container-create{
  padding-top: 140px;
  margin:0 auto;
  width: 400px;
}
.label{
  margin: 10px 10px 10px 0;
  font-size: 26px;
  height: 50px;
}
.text-box{
 font-size: 22px;
}

.body-box{
  margin-top: 20px;
  height: 180px;
}
.textarea-box{
  font-size: 18px;
  height: 180px;
  width: 400px;
}

.btn-submit{
  margin-top: 75px;
  display: inline-block;
  font-size: 80px;
  width: 80px;
  letter-spacing: 15px;
  cursor: pointer;
  float: right;
}

</style>

@section('content')
 <div class="container-create">
  <form action="/articles" method="post" class="form">
    {{ csrf_field()}}
    <div> 
      <label for="title" class="label">タイトル</label>
      <input type="text" name="title" placehoder="記事のタイトルを入れる" class="text-box">
    </div>
    <div class="body-box">
      <label for="body" class="label">内容</label>
      <textarea class="textarea-box" name="body" lows="8" cols="80" placeholder="今の気持ちを入力してください"></textarea>
    </div>
    <div>
      <input class="btn-submit" type="submit" value="投稿する">
    <div>
  </form>
</div>
@endsection