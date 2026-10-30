<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * Application Routes - ONLY Frontend Routes (Exact CI3 Pattern)
 */

// Default & Home
$routes->get('/', '\Modules\Home\Controllers\Home::index');
$routes->get('home', '\Modules\Home\Controllers\Home::index');

// Company / About Routes
$routes->get('about-us', '\Modules\About\Controllers\About::index');
$routes->get('about', '\Modules\About\Controllers\About::index');
$routes->get('faqs', '\Modules\About\Controllers\About::faqs');
$routes->get('testimonials', '\Modules\About\Controllers\About::testimonials');
$routes->get('privacy-policy', '\Modules\About\Controllers\About::privacy');
$routes->get('privacy', '\Modules\About\Controllers\About::privacy');
$routes->get('terms-and-conditions', '\Modules\About\Controllers\About::terms');
$routes->get('terms', '\Modules\About\Controllers\About::terms');

// Contact Us & Enquiries Routes (Exact CI3 Pattern)
$routes->get('contact-us', '\Modules\Contacts\Controllers\Contacts::index');
$routes->get('contact', '\Modules\Contacts\Controllers\Contacts::index');
$routes->match(['get', 'post'], 'contacts/booking', '\Modules\Contacts\Controllers\Contacts::booking');
$routes->match(['get', 'post'], 'contacts/contact', '\Modules\Contacts\Controllers\Contacts::contact');
$routes->post('contact/send', '\Modules\Contacts\Controllers\Contacts::send');
$routes->get('contacts/quoteform', '\Modules\Contacts\Controllers\Contacts::quoteform');
$routes->get('contacts/quotemodal', '\Modules\Contacts\Controllers\Contacts::quotemodal');
$routes->get('contacts/review_modal', '\Modules\Contacts\Controllers\Contacts::review_modal');

// Services Routes
$routes->get('our-services', '\Modules\Services\Controllers\Services::index');
$routes->get('services', '\Modules\Services\Controllers\Services::index');
$routes->get('services/(:segment)', '\Modules\Services\Controllers\Services::detail/$1');
$routes->get('home-relocation', '\Modules\Services\Controllers\Services::detail/household-moving');
$routes->get('office-relocation', '\Modules\Services\Controllers\Services::detail/office-relocation');
$routes->get('bike-transportation', '\Modules\Services\Controllers\Services::detail/vehicle-transportation');
$routes->get('car-transportation', '\Modules\Services\Controllers\Services::detail/vehicle-transportation');
$routes->get('packing-and-moving', '\Modules\Services\Controllers\Services::detail/packing-moving');
$routes->get('loading-unloading', '\Modules\Services\Controllers\Services::detail/loading-unloading');
$routes->get('storage-services', '\Modules\Services\Controllers\Services::detail/warehouse-storage');

// Branch / City Routes (Packers & Movers)
$routes->get('our-branches', '\Modules\City\Controllers\City::index');
$routes->get('city', '\Modules\City\Controllers\City::index');
$routes->get('city/(:segment)', '\Modules\City\Controllers\City::state/$1');
$routes->get('city/(:segment)/(:segment)', '\Modules\City\Controllers\City::cityDetail/$1/$2');

// State Direct Routes (CI3 Pattern)
$states = [
    'bihar',
    'delhi',
    'west-bengal',
    'gujarat',
    'punjab',
    'maharashtra',
    'haryana',
    'rajasthan',
    'uttar-pradesh',
    'jharkhand',
    'assam',
    'karnataka',
    'bangalore',
    'tamil-nadu'
];
foreach ($states as $st) {
    $routes->get($st, '\Modules\City\Controllers\City::state/' . $st);
}

// Gallery Routes (Exact CI3 Pattern)
$routes->get('photo-gallery', '\Modules\Gallery\Controllers\Gallery::photo_gallery');
$routes->get('video-gallery', '\Modules\Gallery\Controllers\Gallery::video_gallery');
$routes->get('gallery/photo_gallery', '\Modules\Gallery\Controllers\Gallery::photo_gallery');
$routes->get('gallery/video_gallery', '\Modules\Gallery\Controllers\Gallery::video_gallery');

// Tracking Routes (Exact CI3 Pattern)
$routes->get('tracking', '\Modules\Tracking\Controllers\Tracking::index');
$routes->post('tracking/track', '\Modules\Tracking\Controllers\Tracking::track');

// Blog Routes (Exact CI3 Pattern)
$routes->get('blog', '\Modules\Blog\Controllers\Blog::index');
$routes->get('blog/view', '\Modules\Blog\Controllers\Blog::view');
$routes->get('blog/view/(:num)', '\Modules\Blog\Controllers\Blog::view/$1');
$routes->get('blog/(:segment)', '\Modules\Blog\Controllers\Blog::read/$1');

// Reviews Routes (Exact CI3 Pattern)
$routes->get('reviews', '\Modules\Reviews\Controllers\Reviews::index');
$routes->post('reviews/submit', '\Modules\Reviews\Controllers\Reviews::submit');
$routes->get('reviews/single/(:num)', '\Modules\Reviews\Controllers\Reviews::single/$1');

// Admin Logout Shortcuts
$routes->get('login/logout', '\Admin\Core\AdminDispatcher::dispatch/login/logout');
$routes->get('logout', '\Admin\Core\AdminDispatcher::dispatch/login/logout');

// Admin Panel Routes (Isolated in admin/routes.php)
if (is_file(ROOTPATH . 'admin/routes.php')) {
    require ROOTPATH . 'admin/routes.php';
}

