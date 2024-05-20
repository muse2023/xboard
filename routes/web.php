<?php

use App\Services\ThemeService;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//首页的路由并且自定义
Route::get('/' . config('index'), function () {
        return view('index', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'logo' => config('v2board.logo')
        ]);
});

//特性
// Route::get('/features' . config('features'), function () {
//     return view('features', [
//         'title' => config('v2board.app_name', 'BigMe'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'logo' => config('v2board.logo')
//     ]);
// });

//价格
// Route::get('/pricing' . config('pricing'), function () {
//     return view('pricing', [
//         'title' => config('v2board.app_name', 'BigMe'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'logo' => config('v2board.logo')
//     ]);
// });


//特别优惠
Route::get('/special-offers' . config('special-offers'), function () {
    return view('special-offers', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'logo' => config('v2board.logo')
    ]);
});

//使用条款
Route::get('/aup' . config('aup'), function () {
    return view('aup', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'logo' => config('v2board.logo')
    ]);
});

//服务水平保障
Route::get('/sla' . config('sla'), function () {
    return view('sla', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'logo' => config('v2board.logo')
    ]);
});

//兼容客户端
// Route::get('/compatible-apps' . config('compatible-apps'), function () {
//     return view('compatible-apps', [
//         'title' => config('v2board.app_name', 'BigMe'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'url' => config('v2board.app_url'),
//         'logo' => config('v2board.logo')
//     ]);
// });

//协议使用
// Route::get('/protocol-use' . config('protocol-use'), function () {
//     return view('protocol-use', [
//         'title' => config('v2board.app_name', 'BigMe'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'url' => config('v2board.app_url'),
//         'logo' => config('v2board.logo')
//     ]);
// });

//流媒体解锁
Route::get('/streaming' . config('streaming'), function () {
    return view('streaming', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'logo' => config('v2board.logo')
    ]);
});

//推荐计划
Route::get('/referral-program' . config('referral-program'), function () {
    return view('referral-program', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'logo' => config('v2board.logo')
    ]);
});

//视频创作者计划
// Route::get('/video-creator' . config('video-creator'), function () {
//     return view('video-creator', [
//         'title' => config('v2board.app_name', 'BigMe'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'url' => config('v2board.app_url'),
//         'logo' => config('v2board.logo')
//     ]);
// });

//问题和答案 就是faq
Route::get('/faq' . config('faq'), function () {
    return view('faq', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'logo' => config('v2board.logo')
    ]);
});


//联系我们 -- 要改下面的telegrampindao 和telegramqunliao 的url地址 就是引号内的
Route::get('/contact-us' . config('contact-us'), function () {
    return view('contact-us', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'telegrampindao' => 'https://t.me/bigme_pro',
        'telegramqunliao' => 'https://t.me/bigme_public',
        'logo' => config('v2board.logo')
    ]);
});

//关于我们
// Route::get('/about-us' . config('about-us'), function () {
//     return view('about-us', [
//         'title' => config('v2board.app_name', 'BigMe'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'url' => config('v2board.app_url'),
//         'telegrampindao' => 'https://t.me/bigme_pro',
//         'telegramqunliao' => 'https://t.me/bigme_public',
//         'logo' => config('v2board.logo')
//     ]);
// });

//隐私政策
Route::get('/privacy' . config('privacy'), function () {
    return view('privacy', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'telegrampindao' => 'https://t.me/bigme_pro',
        'telegramqunliao' => 'https://t.me/bigme_public',
        'logo' => config('v2board.logo')
    ]);
});

//服务条款
Route::get('/tos' . config('tos'), function () {
    return view('tos', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'telegrampindao' => 'https://t.me/bigme_pro',
        'telegramqunliao' => 'https://t.me/bigme_public',
        'logo' => config('v2board.logo')
    ]);
});

//通用数据保护条例
Route::get('/gdpr' . config('gdpr'), function () {
    return view('gdpr', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'telegrampindao' => 'https://t.me/bigme_pro',
        'telegramqunliao' => 'https://t.me/bigme_public',
        'logo' => config('v2board.logo')
    ]);
});

//服务特定条款
Route::get('/service-terms' . config('service-terms'), function () {
    return view('service-terms', [
        'title' => config('v2board.app_name', 'BigMe'),
        'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
        'theme_header' => config('v2board.frontend_theme_header', 'dark'),
        'theme_color' => config('v2board.frontend_theme_color', 'default'),
        'background_url' => config('v2board.frontend_background_url'),
        'version' => config('app.version'),
        'url' => config('v2board.app_url'),
        'telegrampindao' => 'https://t.me/bigme_pro',
        'telegramqunliao' => 'https://t.me/bigme_public',
        'logo' => config('v2board.logo')
    ]);
});

Route::get('/user', function (Request $request) {
    if (admin_setting('app_url') && admin_setting('safe_mode_enable', 0)) {
        if ($request->server('HTTP_HOST') !== parse_url(admin_setting('app_url'))['host']) {
            abort(403);
        }
    }
    $renderParams = [
        'title' => admin_setting('app_name', 'Xboard'),
        'theme' => admin_setting('frontend_theme', 'Xboard'),
        'theme_path' => '/theme/netsp/assets/',         
        'version' => config('app.version'),
        'description' => admin_setting('app_description', 'Xboard is best'),
        'logo' => admin_setting('logo')
    ];

    if (!admin_setting("theme_{$renderParams['theme']}")) {
        $themeService = new ThemeService($renderParams['theme']);
        $themeService->init();
    }

    $renderParams['theme_config'] = admin_setting("theme_". admin_setting('frontend_theme', 'Xboard')) ?? config('theme.' . admin_setting('frontend_theme', 'Xboard'));
    return view('theme::' . admin_setting('frontend_theme', 'Xboard') . '.dashboard', $renderParams);
});

//TODO:: 兼容
Route::get('/' . admin_setting('secure_path', admin_setting('frontend_admin_path', hash('crc32b', config('app.key')))), function () {
    return view('admin', [
        'title' => admin_setting('app_name', 'XBoard'),
        'theme_sidebar' => admin_setting('frontend_theme_sidebar', 'light'),
        'theme_header' => admin_setting('frontend_theme_header', 'dark'),
        'theme_color' => admin_setting('frontend_theme_color', 'default'),
        'background_url' => admin_setting('frontend_background_url'),
        'version' => config('app.version'),
        'logo' => admin_setting('logo'),
        'secure_path' => admin_setting('secure_path', admin_setting('frontend_admin_path', hash('crc32b', config('app.key'))))
    ]);
});
