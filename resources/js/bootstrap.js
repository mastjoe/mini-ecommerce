window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    
    require('../compilables/js/vendor/modernizr-3.6.0.min')
    window.$ = window.jQuery = require('jquery');
    // window.$ = window.jQuery = require('../compilables/js/vendor/jquery-3.5.1.min');
    require('../compilables/js/vendor/jquery-migrate-3.3.0.min')
    // require('bootstrap');
    require('../compilables/js/vendor/bootstrap.bundle.min')
    require('../compilables/js/plugins/slick')
    require('../compilables/js/plugins/jquery.syotimer.min')
    // require('../compilables/js/plugins/jquery.instagramfeed.min')
    require('../compilables/js/plugins/jquery.nice-select.min')
    require('../compilables/js/plugins/wow')
    require('../compilables/js/plugins/jquery-ui-touch-punch')
    require('../compilables/js/plugins/jquery-ui')
    require('../compilables/js/plugins/magnific-popup')
    require('../compilables/js/plugins/sticky-sidebar')
    require('../compilables/js/plugins/easyzoom')
    require('../compilables/js/plugins/scrollup')
    require('sweetalert2')
    window.Noty = require('noty')
    // require('../compilables/js/main')
} catch (e) {}

import Util from './util'
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// response interceptor
axios.interceptors.response.use(function(config) {
    return config
}, function(error) {
    const response = error.response
    const status = response.status
    if (status == 422) {
        const errorData = response.data.errors
        const errorKeys = Object.keys(errorData);
        const firstError = errorData[errorKeys[0]][0];
        Util.Noty(firstError, 'error');
    } else if (status == 401) {
        Util.Noty('Unauthenticated', 'error')
    } else {

    }
    return error
})

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
