<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Framework\Baseapp\Helpers\ResourceContainer;

$middlewareCors = [
    'api',
    'cors',
];

$middlewareAuth = [
    'auth:api',
    'cors',
    Framework\Baseapp\Middleware\AuthUserMiddleware::class,

    //Framework\Baseapp\Helpers\ResourceContainer::class,
    //Framework\Baseapp\Middleware\AuthenticateMiddleware::class,
    //Framework\Baseapp\Middleware\AutoRenewJwtToken::class,
];
$middlewareBackend = array_merge($middlewareAuth, [
    Framework\Baseapp\Middleware\BackendMiddleware::class,
    Framework\Baseapp\Middleware\PermissionMiddleware::class,
]);
//print_r($middlewareBackend);exit();

$routes = app()->make(ResourceContainer::class)->initRouteDatas();
//print_R($routes);
foreach ((array) $routes as $app => $aRoutes) {
    foreach ($aRoutes as $resourceCode => $rRoutes) {
        foreach ($rRoutes as $routeCode => $routeData) {
            //Route::group(['middleware' => $middlewareBackend], function() use ($routeData, $app) {
            Route::middleware($middlewareBackend)->group(function() use ($routeData, $app) {
                //echo implode(',', $routeData['method']) . '==' . '/' . $app . $routeData['path'] . '==' . $routeData['callback'] . "\n";
                Route::match($routeData['method'], '/' . $app . $routeData['path'], $routeData['callback'])->name($routeData['code']);
            });
        }
    }
}

Route::match(['OPTIONS', 'GET', 'POST', 'HEAD'], '/', '\App\Http\Controllers\IndexController@index');
Route::get('/passport/captcha', '\ModulePassport\Controllers\CommonController@captcha');
Route::get('/passport/validate-captcha', '\ModulePassport\Controllers\CommonController@validateCaptcha');
Route::middleware($middlewareCors)->post('/passport/send-code', '\ModulePassport\Controllers\CommonController@sendCode');
Route::get('/passport/validate-code', '\ModulePassport\Controllers\CommonController@validateCode');

Route::addRoute(['GET', 'POST'], '/passport/logout', '\ModulePassport\Controllers\EntranceController@logout');

Route::post('/passport/signup', '\ModulePassport\Controllers\EntranceController@signup');
Route::post('/passport/signupin', '\ModulePassport\Controllers\EntranceController@signupin');
Route::post('/passport/token', '\ModulePassport\Controllers\EntranceController@token');
Route::post('/passport/signin', '\ModulePassport\Controllers\EntranceController@signin');
//Route::post('/passport/manager/token', '\ModulePassport\Controllers\EntranceController@managerToken'); // 扩展使用管理员登录job

Route::middleware($middlewareAuth)->get('/passport/myinfo', '\ModulePassport\Controllers\UserController@myinfo');
Route::middleware($middlewareAuth)->post('/passport/refresh-token', '\ModulePassport\Controllers\EntranceController@refresh');
Route::middleware($middlewareBackend)->get('/passport/my-routes', '\ModulePassport\Controllers\EntranceController@myRoutes');

Route::get('/passport/oss-{action}', '\ModulePassport\Controllers\CommonController@oss');
Route::any('/passport/test', '\ModulePassport\Controllers\TestController@test');

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*$authAttributes = [
    'prefix' => '',
    'namespace' => 'Auth',
    //'middleware' => 'cors',
];

Route::group($authAttributes, function() {
    Route::post('login', 'AuthController@login');//->name('login'); // 用户名、密码登录接口
    Route::post('refresh', 'AuthController@refresh');
    Route::get('register', 'RegisterController@register');
});*/
