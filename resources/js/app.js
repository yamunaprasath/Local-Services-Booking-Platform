import 'bootstrap';
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import '@fortawesome/fontawesome-free/css/all.min.css';
import ApexCharts from 'apexcharts';
import Quill from "quill";
import "quill/dist/quill.snow.css";


import $ from 'jquery';
window.$ = window.jQuery = $;

import select2 from "select2";
import "select2/dist/css/select2.min.css";

select2($);
Promise.all([
    import('../plugins/slimscroll/jquery.slimscroll.min.js'),
    import('./jquery.meanmenu.min.js')
]).then(() => {

    $(function () {
        $("#mobile-menu").meanmenu({
            meanMenuContainer: ".mobile-menu",
            meanScreenWidth: "991",
            meanExpand: ['<i class="ti ti-plus"></i>'],
        });

        $(".sidebar-menu").on("click", function () {
            $(".offcanvas-info").addClass("show");
            $(".offcanvas-overlay").addClass("overlay-open");
        });

        var $slimScrolls = $('.slimscroll');

        if ($slimScrolls.length > 0) {
            $slimScrolls.slimScroll({
                height: 'auto',
                width: '100%',
                position: 'right',
                size: '7px',
                color: '#ccc',
                wheelStep: 10,
                touchScrollStep: 100
            });
            var wHeight = $(window).height();
            $slimScrolls.height(wHeight);
            $('.left-sidebar .slimScrollDiv, .sidebar-menu .slimScrollDiv, .sidebar-menu .slimScrollDiv').height(wHeight);
            $('.right-sidebar .slimScrollDiv').height(wHeight - 30);
            $('.chat .slimScrollDiv').height(wHeight - 70);
            $('.chat.settings-main .slimScrollDiv').height(wHeight);
            $('.right-sidebar.video-right-sidebar .slimScrollDiv').height(wHeight - 90);
            $(window).resize(function () {
                var rHeight = $(window).height();
                $slimScrolls.height(rHeight);
                $('.left-sidebar .slimScrollDiv, .sidebar-menu .slimScrollDiv, .sidebar-menu .slimScrollDiv').height(rHeight);
                $('.right-sidebar .slimScrollDiv').height(wHeight - 30);
                $('.chat .slimScrollDiv').height(rHeight - 70);
                $('.chat.settings-main .slimScrollDiv').height(wHeight);
                $('.right-sidebar.video-right-sidebar .slimScrollDiv').height(wHeight - 90);
            });
        }

        $(".left_sides").on('click', function () {
            if ($(window).width() <= 991) {
                $('.sidebar-group').removeClass('hide-left-sidebar');
                $('.sidebar-menu').removeClass('d-none');
            }
        });
        $(".offcanvas-close,.offcanvas-overlay").on("click", function () {
            $(".offcanvas-info").removeClass("show");
            $(".offcanvas-overlay").removeClass("overlay-open");
        });

        $('.sidebar-menu').on('click', function () {
            $('body').addClass('overflow-hidden');
        });
        $('.offcanvas-overlay').on('click', function () {
            $('body').removeClass('overflow-hidden');
        });
        $('.offcanvas-close').on('click', function () {
            $('body').removeClass('overflow-hidden');
        });
    });

    $(document).on("click", ".has-submenu > a:first-child", function (e) {
        e.preventDefault();

        var $parent = $(this).closest(".has-submenu");
        var $submenu = $parent.children("ul.submenu");

        // Close all other open submenus
        $(".has-submenu").not($parent).children("ul.submenu:visible").slideUp(300);

        // Toggle current submenu
        $submenu.slideToggle(300);
    });

    $('.user-sidebar a').on('click', function (e) {
        if ($(this).parent().hasClass('submenu')) {
            e.preventDefault();
        }
        if (!$(this).hasClass('subdrop')) {
            $('ul', $(this).parents('ul:first')).hide(350);
            $('a', $(this).parents('ul:first')).removeClass('subdrop');
            $(this).next('ul').show(350);
            $(this).addClass('subdrop');
        } else if ($(this).hasClass('subdrop')) {
            $(this).removeClass('subdrop');
            $(this).next('ul').hide(350);
        }
    });

    // Sticky Header
    $(window).scroll(function () {
        if ($(this).scrollTop() > 130) {
            $("header").addClass("fixed");
        } else {
            $("header").removeClass("fixed");
        }
    });

    if ($('#earning-chart').length > 0) {
        var sColStacked = {
            chart: {
                height: 280,
                type: 'bar',
                stacked: true,
                toolbar: {
                    show: false,
                }
            },
            colors: ['#0E9384', '#E4EBF1'],
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],
            plotOptions: {
                bar: {
                    borderRadius: 5,
                    borderRadiusWhenStacked: 'all',
                    horizontal: false,
                    endingShape: 'rounded'
                },
            },
            series: [{
                name: 'Income',
                data: [5000, 16000, 8000, 5000, 4000, 5000, 12000, 5000, 8000, 5000, 5000, 8000]
            }, {
                name: 'Expenses',
                data: [5000, 4000, 4000, 5000, 8000, 5000, 4000, 5000, 4000, 5000, 5000, 4000]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                labels: {
                    style: {
                        colors: '#4E5561',
                        fontSize: '12px',
                    }
                }
            },
            yaxis: {
                labels: {
                    formatter: (val) => {
                        return val / 1000 + 'K'
                    },
                    offsetX: -15,
                    style: {
                        colors: '#4E5561',
                        fontSize: '13px',
                    }
                }
            },
            grid: {
                show: false,
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false // Disable data labels
            },
            fill: {
                opacity: 1
            },
        }

        var chart = new ApexCharts(
            document.querySelector("#earning-chart"),
            sColStacked
        );

        chart.render();
    }

    if ($('#booking-chart').length > 0) {
        var donutChart = {
            chart: {
                height: 180,
                type: 'donut',
                toolbar: {
                    show: false,
                }
            },
            legend: {
                show: false
            },
            colors: ['#212E47', '#3538CD', '#0E9384', '#CF3425', '#98AA30'],
            series: [25, 15, 35, 5, 20],
            labels: ['Cruise', 'Cars', 'Hotels', 'Tour', 'Flights'],
            plotOptions: {
                pie: {
                    donut: {
                        size: '65%', // Adjust the inner radius of the donut
                    },
                },
            },
            stroke: {
                width: 3, // Adds space between segments
                colors: ['#fff'], // Color of the gap (white in this case)
            },
            dataLabels: {
                enabled: false, // Hides the data labels
            },
        }

        var donut = new ApexCharts(
            document.querySelector("#booking-chart"),
            donutChart
        );

        donut.render();
    }

    if ($(window).width() > 1199) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 130) {
                $(".theiaStickySidebar").addClass("fixed");
            } else {
                $(".theiaStickySidebar").removeClass("fixed");
            }
        });
    }

    let today = new Date();
    let afterThreeDays = new Date();
    afterThreeDays.setDate(today.getDate() + 3);

    flatpickr(".available-date", {
        mode: "range",
        dateFormat: "d-m-Y",
        defaultDate: [today, afterThreeDays]
    });

    let quill;

    const editor = document.querySelector(".snow-editor");

    if (editor) {
        quill = new Quill(editor, {
            theme: "snow",
            modules: {
                toolbar: [
                    ["bold", "italic", "underline"],
                    [{ header: [null, 1, 2, 3, 4, 5, 6] }],
                    [{ list: "ordered" }, { list: "bullet" }],
                    ["link", "image", "video"]
                ]
            }
        });
    }

    $('form').on('submit', function () {
        if (quill) {
            $('#description').val(quill.root.innerHTML);
        }
    });

    $('form').on('submit', function () {
        $('#description').val(quill.root.innerHTML);
    });

    // Add Highlight
    $(".add-highlight").on('click', function () {
        var addcontent =
            '<div class="col-md-12 highlight-info">' +
            '<div class="mb-3">' +
            '<label for="highlights" class="form-label">Highlights</label>' +
            '<div class="d-flex align-items-center">' +
            '<input type="text" name="highlight[]" class="form-control">' +
            '<a class="text-danger trash-icon d-flex align-items-center justify-content-center ms-3"><i class="isax isax-trash"></i></a>' +
            '</div>'
        '</div>' +
            '</div>';
        $(".add-highlight-info").append(addcontent);
        $('.select').select2({
            minimumResultsForSearch: -1,
            width: '100%'
        });
        return false;
    });

    $(".add-highlight-info").on('click', '.trash-icon', function () {
        $(this).closest('.highlight-info').remove();
        return false;
    });


    $("#add-faq").click(function () {

        let faq = `
        <div class="row faq-item mb-3 align-items-center">
            <div class="col-md-5">
                <input type="text" name="faq_question[]" class="form-control"
                    placeholder="Question *" required>
            </div>
            <div class="col-md-5">
                <input type="text" name="faq_answer[]" class="form-control"
                    placeholder="Answer *" required>
            </div>
            <div class="col-md-2">
                <button type="button"
                    class="trash-icon border-0 d-flex align-items-center justify-content-center remove-faq">
                    <i class="isax isax-trash text-danger"></i>
                </button>
            </div>
        </div>
        `;

        $("#faq-list").append(faq);

    });

    $(document).on("click", ".remove-faq", function () {
        $(this).closest(".faq-item").remove();
    });

    const galleryInput = document.getElementById('galleryInput');

    if (galleryInput) {
        galleryInput.addEventListener('change', function (e) {

            let preview = document.getElementById('galleryPreview');
            preview.innerHTML = '';

            let files = e.target.files;

            for (let i = 0; i < files.length; i++) {

                let reader = new FileReader();

                reader.onload = function (event) {

                    let html = `
                    <div class="gallery-upload-img me-2">
                        <img src="${event.target.result}" alt="Img">
                        <span class="trash-icon d-flex align-items-center justify-content-center text-danger gallery-trash">
                            <i class="isax isax-trash"></i>
                        </span>
                    </div>
                `;

                    preview.insertAdjacentHTML('beforeend', html);
                };

                reader.readAsDataURL(files[i]);
            }

        });
    }

    $(document).on("click", ".gallery-trash", function () {
        $(this).parent().hide();
    });
});