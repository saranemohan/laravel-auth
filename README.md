# laravel-auth
 <h1>Follow these Steps for demo this sample</h1>
        <li>
            <ul>clone this repository</ul>
            <ul>composer install</ul>
            <ul>php artisan migrate:refresh --seed</ul>
        </li>
        <hr>  
        <h1>Steps followed to create this auth setup</h1>
        <ul>
        <li>composer require laravel/passport</li>
        <li>php artisan migrate</li>
        <li>php artisan passport:install</li>
        <li>User model configurations ( as per laravel docs )</li>
        <li>AuthServiceProvider configurations ( as per laravel docs )</li>
        <li>config/auth.php configurations ( as per laravel docs )</li>
        <li>create user in users table ( using seeding )</li>
        </ul>
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
