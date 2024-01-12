<?php include 'block/head.php'; ?>

  <!-- site BEGIN -->
  <div id="site" class="site">
    <!-- header BEGIN -->
    <?php include 'block/header.php'; ?>
    <!-- header END -->
    <!-- main BEGIN -->
    <main class="site__main" role="main">
      <!-- hero-section BEGIN -->
      <section class="hero-section visually-hidden">
        <div class="container hero-section__container">
          <h1 class="visually-hidden">POIZON: Leading the Way in Global Authentication</h1>
        </div>
      </section>
      <!-- hero-section END -->
      <!-- layout-page BEGIN -->
      <section class="layout-page">
        <div class="u-container layout-page__u-container">
          <div class="layout-page__head">
            <?php include 'block/breadcrumb.php'; ?>
            <h3 class="layout-page__title">Sneakers</h3>
            <p class="layout-page__description">Explore a vast selection of sneakers and shoes, including popular brands like Air Jordan, adidas, Nike, Yeezy, and many others - all authenticated, best price, and in stock, courtesy of POIZON. Shop now to find your sneakers shoes!</p>
          </div>
          <div class="layout-page__content">
            <div class="filter-control layout-page__filter-control">
              <form action="post" class="filter-control__form">
                <div class="filter-control__list">
                  <div class="filter-control__item">
                    <div class="js-filter-control-dropdown filter-control__item-header">
                      <h4 class="filter-control__item-title">Brands</h4>
                      <svg class="filter-control__item-icon">
                        <use xlink:href="images/sprite.svg#arrow"></use>
                      </svg>
                    </div>
                    <div class="filter-control__dropdown">
                      <ul class="from-filter-list from-filter__from-filter-list">
                        <li class="from-filter-list__item">
                          <label class="u-checkbox from-filter-list__u-checkbox">
                            <input type="checkbox" name="" class="u-checkbox__control" value="EXCELSIOR">
                            <span class="u-checkbox__inner">
                              <svg class="u-checkbox__icon">
                                <use xlink:href="images/sprite.svg#checked-icon"></use>
                              </svg>
                              <span class="u-checkbox__content">
                                <span class="u-checkbox__title">EXCELSIOR</span>
                              </span>
                            </span>
                          </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="RAF SIMONS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">RAF SIMONS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="Chloe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Chloe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="COMMON PROJECTS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">COMMON PROJECTS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="PONY">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PONY</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="By Far">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">By Far</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="SALOMON">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">SALOMON</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="ARMANI EXCHANGE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ARMANI EXCHANGE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="ADER ERROR">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ADER ERROR</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="LACOSTE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LACOSTE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="RHUDE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">RHUDE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" name="" class="u-checkbox__control" id="myCheckbox" value="Birkenstock">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Birkenstock</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Lululemon/Lululemon">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Lululemon/Lululemon</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="NERDY">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">NERDY</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Y-3">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Y-3</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="FERRAGAMO">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">FERRAGAMO</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MARNI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MARNI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="1017 ALYX 9SM">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">1017 ALYX 9SM</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="both">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">both</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Roger Vivier">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Roger Vivier</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MIHARA YASUHIRO">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MIHARA YASUHIRO</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Keds">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Keds</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Crocs">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Crocs</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="BLINDNOPLAN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">BLINDNOPLAN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="13 DEMARZO">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">13 DEMARZO</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Cabbeen">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Cabbeen</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="AMIRI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">AMIRI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="DC Shoes">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">DC Shoes</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="JOMA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">JOMA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="BALLY">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">BALLY</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="stuart weitzman">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">stuart weitzman</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="KOLON SPORT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">KOLON SPORT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="VERSACE JEANS COUTURE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">VERSACE JEANS COUTURE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Zegna">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Zegna</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="WARRIOR">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">WARRIOR</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="FAIRWHALE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">FAIRWHALE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="vision street wear">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">vision street wear</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Stella McCartney">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Stella McCartney</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="ASH">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ASH</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="SMILEY">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">SMILEY</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="palladium">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">palladium</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="On">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">On</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Oakley">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Oakley</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Columbia">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Columbia</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="DESCENTE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">DESCENTE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="KELME">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">KELME</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="BALMAIN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">BALMAIN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="GOTO">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">GOTO</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="KAALIXTO">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">KAALIXTO</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="EVERAU">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">EVERAU</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="73Hours">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">73Hours</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Jeep">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Jeep</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="PRADA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PRADA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Lanvin">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Lanvin</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="SUPERGA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">SUPERGA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Loro Piana">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Loro Piana</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="KEDDO">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">KEDDO</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Alexander McQueen">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Alexander McQueen</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CHURCH'S">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CHURCH'S</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="JW Anderson">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">JW Anderson</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Balenciaga">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Balenciaga</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="heydude">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">heydude</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MM6 Maison Margiela">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MM6 Maison Margiela</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="KENZO">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">KENZO</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Native Shoes">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Native Shoes</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="JIL SANDER">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">JIL SANDER</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Anthony Miles">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Anthony Miles</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Pepsi">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Pepsi</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Valentino">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Valentino</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="clarks">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">clarks</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="COLE HAAN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">COLE HAAN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Polo Ralph Lauren">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Polo Ralph Lauren</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="STEVE MADDEN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">STEVE MADDEN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="DSQUARED 2">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">DSQUARED 2</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="GANNI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">GANNI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="See By Chloe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">See By Chloe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Givenchy">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Givenchy</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Paul Smith">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Paul Smith</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="VERSACE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">VERSACE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Xavier3">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Xavier3</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Tommy Hilfiger">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Tommy Hilfiger</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="FENDI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">FENDI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="DSQUARED">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">DSQUARED</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CHARLES&KEITH">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CHARLES&KEITH</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="RARE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">RARE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="ERKE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ERKE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="SALAXI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">SALAXI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Dickies">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Dickies</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="McQ">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">McQ</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Joy&Mario">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Joy&Mario</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="vibram">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">vibram</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="VICTOR">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">VICTOR</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="FILA FUSION">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">FILA FUSION</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Brunello Cucinelli">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Brunello Cucinelli</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="TOD'S">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">TOD'S</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Burberry">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Burberry</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Jifffly">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Jifffly</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Altra">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Altra</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="diadora">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">diadora</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="C2H4">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">C2H4</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="ecco">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ecco</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Toteme">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Toteme</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Rockfish">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Rockfish</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="DAVID NAMAN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">DAVID NAMAN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="HOGAN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">HOGAN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CERRUTI 1881">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CERRUTI 1881</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CHANEL">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CHANEL</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="NATIONAL GEOGRAPHIC">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">NATIONAL GEOGRAPHIC</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="SPALWART">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">SPALWART</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Moncler">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Moncler</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MCM">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MCM</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="The Last Redemption">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">The Last Redemption</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="PACO GIL">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PACO GIL</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Rick Owens DRKSHDW">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Rick Owens DRKSHDW</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="SERGIO ROSSI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">SERGIO ROSSI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="THOM WILLS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">THOM WILLS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="UMA WANG">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">UMA WANG</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="BERLUTI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">BERLUTI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Discovery Expedition">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Discovery Expedition</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="IH NOM UH NIT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">IH NOM UH NIT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CARIUMA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CARIUMA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="NINE WEST">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">NINE WEST</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MOSCHINO">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MOSCHINO</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Bottega Veneta">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Bottega Veneta</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CAMPER">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CAMPER</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="OSIRIS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">OSIRIS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Axel Arigato">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Axel Arigato</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Visvim">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Visvim</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="RIFUGIO VO'">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">RIFUGIO VO'</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Timberland">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Timberland</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="ROMBAUT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ROMBAUT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="umbro">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">umbro</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="le coq sportif">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">le coq sportif</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="S.T.DUPONT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">S.T.DUPONT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="PHILIPPE MODEL">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PHILIPPE MODEL</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MSGM">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MSGM</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Stepney Workers Club">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Stepney Workers Club</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="AUTRY">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">AUTRY</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="EQLZ">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">EQLZ</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Lee">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Lee</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="LOXKI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LOXKI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Hush Puppies">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Hush Puppies</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="C°BANNER">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">C°BANNER</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="STARTER">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">STARTER</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="GG-CC">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">GG-CC</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Stussy">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Stussy</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Daphne">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Daphne</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Jack Wolfskin">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Jack Wolfskin</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="EBLAN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">EBLAN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="D:Fuse Scandinavia">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">D:Fuse Scandinavia</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Ocai">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Ocai</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="NEXT IMPULSIVE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">NEXT IMPULSIVE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CAMEL">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CAMEL</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="A1">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">A1</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="PALM ANGELS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PALM ANGELS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Mou">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Mou</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Onitsuka Tiger">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Onitsuka Tiger</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="VEJA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">VEJA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Golden Goose">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Golden Goose</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Camperlab">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Camperlab</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Minepair">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Minepair</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Tarramarra">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Tarramarra</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="AMIPARIS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">AMIPARIS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kappa Kids">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kappa Kids</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CHARRIOL">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CHARRIOL</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="DIOR">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">DIOR</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MADEN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MADEN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="ZHR">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ZHR</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Good">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Good</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Northland Professional">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Northland Professional</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Tasman Aus">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Tasman Aus</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="giuseppe zanotti">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">giuseppe zanotti</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Ollieskate">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Ollieskate</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MIIOW">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MIIOW</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="PHILIPP PLEIN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PHILIPP PLEIN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="ClareLewis">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ClareLewis</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="LAZY BONS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LAZY BONS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="JEEP SPIRIT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">JEEP SPIRIT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="EMPORIO ARMANI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">EMPORIO ARMANI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="NSIOSC">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">NSIOSC</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="KSWISS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">KSWISS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="KARL LAGERFELD">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">KARL LAGERFELD</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="HUANQIU">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">HUANQIU</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Qiaodan">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Qiaodan</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="BELLE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">BELLE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="AMBUSH">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">AMBUSH</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="LAZXXDCN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LAZXXDCN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="FALLINMISS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">FALLINMISS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="HLA JEANS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">HLA JEANS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Seattle Palm">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Seattle Palm</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="TTKJ">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">TTKJ</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="AOKANG">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">AOKANG</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="ROA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ROA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="TCELLARS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">TCELLARS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="GHOST MASK">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">GHOST MASK</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="LiNing">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LiNing</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="HLA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">HLA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Cat&Sofa">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Cat&Sofa</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Officine Creative">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Officine Creative</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="FOXER">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">FOXER</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="LuzaoT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LuzaoT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="五角心PENTAGONAL HEART">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">五角心PENTAGONAL HEART</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Mule Donkey">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Mule Donkey</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Teenmix/Tianmeiyi">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Teenmix/Tianmeiyi</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="senzubean">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">senzubean</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Bull Family G.N.SHIJIA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Bull Family G.N.SHIJIA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="DEERWAY">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">DEERWAY</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="adidas neo">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">adidas neo</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="PLEIN SPORT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PLEIN SPORT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Sky run TEPOR">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Sky run TEPOR</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="TRUMPPIPE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">TRUMPPIPE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Suicoke">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Suicoke</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Gollon step">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Gollon step</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MOERBAI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MOERBAI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MR.PESIN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MR.PESIN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="HACKBUTEER">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">HACKBUTEER</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="LOUHANSIR">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LOUHANSIR</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Q-AND">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Q-AND</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="REPUSIN Rhepson">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">REPUSIN Rhepson</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="LOUIS VUITTON">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LOUIS VUITTON</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="VERSACE JEANS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">VERSACE JEANS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="SAINT LAURENT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">SAINT LAURENT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MARC JACOBS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MARC JACOBS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="TOM FORD">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">TOM FORD</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="UGG">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">UGG</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="STONE ISLAND">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">STONE ISLAND</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="HERMES">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">HERMES</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CAT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CAT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="COACH">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">COACH</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Michael Kors">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Michael Kors</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Dr.Martens">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Dr.Martens</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="XTEP">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">XTEP</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="361°">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">361°</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="HOKA ONE ONE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">HOKA ONE ONE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="KEEN">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">KEEN</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Aape">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Aape</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Acne Studios">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Acne Studios</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Christian Louboutin">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Christian Louboutin</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="alexander wang">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">alexander wang</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="CELINE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">CELINE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="LOEWE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LOEWE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="SESAME STREET">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">SESAME STREET</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Mizuno">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Mizuno</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MIU MIU">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MIU MIU</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="TORY BURCH">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">TORY BURCH</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Skechers">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Skechers</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="MLB">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">MLB</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="PINKO">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PINKO</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="A-COLD-WALL*">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">A-COLD-WALL*</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Fear of God">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Fear of God</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Jimmy Choo">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Jimmy Choo</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="tokidoki">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">tokidoki</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="YONEX">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">YONEX</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kappa">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kappa</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="AND1">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">AND1</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Maison Margiela">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Maison Margiela</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Arcteryx">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Arcteryx</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="HUGO BOSS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">HUGO BOSS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="DIESEL">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">DIESEL</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="RICK OWENS">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">RICK OWENS</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="REPRESENT">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">REPRESENT</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="saucony">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">saucony</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="OFF-WHITE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">OFF-WHITE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Jordan">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Jordan</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Champion">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Champion</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="FILA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">FILA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Nike">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Nike</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Converse">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Converse</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="THOM BROWNE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">THOM BROWNE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="PUMA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PUMA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="adidas">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">adidas</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="LINING">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">LINING</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="ANTA">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">ANTA</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="PEAK">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">PEAK</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="New Balance">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">New Balance</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="THE NORTH FACE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">THE NORTH FACE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="adidas originals">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">adidas originals</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Reebok">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Reebok</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="A BATHING APE">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">A BATHING APE</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Under Armour">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Under Armour</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="GUCCI">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">GUCCI</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Asics">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Asics</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Vans">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Vans</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                      </ul>
                      <p class="js-show-more show-more from-filter__show-more hidden">Show More</p>
                    </div>
                  </div>
                  <div class="filter-control__item">
                    <div class="js-filter-control-dropdown filter-control__item-header">
                      <h4 class="filter-control__item-title">Categories</h4>
                      <svg class="filter-control__item-icon">
                        <use xlink:href="images/sprite.svg#arrow"></use>
                      </svg>
                    </div>
                    <div class="filter-control__dropdown">
                      <ul class="from-filter-list from-filter__from-filter-list">
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Outdoor Performance Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Outdoor Performance Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Running Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Running Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Skateboarding Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Skateboarding Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kids Skateboarding Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kids Skateboarding Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kids Soccer Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kids Soccer Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kids Sneaker">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kids Sneaker</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kids Basketball Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kids Basketball Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Vintage Basketball Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Vintage Basketball Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Golf Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Golf Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Tennis Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Tennis Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Badminton Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Badminton Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Cycling Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Cycling Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Lifestyle Shoes">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Lifestyle Shoes</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kids Lifestyle Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kids Lifestyle Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kids Training Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kids Training Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Pre-Walker Baby Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Pre-Walker Baby Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kids Outdoor Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kids Outdoor Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kids Canvas Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kids Canvas Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Toddler Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Toddler Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Basketball Shoes">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Basketball Shoes</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Football Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Football Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Running Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Running Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Training Shoes">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Training Shoes</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Chunky Sneaker">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Chunky Sneaker</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Canvas Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Canvas Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Skateboarding Shoes">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Skateboarding Shoes</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Slip-on Shoe">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Slip-on Shoe</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                      </ul>
                      <p class="js-show-more show-more from-filter__show-more hidden">Show More</p>
                    </div>
                  </div>
                  <div class="filter-control__item">
                    <div class="js-filter-control-dropdown filter-control__item-header">
                      <h4 class="filter-control__item-title">Price</h4>
                      <svg class="filter-control__item-icon">
                        <use xlink:href="images/sprite.svg#arrow"></use>
                      </svg>
                    </div>
                    <div class="filter-control__dropdown">
                      <div class="filter-control__item-range">
                        <div class="filter-control__item-range-el" id="slider"></div>
                        <div class="filter-control__item-input-wrap">
                          <input type="text" class="filter-control__item-input" placeholder="$0">
                          <span></span>
                          <input type="text" class="filter-control__item-input" placeholder="$14999">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="filter-control__item">
                    <div class="js-filter-control-dropdown filter-control__item-header">
                      <h4 class="filter-control__item-title">Genders</h4>
                      <svg class="filter-control__item-icon">
                        <use xlink:href="images/sprite.svg#arrow"></use>
                      </svg>
                    </div>
                    <div class="filter-control__dropdown">
                      <ul class="from-filter-list from-filter__from-filter-list">
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Unisex">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Unisex</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Men">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Men</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Women">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Women</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Kids">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Kids</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Toddler">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Toddler</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Pre-School">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Pre-School</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                        <li class="from-filter-list__item">
                            <label class="u-checkbox from-filter-list__u-checkbox">
                                <input type="checkbox" id="myCheckbox" class="u-checkbox__control" value="Grade School">
                                <span class="u-checkbox__inner">
                                    <svg class="u-checkbox__icon">
                                        <use xlink:href="images/sprite.svg#checked-icon"></use>
                                    </svg>
                                    <span class="u-checkbox__content">
                                        <span class="u-checkbox__title">Grade School</span>
                                    </span>
                                </span>
                            </label>
                        </li>
                      </ul>
                      <p class="js-show-more show-more from-filter__show-more hidden">Show More</p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="filter-list layout-page__filter-list">
              <div class="filter-list__head">
                <div class="filter-list__el">
                  <div class="selected-filters filter-list__selected-filters">
                    <button class="selected-filters__clear-btn">Clear all filters</button>
                    <div class="selected-filters__selected-filter-wrap">
                      <div class="selected-filter selected-filters__selected-filter">
                        <span class="selected-filter__title">EXCELSIOR</span>
                        <button class="selected-filter__close">
                          <span></span>
                          <span></span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="filter-list__el">
                  <h3 class="filter-list__title">SORT BY:</h3>
                  <form action="post" class="form-select filter-list__form-select">
                      <select class="select form-select__select" data-placeholder="Featured" id="category">
                          <option value="1">Featured</option>
                          <option value="2">Best Selling</option>
                          <option value="3">Price : low to high</option>
                          <option value="4">Price : high to low</option>
                          <option value="5">Release Date</option>
                      </select>
                  </form>
                </div>
              </div>
              <div class="row filter-list__row">
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
                <div class="row__col filter-list__col">
                  <article class="brand-card filter-list__brand-card">
                    <button class="marker-btn brand-card__marker-btn">
                      <img src="images/marker-btn-un-liked.svg" alt="" class="marker-btn__img marker-btn__img--un-liked">
                      <img src="images/marker-btn-liked.svg" alt="" class="marker-btn__img marker-btn__img--liked">
                    </button>
                    <div class="brand-card__inner">
                      <div class="brand-card__media">
                        <picture class="brand-card__picture">
                          <img src="images/brand-filter-card-13.jpg" alt="Jordan 1 Retro High Obsidian">
                        </picture>
                      </div>
                      <h3 class="brand-card__title">
                        <a href="#" class="brand-card__link">Jordan 1 Retro High "Obsidian"</a>
                      </h3>
                      <p class="brand-card__title-price">$341</p>
                    </div>
                  </article>
                </div>
              </div>
              <div class="pagination filter-list__pagination">
                <ul class="pagination__list">
                  <li class="pagination__item">
                    <button class="pagination-btn-pren pagination__btn disabled">
                      <svg class="pagination__icon">
                        <use xlink:href="images/sprite.svg#arrow-type-3"></use>
                      </svg>
                    </button>
                  </li>
                  <li class="pagination__item">
                    <a href="#" class="pagination__link active">1</a>
                  </li>
                  <li class="pagination__item">
                    <a href="#" class="pagination__link">2</a>
                  <li>
                  <li class="pagination__item">
                    <a href="#" class="pagination__link">3</a>
                  </li>
                  <li class="pagination__item">
                    <a href="#" class="pagination__link">4</a>
                  </li>
                  <li class="pagination__item">
                    <a href="#" class="pagination__link">5</a>
                  </li>
                  <li class="pagination__item">
                    <div class="pagination__dots">
                      <svg class="pagination__dots-icon">
                        <use xlink:href="images/sprite.svg#arrow-type-2"></use>
                      </svg>
                      <div class="dots">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                  </li>
                  <li class="pagination__item">
                    <a href="#" class="pagination__link">60</a>
                  </li>
                  <li class="pagination__item">
                    <button class="pagination-btn-next pagination__btn">
                      <svg class="pagination__icon">
                        <use xlink:href="images/sprite.svg#arrow-type-3"></use>
                      </svg>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- layout-page END -->
    </main>
    <!-- main END -->
    <!-- footer BEGIN -->
    <?php include 'block/footer.php'; ?>
    <!-- footer END -->
  </div>
  <!-- site END -->

<?php include 'block/foot.php'; ?>