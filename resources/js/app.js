import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';
import $ from 'jquery';
window.$ = $;
window.jQuery = $;

$(document).ready(function () {
    // header 
    $('.sidebar-menu').on('click', function () {
        $('body').addClass('overflow-hidden');
    });
    $('.offcanvas-overlay').on('click', function () {
        $('body').removeClass('overflow-hidden');
    });
    $('.offcanvas-close').on('click', function () {
        $('body').removeClass('overflow-hidden');
    });
    // Chat Search Visible
    $('.user-chat-search-btn').on('click', function () {
        $('.user-chat-search').addClass('visible-chat');
    });
    $('.user-close-btn-chat').on('click', function () {
        $('.user-chat-search').removeClass('visible-chat');
    });
    $(".sidebar-menu").on("click", function () {
        $(".offcanvas-info").addClass("show");
        $(".offcanvas-overlay").addClass("overlay-open");
    });
    $(".left_sides").on('click', function () {
        if ($(window).width() <= 991) {
            $('.sidebar-group').removeClass('hide-left-sidebar');
            $('.sidebar-menu').removeClass('d-none');
        }
    });
    $(".chat-user-list").on('click', function () {
        if ($(window).width() <= 767) {
            $('.left-sidebar').addClass('hide-left-sidebar');
            $('.sidebar-menu').addClass('d-none');
        }
    });

    $(".chat-header .left_side i, .page-header .left_side i").on('click', function () {
        $('.left-sidebar').removeClass('hide-left-sidebar');
        $('.chat').removeClass('show-chatbar');
        $('.sidebar-menu').removeClass('d-none');
    });

    // header 
    $('.sidebar-menu').on('click', function () {
        $('body').addClass('overflow-hidden');
    });
    $('.offcanvas-overlay').on('click', function () {
        $('body').removeClass('overflow-hidden');
    });
    $('.offcanvas-close').on('click', function () {
        $('body').removeClass('overflow-hidden');
    });
    // Chat Search Visible
    $('.user-chat-search-btn').on('click', function () {
        $('.user-chat-search').addClass('visible-chat');
    });
    $('.user-close-btn-chat').on('click', function () {
        $('.user-chat-search').removeClass('visible-chat');
    });
});