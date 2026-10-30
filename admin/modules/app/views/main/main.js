var app=angular.module('groveusCms',['ui.bootstrap','ui.router','summernote','angularUtils.directives.dirPagination']);

// ── Compatibility shim: restore .success() and .error() removed in AngularJS 1.6+ ──
app.config(['$provide', function($provide) {
    $provide.decorator('$http', ['$delegate', function($delegate) {
        function addLegacyCallbacks(promise) {
            promise.success = function(fn) {
                promise.then(function(res) { fn(res.data, res.status, res.headers, res.config); });
                return promise;
            };
            promise.error = function(fn) {
                promise.then(null, function(res) { fn(res.data, res.status, res.headers, res.config); });
                return promise;
            };
            return promise;
        }
        ['get','post','put','delete','patch','head','jsonp'].forEach(function(m) {
            var orig = $delegate[m];
            $delegate[m] = function() { return addLegacyCallbacks(orig.apply($delegate, arguments)); };
        });
        var origReq = $delegate;
        return $delegate;
    }]);
}]);

// ── Universal Date-Time Formatter Filter: e.g. "28 Oct 2026 06:16 PM" ──
app.filter('formatDateTime', function() {
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    return function(input) {
        if (!input) return '';
        var str = ('' + input).trim();
        
        // Match SQL datetime format: YYYY-MM-DD HH:mm:ss or YYYY-MM-DD
        var match = str.match(/^(\d{4})-(\d{2})-(\d{2})(?:[ T](\d{2}):(\d{2})(?::(\d{2}))?)?/);
        if (match) {
            var year = match[1];
            var monthIdx = parseInt(match[2], 10) - 1;
            var month = months[monthIdx] || match[2];
            var day = match[3];
            
            if (match[4] !== undefined && match[5] !== undefined) {
                var hour24 = parseInt(match[4], 10);
                var min = match[5];
                var ampm = hour24 >= 12 ? 'PM' : 'AM';
                var hour12 = hour24 % 12;
                if (hour12 === 0) hour12 = 12;
                var hourStr = (hour12 < 10 ? '0' : '') + hour12;
                return day + ' ' + month + ' ' + year + ' ' + hourStr + ':' + min + ' ' + ampm;
            }
            return day + ' ' + month + ' ' + year;
        }
        
        // Fallback for JS Date or Unix timestamp
        var d = new Date(input);
        if (!isNaN(d.getTime())) {
            var day = ('0' + d.getDate()).slice(-2);
            var month = months[d.getMonth()];
            var year = d.getFullYear();
            var hours = d.getHours();
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;
            var hourStr = ('0' + hours).slice(-2);
            var minStr = ('0' + d.getMinutes()).slice(-2);
            return day + ' ' + month + ' ' + year + ' ' + hourStr + ':' + minStr + ' ' + ampm;
        }
        
        return input;
    };
});

// ── Simple Date Formatter Filter: e.g. "28 Oct 2026" ──
app.filter('formatDate', function() {
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    return function(input) {
        if (!input) return '';
        var str = ('' + input).trim();
        var match = str.match(/^(\d{4})-(\d{2})-(\d{2})/);
        if (match) {
            var year = match[1];
            var monthIdx = parseInt(match[2], 10) - 1;
            var month = months[monthIdx] || match[2];
            var day = match[3];
            return day + ' ' + month + ' ' + year;
        }
        var d = new Date(input);
        if (!isNaN(d.getTime())) {
            return ('0' + d.getDate()).slice(-2) + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
        }
        return input;
    };
});

app.config(function($stateProvider, $urlRouterProvider)
{
    $urlRouterProvider.otherwise('/home');
    $stateProvider
    	.state('home', {
	        url: '/home',
	        templateUrl: 'dashboard/admin',
	        controller: 'ctrl_dashboard'
    	})
    	.state('contact', {
	        url: '/contact',
	        templateUrl: 'contact',
	        controller: 'ctrl_contact'
		})
		.state('newsletter', {
	        url: '/newsletter',
	        templateUrl: 'newsletter',
	        controller: 'ctrl_newsletter'
		})
		.state('city', {
	        url: '/city',
	        templateUrl: 'city',
	        controller: 'ctrl_city'
		})
		.state('booking', {
	        url: '/booking',
	        templateUrl: 'contact/booking',
	        controller: 'ctrl_booking'
    	})
    	.state('reviews', {
	        url: '/reviews',
	        templateUrl: 'reviews',
	        controller: 'ctrl_reviews'
    	})
    	.state('offers', {
	        url: '/offers',
	        templateUrl: 'offers',
	        controller: 'ctrl_offers'
    	})
    	.state('informations', {
	        url: '/informations',
	        templateUrl: 'informations',
	        controller: 'ctrl_informations'
		})
		.state('organisation', {
	        url: '/organisation',
	        templateUrl: 'organisation',
	        controller: 'ctrl_organisation'
		})
		.state('slider', {
	        url: '/slider',
	        templateUrl: 'slider',
	        controller: 'ctrl_slider'
    	})
    	.state('sub_menu', {
	        url: '/sub_menu',
	        templateUrl: 'sub_menu',
	        controller: 'ctrl_sub_menu'
    	})
    	.state('users', {
	        url: '/users',
	        templateUrl: 'users',
	        controller: 'ctrl_users'
    	})
    	.state('gallery', {
	        url: '/gallery',
	        templateUrl: 'gallery',
	        controller: 'ctrl_gallery'
    	})
    	.state('videogallery', {
	        url: '/videogallery',
	        templateUrl: 'videogallery',
	        controller: 'ctrl_videogallery'
    	})
    	.state('blog', {
	        url: '/blog',
	        templateUrl: 'blog',
	        controller: 'ctrl_blog'
		})
		.state('ship_main', {
	        url: '/ship_main',
	        templateUrl: 'ship_main',
	        controller: 'ctrl_ship_main'
		})
		.state('ship_tracking', {
	        url: '/ship_tracking',
	        templateUrl: 'ship_tracking',
	        controller: 'ctrl_ship_tracking'
		})
		.state('team', {
	        url: '/team',
	        templateUrl: 'team',
	        controller: 'ctrl_team'
    	})
    	.state('page', {
	        url: '/page',
	        templateUrl: 'page',
	        controller: 'ctrl_page'
    	})
	   	.state('admin_profile', {
	        url: '/admin_profile',
	        templateUrl: 'admin_profile',
	        controller: 'ctrl_admin'
    	})
	    .state('change_logo', {
	        url: '/change_logo',
	        templateUrl: 'change_logo',
	        controller: 'ctrl_change_logo'
	     })
	    .state('change_password', {
	        url: '/change_password',
	        templateUrl: 'login/change_password',
	        controller: 'ctrl_login'
	    })
	    .state('logs', {
	        url: '/logs',
	        templateUrl: 'logs',
	        controller: 'ctrl_logs'
	    })
	    .state('settings', {
	        url: '/settings',
	        templateUrl: 'settings',
	        controller: 'ctrl_settings'
	    });
});

// ── Global Processing / Page Loader on state transition ──
app.run(['$rootScope', '$timeout', function($rootScope, $timeout) {
    var loaderTimer;
    function showLoader() {
        var el = document.getElementById('global-page-loader');
        if (el) el.classList.add('active');
    }
    function hideLoader(delay) {
        $timeout.cancel(loaderTimer);
        loaderTimer = $timeout(function() {
            var el = document.getElementById('global-page-loader');
            if (el) el.classList.remove('active');
        }, delay !== undefined ? delay : 200);
    }

    $rootScope.$on('$stateChangeStart', function() {
        showLoader();
        if (document.body) {
            document.body.classList.remove('sidebar-mobile-open');
        }
    });
    $rootScope.$on('$stateChangeSuccess', function() {
        hideLoader(220);
    });
    $rootScope.$on('$stateChangeError', function() {
        hideLoader(0);
    });
}]);
