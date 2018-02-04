<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>

        <h1>Steps followed to create this auth setup</h1>
        <li>
        <ul>composer require laravel/passport</ul>
        <ul>php artisan migrate</ul>
        <ul>php artisan passport:install</ul>
        <ul>User model configurations ( as per laravel docs )</ul>
        <ul>AuthServiceProvider configurations ( as per laravel docs )</ul>
        <ul>config/auth.php configurations ( as per laravel docs )</ul>
        <ul>create user in users table ( using seeding )</ul>
        </li>
        <hr> 

        <h1>Follow these Steps for demo this sample</h1>
        <li>
            <ul>composer install</ul>
            <ul>php artisan migrate:refresh --seed</ul>
        </li>
        <hr>    
               
        <h1>Get Access token</h1>
        <h2>post method :</h2>
        http://127.0.0.1:8000/oauth/token
        <h2>body</h2>
        grant_type:password<br>
        client_id:2<br>
        client_secret:lZwike2KFSYEuujhkZeYDJEAREM2859FFPapBeB2<br>
        username:admin@gmail.com<br>
        password:password<br>
        scope:<br>
        <hr>
        <h1>Get user data</h1>
        <h2>get method :</h2>
        <p>http://127.0.0.1:8000/api/user</p>
        <h2>header</h2>
        <p>Accept:application/json</p>
        <p>Authorization:Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdiYzYyMmNiYmI3NDM2NzMyNzAzNjY5ZTJhM2M3MzE2ZTI2YTM2YzE2MzNhZjJkZjBhNjRjMjJlZTE0MjAyNWMyNjQ1ZmY3NTczOThiNWJhIn0.eyJhdWQiOiIyIiwianRpIjoiN2JjNjIyY2JiYjc0MzY3MzI3MDM2NjllMmEzYzczMTZlMjZhMzZjMTYzM2FmMmRmMGE2NGMyMmVlMTQyMDI1YzI2NDVmZjc1NzM5OGI1YmEiLCJpYXQiOjE1MTUzMTA3MjMsIm5iZiI6MTUxNTMxMDcyMywiZXhwIjoxNTQ2ODQ2NzIzLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.eWT-cL5iCDC-mU9Ei_cYgwbAu-VLKDRfm-ollWUBv8wAhBZxDirVZSf27pKqkz2xa91TYD1XCIlpv9DXdw3hHlql0vp1j-bcnyiQQWH2AN7vdrVnMdGS69OG5zhG68RxFciZn2EMmI1U9h-rJo05SwDzeJC3hqw8WdRUOylZE0i2TuwcRZv0P7cwt1DrCvz8WZUL0WmnFCGNoXPEYbaXC5xqa-0LOF4LeqF5y7dIhXONyVVwULVWnMXPwIszNpaeVxI1K4tE7ry61DkNOspcj9QgGbTwpwlAlNqsWCfNAJnJMhgL0EFyCOtbFPtgQuaqMffPeJsex0bqdfFbXzx0UvUSRREhVkorOrU7JUMXViQoAobFJdAn8VcPYISzoSWnDCulRWpisKoko_NNltA80OAzCyhxm7ImL-f-5oCQ1KjnQZvodD51klILhUp5DYbUzlPojjy2YgBjFAaO735S_N8YAoqrSaWvo34EoZxVLhMEmw-l2_JpI6EIaP8f39eZhYkITyNDY7XuZMz3ZqfhTvOyjPU_f0P6ZLllx4KPBtJ1yDk-hN1xv0DOU3NG8fwQA8mqdMxke629rdFf3IwlQX1YH59CjdqYQIqkOQZ8zyKObKZI2DEWYoDn833tuWxkKbAd_Vrf91bPpf-yk5fpKvu8QTYU0TmfVF3SnhLCKNo
        </p>

    </body>
</html>
