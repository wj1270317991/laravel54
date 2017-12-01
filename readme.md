laravel 操作

    1.修改数据库用户名密码
    
    2.php artisan key:generate
    
    3.修改环境变量
        bootstrap -> app.php
            $environment = getenv('DEV_ENV') ? '.' . getenv('DEV_ENV') : '';
            $app->loadEnvironmentFrom('.env'.$environment);
    4.添加门面 foo
        具体看 
        *https://www.cnblogs.com/ontheway1024/p/7100524.html*
     