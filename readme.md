laravel 操作

    1.修改数据库用户名密码
    
    2.php artisan key:generate
    
    3.修改环境变量
        bootstrap -> app.php
            $environment = getenv('DEV_ENV') ? '.' . getenv('DEV_ENV') : '';
            $app->loadEnvironmentFrom('.env'.$environment);
           
     