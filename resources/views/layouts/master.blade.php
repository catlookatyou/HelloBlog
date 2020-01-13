<!DOCTYPE html>
<html lang="{{ app()->getLocale()  }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HelloBlog - @yield('title')</title>
    @include('partials.head')
    <style>
        body{
            font-family: '微軟正黑體';
            background: white;
        }
        .navbar-shadow{
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.99);
        }
    </style>
    
    <script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
</head>
<body>
    @include('partials.nav')
    <main style="margin-top: 30px;">
        <div class="container">
            @section('content')
            @show
        </div>
    </main>
</body>
</html>

<script >
    //var editor = CKEDITOR.replace( 'article-ckeditor' );
    //CKFinder.setupCKEditor( editor );

    var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files'
    };

    CKEDITOR.replace( 'article-ckeditor', options );
</script>
