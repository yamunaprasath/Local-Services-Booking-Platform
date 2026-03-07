import 'bootstrap';
import flatpickr from 'flatpickr';
import ApexCharts from 'apexcharts';
import Quill from 'quill';
import $ from 'jquery';
import select2 from 'select2';

window.$ = window.jQuery = $;
select2($);

Promise.all([
    import('../plugins/slimscroll/jquery.slimscroll.min.js'),
    import('./jquery.meanmenu.min.js'),
]).then(() => {

    $(function () {

        // Mobile Menu
        $('#mobile-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: '991',
            meanExpand: ['<i class="ti ti-plus"></i>'],
        });

        // Offcanvas Sidebar
        $('.sidebar-menu').on('click', function () {
            $('.offcanvas-info').addClass('show');
            $('.offcanvas-overlay').addClass('overlay-open');
            $('body').addClass('overflow-hidden');
        });

        $('.offcanvas-close, .offcanvas-overlay').on('click', function () {
            $('.offcanvas-info').removeClass('show');
            $('.offcanvas-overlay').removeClass('overlay-open');
            $('body').removeClass('overflow-hidden');
        });

        $('.left_sides').on('click', function () {
            if ($(window).width() <= 991) {
                $('.sidebar-group').removeClass('hide-left-sidebar');
                $('.sidebar-menu').removeClass('d-none');
            }
        });

        // Slimscroll
        var $slimScrolls = $('.slimscroll');

        if ($slimScrolls.length > 0) {
            $slimScrolls.slimScroll({
                height: 'auto',
                width: '100%',
                position: 'right',
                size: '7px',
                color: '#ccc',
                wheelStep: 10,
                touchScrollStep: 100,
            });

            var wHeight = $(window).height();
            $slimScrolls.height(wHeight);
            $('.left-sidebar .slimScrollDiv, .sidebar-menu .slimScrollDiv').height(wHeight);
            $('.right-sidebar .slimScrollDiv').height(wHeight - 30);
            $('.chat .slimScrollDiv').height(wHeight - 70);
            $('.chat.settings-main .slimScrollDiv').height(wHeight);
            $('.right-sidebar.video-right-sidebar .slimScrollDiv').height(wHeight - 90);

            $(window).resize(function () {
                var rHeight = $(window).height();
                $slimScrolls.height(rHeight);
                $('.left-sidebar .slimScrollDiv, .sidebar-menu .slimScrollDiv').height(rHeight);
                $('.right-sidebar .slimScrollDiv').height(rHeight - 30);
                $('.chat .slimScrollDiv').height(rHeight - 70);
                $('.chat.settings-main .slimScrollDiv').height(rHeight);
                $('.right-sidebar.video-right-sidebar .slimScrollDiv').height(rHeight - 90);
            });
        }

        // Sticky Header
        $(window).scroll(function () {
            if ($(this).scrollTop() > 130) {
                $('header').addClass('fixed');
            } else {
                $('header').removeClass('fixed');
            }
        });

        // Sticky Sidebar
        if ($(window).width() > 1199) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 130) {
                    $('.theiaStickySidebar').addClass('fixed');
                } else {
                    $('.theiaStickySidebar').removeClass('fixed');
                }
            });
        }

        // Submenu Toggle
        $(document).on('click', '.has-submenu > a:first-child', function (e) {
            e.preventDefault();
            var $parent = $(this).closest('.has-submenu');
            var $submenu = $parent.children('ul.submenu');
            $('.has-submenu').not($parent).children('ul.submenu:visible').slideUp(300);
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
            } else {
                $(this).removeClass('subdrop');
                $(this).next('ul').hide(350);
            }
        });

        // Flatpickr
        let today = new Date();
        let afterThreeDays = new Date();
        afterThreeDays.setDate(today.getDate() + 3);

        flatpickr('.available-date', {
            mode: 'range',
            dateFormat: 'd-m-Y',
            defaultDate: [today, afterThreeDays],
        });

        // Quill Editor
        let quill;
        const editor = document.querySelector('.snow-editor');

        if (editor) {
            quill = new Quill(editor, {
                theme: 'snow',
                placeholder: 'Write service description here...',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline'],
                        [{ header: [null, 1, 2, 3, 4, 5, 6] }],
                        [{ list: 'ordered' }, { list: 'bullet' }],
                        ['link', 'image', 'video'],
                    ],
                },
            });

            const existingContent = document.getElementById('description');
            if (existingContent && existingContent.value) {
                quill.root.innerHTML = existingContent.value;
            }

            // Sync Quill content to hidden input on form submit
            const serviceForm = document.querySelector('form');
            if (serviceForm) {
                serviceForm.addEventListener('submit', function () {
                    document.getElementById('description').value = quill.root.innerHTML;
                });
            }
        }

        // Add Highlight
        $('.add-highlight').on('click', function () {
            var addcontent =
                '<div class="col-md-12 highlight-info">' +
                '<div class="mb-3">' +
                '<label for="highlights" class="form-label">Highlights</label>' +
                '<div class="d-flex align-items-center">' +
                '<input type="text" name="highlight[]" class="form-control">' +
                '<a class="text-danger trash-icon d-flex align-items-center justify-content-center ms-3">' +
                '<i class="isax isax-trash"></i>' +
                '</a>' +
                '</div>' +
                '</div>' +
                '</div>';
            $('.add-highlight-info').append(addcontent);
            return false;
        });

        $('.add-highlight-info').on('click', '.trash-icon', function () {
            $(this).closest('.highlight-info').remove();
            return false;
        });

        // FAQ
        $('#add-faq').on('click', function () {
            let faq = `
                <div class="row faq-item mb-3 align-items-center">
                    <div class="col-md-5">
                        <input type="text" name="faq_question[]" class="form-control" placeholder="Question *" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="faq_answer[]" class="form-control" placeholder="Answer *" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="trash-icon border-0 d-flex align-items-center justify-content-center remove-faq">
                            <i class="isax isax-trash text-danger"></i>
                        </button>
                    </div>
                </div>
            `;
            $('#faq-list').append(faq);
        });

        $(document).on('click', '.remove-faq', function () {
            $(this).closest('.faq-item').remove();
        });

        // Gallery Upload & Preview
        const galleryInput = document.getElementById('galleryInput');

        if (galleryInput) {

            galleryInput.addEventListener('change', function (e) {
                let preview = document.getElementById('galleryPreview');
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

            // Handle trash clicks for both existing DB images and new uploads
            document.getElementById('galleryPreview').addEventListener('click', function (e) {
                let trashBtn = e.target.closest('.gallery-trash');
                if (!trashBtn) return;

                let card = trashBtn.closest('.gallery-upload-img');
                let existingPath = card.dataset.existing;

                if (existingPath) {
                    let existingInputs = document.getElementById('existingImagesInputs');

                    // Remove the "keep" hidden input for this image
                    existingInputs.querySelectorAll('input[name="existing_gallery[]"]').forEach(input => {
                        if (input.value === existingPath) input.remove();
                    });

                    // Add a "delete" marker so the backend removes it from storage
                    let deleteInput = document.createElement('input');
                    deleteInput.type = 'hidden';
                    deleteInput.name = 'delete_gallery[]';
                    deleteInput.value = existingPath;
                    existingInputs.appendChild(deleteInput);
                }

                card.remove();
            });
        }

        // ApexCharts
        if ($('#earning-chart').length > 0) {
            var earningChart = new ApexCharts(document.querySelector('#earning-chart'), {
                chart: {
                    height: 280,
                    type: 'bar',
                    stacked: true,
                    toolbar: { show: false },
                },
                colors: ['#0E9384', '#E4EBF1'],
                responsive: [{
                    breakpoint: 480,
                    options: { legend: { position: 'bottom', offsetX: -10, offsetY: 0 } },
                }],
                plotOptions: {
                    bar: {
                        borderRadius: 5,
                        borderRadiusWhenStacked: 'all',
                        horizontal: false,
                        endingShape: 'rounded',
                    },
                },
                series: [
                    { name: 'Income', data: [5000, 16000, 8000, 5000, 4000, 5000, 12000, 5000, 8000, 5000, 5000, 8000] },
                    { name: 'Expenses', data: [5000, 4000, 4000, 5000, 8000, 5000, 4000, 5000, 4000, 5000, 5000, 4000] },
                ],
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    labels: { style: { colors: '#4E5561', fontSize: '12px' } },
                },
                yaxis: {
                    labels: {
                        formatter: (val) => val / 1000 + 'K',
                        offsetX: -15,
                        style: { colors: '#4E5561', fontSize: '13px' },
                    },
                },
                grid: { show: false },
                legend: { show: false },
                dataLabels: { enabled: false },
                fill: { opacity: 1 },
            });
            earningChart.render();
        }

        if ($('#booking-chart').length > 0) {
            var bookingChart = new ApexCharts(document.querySelector('#booking-chart'), {
                chart: {
                    height: 180,
                    type: 'donut',
                    toolbar: { show: false },
                },
                legend: { show: false },
                colors: ['#212E47', '#3538CD', '#0E9384', '#CF3425', '#98AA30'],
                series: [25, 15, 35, 5, 20],
                labels: ['Cruise', 'Cars', 'Hotels', 'Tour', 'Flights'],
                plotOptions: {
                    pie: { donut: { size: '65%' } },
                },
                stroke: {
                    width: 3,
                    colors: ['#fff'],
                },
                dataLabels: { enabled: false },
            });
            bookingChart.render();
        }

    });

    // Toggle Password
    if ($('.toggle-password').length > 0) {
        $(document).on('click', '.toggle-password', function () {
            $(this).find('i').toggleClass("isax-eye-slash isax-eye");
            var input = $(this).parent().find(".pass-input");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    }

    document.querySelectorAll('.form-control').forEach(input => {
        input.addEventListener('input', function () {
            this.classList.remove('is-invalid');
            this.closest('.mb-3').querySelector('.invalid-feedback').textContent = '';
        });
    });
});