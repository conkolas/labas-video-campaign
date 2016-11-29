"use strict";

// check if currect screen width is XS; requires additional div in DOM
function isScreenXS() {
    return $('#bs-detect-xs').is(":visible");
}

var navMenuOpen = false;
var loginPaneOpen = false;
var userMenuOpen = false;
//var body = $('body');

var navbarHeightMobile = 60; // same value in less

var navbar = {

    updateMenuState: function () {

        if (navMenuOpen || loginPaneOpen || userMenuOpen) {
            $('body').addClass('mobile-menu-open');

            if (isScreenXS()) {
                // set height using js, if vh is not supported
                var windowHeight = $(window).height() - navbarHeightMobile;

                $('.navbar-nav').css({'height': windowHeight + 'px'});
                $('.user-menu').css({'height': windowHeight + 'px'});
                $('.page-wrapper').css({'height': windowHeight + 'px'});

                $('.navbar-nav').appendTo('.page-wrapper');
                $('.user-menu').appendTo('.page-wrapper');
            }

        } else {
            $('body').removeClass('mobile-menu-open');

            // reset forced element height
            if (isScreenXS()) {
                $('.page-wrapper').css({'height': ''});
                $('.navbar-nav').prependTo('.navbar-right');
                $('.user-menu').appendTo('.user-menu-toggle-wrapper');
            }

        }
        if (navMenuOpen) {
            $('body').addClass('nav-menu-open');
        } else {
            $('body').removeClass('nav-menu-open');
        }
        if (loginPaneOpen) {
            $('body').addClass('login-pane-open');
        } else {
            $('body').removeClass('login-pane-open');
        }
        if (userMenuOpen) {
            $('body').addClass('user-menu-open');
        } else {
            $('body').removeClass('user-menu-open');
        }
    },

    init: function () {
        var _self = this;

        // init header
        var myElement = document.querySelector(".navbar");
        /*var headroom = new Headroom(myElement, {
            offset: 178, tolerance: 5, onUnpin: function () {

                // do not hide pane on scroll when in mobile width
                if (isScreenXS()) return;

                // hide all menus on navbar hide
                navMenuOpen = false;
                loginPaneOpen = false;
                userMenuOpen = false;
                _self.updateMenuState();
            }
        });
        headroom.init();*/

        // mobile-menu toggle
        $('.navbar-toggle').click(function (el) {
            el.preventDefault();
            navMenuOpen = !navMenuOpen;
            loginPaneOpen = false;
            userMenuOpen = false;
            _self.updateMenuState();
        });

        // login-pane toggle
        $('#button-login').click(function (el) {

            // display pane only when clicking on button
            // TODO: remove after moving menu html out of button code
            var target = el.target;
            if ($(target).closest('.login-pane').length > 0) return;

            // in XS redirect to login page
            //if (isScreenXS()) {
                window.location.href = $(this).attr('data-login-url');
                return;
            //}

            el.preventDefault();
            loginPaneOpen = !loginPaneOpen;
            navMenuOpen = false;
            userMenuOpen = false;
            _self.updateMenuState();
        });


        // user menu toggle
        $('#user-menu-toggle').click(function(el) {
            el.preventDefault();
            userMenuOpen = !userMenuOpen;
            loginPaneOpen = false;
            navMenuOpen = false;
            _self.updateMenuState();
        });

        //mini menu toggle
        $('.navbar-mini-button-holder').hover(
            function(){$('.navbar-mini').addClass('hover')}, 
            function(){$('.navbar-mini').removeClass('hover')}
        );
        $('.navbar-mini-button-holder').on('click tap', function(){
            $('.navbar-mini').addClass('inactive');
            $('.navbar-wrapper').addClass('active');
        });

    }
};

$(function () {
    window.navbar.init();
});
