document.addEventListener('DOMContentLoaded', () => {
  const filterButtons = document.querySelectorAll('.goods-filter-list__link');
  const filterItems = document.querySelectorAll('.js-tab-list .goods-section__list-col');

  if (filterButtons.length > 0 && filterItems.length > 0) {
    filterButtons.forEach((button) => {
      button.addEventListener('click', () => {
        filterButtons.forEach((btn) => {
          btn.classList.remove('is-active');
        });

        button.classList.add('is-active');

        const filterValue = button.getAttribute('data-filter-nav');
        filterItems.forEach((item) => {
          const itemValue = item.getAttribute('data-filter-item');

          if (filterValue === 'js-tab-all' || filterValue === itemValue) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }
});

$(document).ready(function() {
    $('.js-toggle-init').click(function(events) {
        $('body').toggleClass('lock is-show');
    });
    $('.nav__btn').click(function(event) {
        $('body').toggleClass('is-show');
        event.preventDefault();
    });
    $('.js-main-slider-init').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 400,
        slidesToShow: 1,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
    });
    $('.js-footer-title').on('click', function() {
        $(this).closest('.footer-nav-list').toggleClass('active');
    });
    $('.footer-el-wrap__item--title').on('click', function() {
        $(this).closest('.footer-el-wrap__list').toggleClass('active');
    });
    $('.dropdown-list__item--title').on('click', function() {
        $(this).closest('.dropdown-list').toggleClass('active');
    });
    $('.js-nav-link-init').on('click', function() {
        $(this).closest('.nav__item--title').toggleClass('active');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    function updateBodyLock() {
        var hasActiveElements = document.querySelector('.js-nav-link-init.active') !== null ||
                                document.querySelector('.js-search-form-init.active') !== null;
        document.body.classList.toggle('lock', hasActiveElements);
    }

    function handleNavLinkHover() {
        this.classList.add('active');
        this.nextElementSibling.classList.remove('hidden');
        updateBodyLock();
    }

    function handleNavLinkLeave() {
        var navLink = this;
        var dropdownWrap = navLink.nextElementSibling;

        setTimeout(function () {
            var isHovered = navLink.matches(':hover') || dropdownWrap.matches(':hover');
            if (!isHovered) {
                navLink.classList.remove('active');
                dropdownWrap.classList.add('hidden');
                updateBodyLock();
            }
        }, 50);
    }

    function handleDropdownLeave() {
        var navLink = this.previousElementSibling;

        setTimeout(function () {
            var isHovered = navLink.matches(':hover');
            if (!isHovered) {
                navLink.classList.remove('active');
                this.classList.add('hidden');
                updateBodyLock();
            }
        }.bind(this), 50);
    }

    function handleDocumentLeave() {
        document.querySelectorAll('.js-nav-link-init').forEach(function (navLink) {
            navLink.classList.remove('active');
        });
        document.querySelectorAll('.nav__nav-dropdown-wrap').forEach(function (dropdownWrap) {
            dropdownWrap.classList.add('hidden');
        });
        updateBodyLock();
    }

    function handleSearchFormClick() {
        var isActive = this.classList.contains('active');
        this.classList.remove('active');

        if (!isActive) {
            this.classList.add('active');
            document.querySelector('.search-form-box__dropdown-wrap').classList.remove('hidden');
            document.querySelector('.search-form-box__select-box').classList.remove('hidden');
            document.querySelector('.js-search-form-box').classList.add('is-show');
        } else {
            document.querySelector('.search-form-box__dropdown-wrap').classList.add('hidden');
            document.querySelector('.search-form-box__select-box').classList.add('hidden');
            document.querySelector('.js-search-form-box').classList.remove('is-show');
        }

        updateBodyLock();
    }

    function handleSearchBtnCloseClick() {
        document.querySelector('.js-search-form-init').classList.remove('active');
        document.querySelector('.search-form-box__dropdown-wrap').classList.add('hidden');
        document.querySelector('.search-form-box__select-box').classList.add('hidden');
        document.querySelector('.js-search-form-box').classList.remove('is-show');
        updateBodyLock();
    }

    document.querySelectorAll('.js-nav-link-init').forEach(function (navLink) {
        navLink.addEventListener('mouseenter', handleNavLinkHover);
        navLink.addEventListener('mouseleave', handleNavLinkLeave);
    });

    document.querySelectorAll('.nav__nav-dropdown-wrap').forEach(function (dropdownWrap) {
        dropdownWrap.addEventListener('mouseleave', handleDropdownLeave);
    });

    document.addEventListener('mouseleave', function () {
        handleDocumentLeave();
    });

    document.querySelector('.js-search-form-init').addEventListener('click', handleSearchFormClick);
    document.querySelector('.js-search-btn-close-init').addEventListener('click', handleSearchBtnCloseClick);
});

$(document).ready(function () {
    $('.from-filter-list').each(function () {
        var items = $(this).find('.from-filter-list__item');
        if (items.length > 10) {
            items.slice(10).addClass('hidden');
            $(this).next('.js-show-more').removeClass('hidden');
        }
    });

    $('.js-show-more').click(function () {
        var filterList = $(this).prev('.from-filter-list');
        filterList.find('.from-filter-list__item.hidden').removeClass('hidden');
        $(this).addClass('hidden');
    });
});

$(document).ready(function () {
    $('.js-filter-control-dropdown').on('click', function () {
        var filterDropdown = $(this).next('.filter-control__dropdown');
        filterDropdown.toggleClass('hidden');
        $(this).toggleClass('active');
    });
});

$(document).ready(function () {
    // select2 init
    if ($('#category').length) {
        $('#category').select2();
    }

    // slider range init
    var slider = document.getElementById('slider');

    if (slider) {
        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            range: {
                'min': 0,
                'max': 100
            }
        });
    }
});
