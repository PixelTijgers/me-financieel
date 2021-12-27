/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Import the autload view file.
import AutoloadViews from './AutoloadViews';

// Require Boostrap services.
require('./bootstrap');

// Load common files.
require('./View.js');

// Init Common & load.
(window['Common'] = require('./load.js')).init();

// Auto load views
AutoloadViews.load('../', require.context('../', true, /.(js|vue)$/));
