<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="/upload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <input type="file" name="file">
            <input type="submit">
        </form>
        
    </body>
</html>
