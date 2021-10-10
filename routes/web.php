<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/dashboard/index-0');
});

Route::get('/dashboard/index-0', function () {
    return view('dashboard.index-0', [
        'title' => 'General Dashboard'
    ]);
});

Route::get('/dashboard/index', function () {
    return view('dashboard.index', [
        'title' => 'Ecommerce Dashboard'
    ]);
});

Route::get('/layout/default', function () {
    return view('pages.default', [
        'title' => 'Layout > Default'
    ]);
});

Route::get('/layout/transparent', function () {
    return view('pages.transparent', [
        'title' => 'Layout > Transprent'
    ]);
});

Route::get('/layout/top-navigation', function () {
    return view('pages.top-navigation', [
        'title' => 'Layout > Top Navigation'
    ]);
});

Route::get('/blank', function () {
    return view('blank', [
        'title' => 'Blank Page'
    ]);
});

Route::get('/bootstrap/alert', function () {
    return view('bootstrap.alert', [
        'title' => 'Bootstrap Components > Alert'
    ]);
});

Route::get('/bootstrap/badge', function () {
    return view('bootstrap.badge', [
        'title' => 'Bootstrap Components > Badge'
    ]);
});

Route::get('/bootstrap/breadcrumb', function () {
    return view('bootstrap.breadcrumb', [
        'title' => 'Bootstrap Components > Breadcrumb'
    ]);
});

Route::get('/bootstrap/buttons', function () {
    return view('bootstrap.buttons', [
        'title' => 'Bootstrap Components > Buttons'
    ]);
});

Route::get('/bootstrap/card', function () {
    return view('bootstrap.card', [
        'title' => 'Bootstrap Components > Card'
    ]);
});

Route::get('/bootstrap/carousel', function () {
    return view('bootstrap.carousel', [
        'title' => 'Bootstrap Components > Carousel'
    ]);
});

Route::get('/bootstrap/collapse', function () {
    return view('bootstrap.collapse', [
        'title' => 'Bootstrap Components > Collapse'
    ]);
});

Route::get('/bootstrap/dropdown', function () {
    return view('bootstrap.dropdown', [
        'title' => 'Bootstrap Components > Dropdown'
    ]);
});

Route::get('/bootstrap/form', function () {
    return view('bootstrap.form', [
        'title' => 'Bootstrap Components > Form'
    ]);
});

Route::get('/bootstrap/list-group', function () {
    return view('bootstrap.list-group', [
        'title' => 'Bootstrap Components > List-group'
    ]);
});

Route::get('/bootstrap/media-object', function () {
    return view('bootstrap.media-object', [
        'title' => 'Bootstrap Components > Media Object'
    ]);
});

Route::get('/bootstrap/modal', function () {
    return view('bootstrap.modal', [
        'title' => 'Bootstrap Components > Modal'
    ]);
});

Route::get('/bootstrap/nav', function () {
    return view('bootstrap.nav', [
        'title' => 'Bootstrap Components > Nav'
    ]);
});

Route::get('/bootstrap/navbar', function () {
    return view('bootstrap.navbar', [
        'title' => 'Bootstrap Components > Navbar'
    ]);
});

Route::get('/bootstrap/pagination', function () {
    return view('bootstrap.pagination', [
        'title' => 'Bootstrap Components > Pagination'
    ]);
});

Route::get('/bootstrap/popover', function () {
    return view('bootstrap.popover', [
        'title' => 'Bootstrap Components > Popover'
    ]);
});

Route::get('/bootstrap/progress', function () {
    return view('bootstrap.progress', [
        'title' => 'Bootstrap Components > Progress'
    ]);
});

Route::get('/bootstrap/table', function () {
    return view('bootstrap.table', [
        'title' => 'Bootstrap Components > Table'
    ]);
});

Route::get('/bootstrap/tooltip', function () {
    return view('bootstrap.tooltip', [
        'title' => 'Bootstrap Components > Tooltip'
    ]);
});

Route::get('/bootstrap/typography', function () {
    return view('bootstrap.typography', [
        'title' => 'Bootstrap Components > Typography'
    ]);
});

Route::get('/components/article', function () {
    return view('components.article', [
        'title' => 'Components > Article'
    ]);
});

Route::get('/components/avatar', function () {
    return view('components.avatar', [
        'title' => 'Components > Avatar'
    ]);
});

Route::get('/components/chat-box', function () {
    return view('components.chat-box', [
        'title' => 'Components > Chat Box'
    ]);
});

Route::get('/components/empty-state', function () {
    return view('components.empty-state', [
        'title' => 'Components > Empty State'
    ]);
});

Route::get('/components/gallery', function () {
    return view('components.gallery', [
        'title' => 'Components > Gallery'
    ]);
});

Route::get('/components/hero', function () {
    return view('components.hero', [
        'title' => 'Components > Hero'
    ]);
});

Route::get('/components/multiple-upload', function () {
    return view('components.multiple-upload', [
        'title' => 'Components > Multiple Upload'
    ]);
});

Route::get('/components/pricing', function () {
    return view('components.pricing', [
        'title' => 'Components > Pricing'
    ]);
});

Route::get('/components/statistic', function () {
    return view('components.statistic', [
        'title' => 'Components > Statistic'
    ]);
});

Route::get('/components/tab', function () {
    return view('components.tab', [
        'title' => 'Components > Tab'
    ]);
});

Route::get('/components/table', function () {
    return view('components.table', [
        'title' => 'Components > Table'
    ]);
});

Route::get('/components/user', function () {
    return view('components.user', [
        'title' => 'Components > User'
    ]);
});

Route::get('/components/wizard', function () {
    return view('components.wizard', [
        'title' => 'Components > Wizard'
    ]);
});

Route::get('/forms/advanced-form', function () {
    return view('forms.advanced-form', [
        'title' => 'Forms > Advanced Form'
    ]);
});

Route::get('/forms/editor', function () {
    return view('forms.editor', [
        'title' => 'Forms > Editor'
    ]);
});

Route::get('/forms/validation', function () {
    return view('forms.validation', [
        'title' => 'Forms > Validation'
    ]);
});

Route::get('/modules/calendar', function () {
    return view('modules.calendar', [
        'title' => 'Modules > Calendar'
    ]);
});

Route::get('/modules/chartjs', function () {
    return view('modules.chartjs', [
        'title' => 'Modules > Chart.js'
    ]);
});

Route::get('/modules/datatables', function () {
    return view('modules.datatables', [
        'title' => 'Modules > Datatables'
    ]);
});

Route::get('/modules/flag', function () {
    return view('modules.flag', [
        'title' => 'Modules > Flag'
    ]);
});

Route::get('/modules/font-awesome', function () {
    return view('modules.font-awesome', [
        'title' => 'Modules > Font Awesome'
    ]);
});

Route::get('/modules/ion-icon', function () {
    return view('modules.ion-icon', [
        'title' => 'Modules > Ion Icons'
    ]);
});

Route::get('/modules/owl-carousel', function () {
    return view('modules.owl-carousel', [
        'title' => 'Modules > Owl Carousel'
    ]);
});

Route::get('/modules/sparkline', function () {
    return view('modules.sparkline', [
        'title' => 'Modules > Sparkline'
    ]);
});

Route::get('/modules/sweet-alert', function () {
    return view('modules.sweet-alert', [
        'title' => 'Modules > Sweet Alert'
    ]);
});

Route::get('/modules/toastr', function () {
    return view('modules.toastr', [
        'title' => 'Modules > Toastr'
    ]);
});

Route::get('/modules/vector-map', function () {
    return view('modules.vector-map', [
        'title' => 'Modules > Vector Map'
    ]);
});

Route::get('/modules/weather-icon', function () {
    return view('modules.weather-icon', [
        'title' => 'Modules > Weather Icons'
    ]);
});

Route::get('/auth/forgot-password', function () {
    return view('auth.forgot-password', [
        'title' => 'Auth > Forgot Password'
    ]);
});

Route::get('/auth/login', function () {
    return view('auth.login', [
        'title' => 'Auth > Login'
    ]);
});

Route::get('/auth/login-2', function () {
    return view('auth.login-2', [
        'title' => 'Auth > Login 2'
    ]);
});

Route::get('/auth/register', function () {
    return view('auth.register', [
        'title' => 'Auth > Register'
    ]);
});

Route::get('/auth/reset-password', function () {
    return view('auth.reset-password', [
        'title' => 'Auth > Reset Password'
    ]);
});

Route::get('/errors/503', function () {
    return view('errors.503', [
        'title' => 'Errors > 503'
    ]);
});

Route::get('/errors/403', function () {
    return view('errors.403', [
        'title' => 'Errors > 403'
    ]);
});

Route::get('/errors/404', function () {
    return view('errors.404', [
        'title' => 'Errors > 404'
    ]);
});

Route::get('/errors/500', function () {
    return view('errors.500', [
        'title' => 'Errors > 500'
    ]);
});

Route::get('/features/activities', function () {
    return view('features.activities', [
        'title' => 'Features > Activities'
    ]);
});

Route::get('/features/post-create', function () {
    return view('features.post-create', [
        'title' => 'Features > Post Create'
    ]);
});

Route::get('/features/posts', function () {
    return view('features.posts', [
        'title' => 'Features > Posts'
    ]);
});

Route::get('/features/profile', function () {
    return view('features.profile', [
        'title' => 'Features > Profile'
    ]);
});

Route::get('/features/settings', function () {
    return view('features.settings', [
        'title' => 'Features > Settings'
    ]);
});

Route::get('/features/setting-detail', function () {
    return view('features.setting-detail', [
        'title' => 'Features > Setting Detail'
    ]);
});

Route::get('/features/tickets', function () {
    return view('features.tickets', [
        'title' => 'Features > Tickets'
    ]);
});

Route::get('/utilities/contact', function () {
    return view('utilities.contact', [
        'title' => 'Utilities > Contact'
    ]);
});

Route::get('/utilities/invoice', function () {
    return view('utilities.invoice', [
        'title' => 'Utilities > Invoice'
    ]);
});

Route::get('/utilities/subcribe', function () {
    return view('utilities.subcribe', [
        'title' => 'Utilities > Subcribe'
    ]);
});

Route::get('/credits', function () {
    return view('credits', [
        'title' => 'Credits'
    ]);
});
