<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script> -->
       
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: center;
                padding-top: 50px
            }

            .title {
                font-size: 90px;
                padding-top: 40px;
            }

            .sub-title{
                font-size: 45px;
            }


            .m-b-md {
                margin-bottom: 20px;
            }

            .btn {
                background-color: #66FF66;
                display: inline-block;
                height:60px;
                width: 110px;
                letter-spacing: 6px;
                line-height: 60px;
                text-decoration: none;
                color: #FFF;
                border-radius: 6px;
                margin-top: 35px;
            }

            .btn:hover{
              background-color: #00AA00;
            }

            p{
              float: right;
              margin: 50px 400px 0 0 ;
            }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title">
                  Laravel-training
                </div> 
                <div class="sub-title">
                  MyFirstApp
                </div>
                <a href='/articles' class="btn">記事一覧</a>
                  <br>
                <a href='/articles/create' class="btn">投稿作成</a>
                </div>
                <p> 作成：2019/11/06 </p>
            </div>
        </div>
    </body>
</html>
