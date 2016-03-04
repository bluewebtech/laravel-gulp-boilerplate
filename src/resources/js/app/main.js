import jQuery from 'script!jquery';
import Vue from 'vue';
import Foundation from 'script!foundation-sites';

var app = new Vue({
    el: 'html',
    components: {},
    ready: function() {
        $(document).foundation();
    },
    data:
    {
        name: 'Bob Barker',
        message: 'Please Have Your Pets Spayed Neutered'
    }
});