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
      <!-- main-slider BEGIN -->
      <div class="main-slider">
        <div class="container main-slider__container">
          <div class="main-slider__search">
            <form action="post" class="search-form search-form-box__search-form">
              <svg class="icon search-form__icon">
                <use xlink:href="images/sprite.svg#search"></use>
              </svg>
              <input type="text" class="search-form__input" placeholder="Search for brand, item, etc.">
            </form>
          </div>
          <div class="js-main-slider-init main-slider__el">
            <div class="main-slider__el-slide">
              <picture class="main-slider__el-slide-picture">
                <img src="images/main-slider-1.jpg" alt="AIR Jordan 11">
              </picture>
              <picture class="main-slider__el-slide-picture main-slider__el-slide-picture--mb">
                <img src="images/main-slider-mb-1.jpg" alt="AIR Jordan 11">
              </picture>
            </div>
            <div class="main-slider__el-slide">
              <picture class="main-slider__el-slide-picture">
                <img src="images/main-slider-2.jpg" alt="AIR Jordan 11">
              </picture>
              <picture class="main-slider__el-slide-picture main-slider__el-slide-picture--mb">
                <img src="images/main-slider-mb-2.jpg" alt="AIR Jordan 11">
              </picture>
            </div>
          </div>
          <div class="main-slider__appeal">
            <a href="#" class="main-slider__appeal-link">
              <picture class="main-slider__appeal-link-picture">
                <img src="images/main-slider-appeal-1.jpg" alt="about poizon">
                <img src="images/main-slider-mob-appeal-1.jpg" alt="about poizon" class="main-slider__img-mb">
              </picture>
            </a>
          </div>
        </div>
      </div>
      <!-- main-slider END -->
      <!-- goods-section BEGIN -->
      <section class="goods-section">
        <div class="u-container goods-section__u-container">
          <div class="row goods-section__list goods-section__list--goods-first">
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="good-card">
                <div class="good-card__inner">
                  <div class="good-card__media">
                    <picture class="good-card__picture">
                      <img src="images/good-card-1.jpg" alt="Sneakers">
                    </picture>
                  </div>
                  <div class="good-card__content">
                    <h3 class="good-card__title">
                      <a href="#" class="good-card__link">Sneakers</a>
                    </h3>
                  </div>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="good-card">
                <div class="good-card__inner">
                  <div class="good-card__media">
                    <picture class="good-card__picture">
                      <img src="images/good-card-2.jpg" alt="Shoes">
                    </picture>
                  </div>
                  <div class="good-card__content">
                    <h3 class="good-card__title">
                      <a href="#" class="good-card__link">Shoes</a>
                    </h3>
                  </div>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="good-card">
                <div class="good-card__inner">
                  <div class="good-card__media">
                    <picture class="good-card__picture">
                      <img src="images/good-card-3.jpg" alt="Apparel">
                    </picture>
                  </div>
                  <div class="good-card__content">
                    <h3 class="good-card__title">
                      <a href="#" class="good-card__link">Apparel</a>
                    </h3>
                  </div>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="good-card">
                <div class="good-card__inner">
                  <div class="good-card__media">
                    <picture class="good-card__picture">
                      <img src="images/good-card-4.jpg" alt="Accessories">
                    </picture>
                  </div>
                  <div class="good-card__content">
                    <h3 class="good-card__title">
                      <a href="#" class="good-card__link">Accessories</a>
                    </h3>
                  </div>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="good-card">
                <div class="good-card__inner">
                  <div class="good-card__media">
                    <picture class="good-card__picture">
                      <img src="images/good-card-5.jpg" alt="Bags">
                    </picture>
                  </div>
                  <div class="good-card__content">
                    <h3 class="good-card__title">
                      <a href="#" class="good-card__link">Bags</a>
                    </h3>
                  </div>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="good-card">
                <div class="good-card__inner">
                  <div class="good-card__media">
                    <picture class="good-card__picture">
                      <img src="images/good-card-6.jpg" alt="Collectibles">
                    </picture>
                  </div>
                  <div class="good-card__content">
                    <h3 class="good-card__title">
                      <a href="#" class="good-card__link">Collectibles</a>
                    </h3>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="header-section goods-section__header">
            <h2 class="header-section__title">Hottest Brands</h2>
            <div class="header-section__router">
              <a href="#" class="view-all header-section__router-view-all">
                <span class="view-all__inner">
                  <span class="view-all__text">View all</span>
                </span>
                <svg class="icon view-all__icon">
                  <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                </svg>
              </a>
            </div>
          </div>
          <div class="row goods-section__list goods-section__list--brand">
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-card-1.jpg" alt="Nike">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Nike</a>
                  </h3>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-card-2.jpg" alt="Gucci">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Gucci</a>
                  </h3>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-card-3.jpg" alt="Jordan">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Jordan</a>
                  </h3>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-card-4.jpg" alt="Adidas">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Adidas</a>
                  </h3>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-card-5.jpg" alt="Burberry">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Burberry</a>
                  </h3>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-card-6.jpg" alt="New balance">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">New balance</a>
                  </h3>
                </div>
              </article>
            </div>
          </div>
          <div class="header-section goods-section__header">
            <h2 class="header-section__title">Best Sellers</h2>
            <div class="header-section__router">
              <a href="#" class="view-all header-section__router-view-all">
                <span class="view-all__inner">
                  <span class="view-all__text">View all</span>
                </span>
                <svg class="icon view-all__icon">
                  <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                </svg>
              </a>
            </div>
          </div>
          <div class="row goods-section__list goods-section__list--sellers">
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-sellers-card-1.jpg" alt="Jordan 1">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Jordan 1 Low Obsidian Ember Glow</a>
                  </h3>
                  <p class="brand-card__title-price">$126</p>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-sellers-card-2.jpg" alt="Jordan 1">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Jordan 1 Low Obsidian Ember Glow</a>
                  </h3>
                  <p class="brand-card__title-price">$126</p>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-sellers-card-3.jpg" alt="Jordan 1">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Jordan 1 Low Obsidian Ember Glow</a>
                  </h3>
                  <p class="brand-card__title-price">$126</p>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-sellers-card-4.jpg" alt="Jordan 1">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Jordan 1 Low Obsidian Ember Glow</a>
                  </h3>
                  <p class="brand-card__title-price">$126</p>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-sellers-card-5.jpg" alt="Jordan 1">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Jordan 1 Low Obsidian Ember Glow</a>
                  </h3>
                  <p class="brand-card__title-price">$126</p>
                </div>
              </article>
            </div>
            <div class="row__col row__col--2 goods-section__list-col">
              <article class="brand-card">
                <div class="brand-card__inner">
                  <div class="brand-card__media">
                    <picture class="brand-card__picture">
                      <img src="images/brand-sellers-card-6.jpg" alt="Jordan 1">
                    </picture>
                  </div>
                  <h3 class="brand-card__title">
                    <a href="#" class="brand-card__link">Jordan 1 Low Obsidian Ember Glow</a>
                  </h3>
                  <p class="brand-card__title-price">$126</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- goods-section END -->
      <!-- about-section BEGIN -->
      <section class="about-section">
        <div class="container about-section__container">
          <div class="u-container about-section__u-container">
            <div class="header-section about-section__header">
              <h2 class="header-section__title header-section__title--mark">About POIZON</h2>
              <div class="header-section__router">
                <a href="#" class="view-all header-section__router-view-all">
                  <span class="view-all__inner">
                    <span class="view-all__text">View all</span>
                  </span>
                  <svg class="icon view-all__icon">
                    <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                  </svg>
                </a>
              </div>
            </div>
            <div class="row about-section__list">
              <div class="row__col about-section__col">
                <div class="about-card">
                  <div class="about-card__el">
                    <picture class="about-card__picture">
                      <img src="images/about-card-img-1.svg" alt="Expert & AI Authenticated">
                    </picture>
                  </div>
                  <h3 class="about-card__title">Expert & AI <br>Authenticated</h3>
                </div>
              </div>
              <div class="row__col about-section__col">
                <div class="about-card">
                  <div class="about-card__el">
                    <picture class="about-card__picture">
                      <img src="images/about-card-img-2.svg" alt="Global Sourcing">
                    </picture>
                  </div>
                  <h3 class="about-card__title">Global <br>Sourcing</h3>
                </div>
              </div>
              <div class="row__col about-section__col">
                <div class="about-card">
                  <div class="about-card__el">
                    <picture class="about-card__picture">
                      <img src="images/about-card-img-3.svg" alt="3 Days Return">
                    </picture>
                  </div>
                  <h3 class="about-card__title">3 Days <br>Return</h3>
                </div>
              </div>
              <div class="row__col about-section__col">
                <div class="about-card">
                  <div class="about-card__el">
                    <picture class="about-card__picture">
                      <img src="images/about-card-img-4.svg" alt=">Customer Service">
                    </picture>
                  </div>
                  <h3 class="about-card__title">Customer <br>Service</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about-section END -->
      <!-- goods-section BEGIN -->
      <section class="goods-section goods-section--recommend">
        <div class="container goods-section__container">
          <div class="u-container goods-section__u-container">
            <div class="goods-filter-list goods-section__filter-list">
              <div class="goods-filter-list__item">
                <button type="button" class="goods-filter-list__link is-active" data-filter-nav="js-tab-all">All</button>
              </div>
              <div class="goods-filter-list__item">
                <button type="button" class="goods-filter-list__link" data-filter-nav="js-tab-sneakers">Sneakers</button>
              </div>
              <div class="goods-filter-list__item">
                <button type="button" class="goods-filter-list__link" data-filter-nav="js-tab-shoes">Shoes</button>
              </div>
              <div class="goods-filter-list__item">
                <button type="button" class="goods-filter-list__link" data-filter-nav="js-tab-apparel">Apparel</button>
              </div>
              <div class="goods-filter-list__item">
                <button type="button" class="goods-filter-list__link" data-filter-nav="js-tab-accessories">Accessories</button>
              </div>
              <div class="goods-filter-list__item">
                <button type="button" class="goods-filter-list__link" data-filter-nav="js-tab-bags">Bags</button>
              </div>
            </div>
            <div class="js-tab-list row goods-section__list goods-section__list--filter">
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-sneakers">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-1.jpg" alt="Jordan 1">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike Air Force 1 Low 07 White</a>
                    </h3>
                    <p class="brand-card__title-price">$126</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-shoes">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-2.jpg" alt="Jordan 1">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike Dunk Low Retro White Black Panda (W)</a>
                    </h3>
                    <p class="brand-card__title-price">$117</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-sneakers">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-3.jpg" alt="Nike Dunk Low Retro White Black Panda">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike Dunk Low Retro White Black Panda</a>
                    </h3>
                    <p class="brand-card__title-price">$80</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-sneakers">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-4.jpg" alt="adidas originals Superstar White Black ">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">adidas originals Superstar White Black </a>
                    </h3>
                    <p class="brand-card__title-price">$75</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-sneakers">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-5.jpg" alt="Converse Chuck Taylor All-Star 70 Hi Black">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Converse Chuck Taylor All-Star 70 Hi Black</a>
                    </h3>
                    <p class="brand-card__title-price">$42</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-shoes">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-6.jpg" alt="Nike Dunk Low Retro White Black Panda (GS)">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike Dunk Low Retro White Black Panda (GS)</a>
                    </h3>
                    <p class="brand-card__title-price">$110</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-sneakers">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-7.jpg" alt="Jordan 1 Low Black Toe">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Jordan 1 Low Black Toe</a>
                    </h3>
                    <p class="brand-card__title-price">$421</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-shoes">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-8.jpg" alt="Jordan 1">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike M2K Tekno Cool White (W)</a>
                    </h3>
                    <p class="brand-card__title-price">$95</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-shoes">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-9.jpg" alt="Jordan 1">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Alexander McQueen Oversized Ivory Black</a>
                    </h3>
                    <p class="brand-card__title-price">$435</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-shoes">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-10.jpg" alt="Jordan 1 Retro High Dark Mocha">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Jordan 1 Retro High "Dark Mocha"</a>
                    </h3>
                    <p class="brand-card__title-price">$420</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-bags">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-11.jpg" alt="Nike Air Force 1 Low Flax ">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike Air Force 1 Low Flax </a>
                    </h3>
                    <p class="brand-card__title-price">$88</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-bags">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-12.jpg" alt="New Balance NB 530 White Silver Navy">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">New Balance NB 530 White Silver Navy</a>
                    </h3>
                    <p class="brand-card__title-price">$94</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-bags">
                <article class="brand-card">
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
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-bags">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-14.jpg" alt="Nike Air Force 1 Low Triple White GS">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike Air Force 1 Low "Triple White" GS</a>
                    </h3>
                    <p class="brand-card__title-price">$54</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-bags">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-15.jpg" alt="Jordan">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Jordan 11 Retro Concord </a>
                    </h3>
                    <p class="brand-card__title-price">$335</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-accessories">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-16.jpg" alt="Jordan 1 Low "Shadow"">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Jordan 1 Low "Shadow"</a>
                    </h3>
                    <p class="brand-card__title-price">$146</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-accessories">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-17.jpg" alt="Nike M2K Tekno White Pure Platinum">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike M2K Tekno White Pure Platinum</a>
                    </h3>
                    <p class="brand-card__title-price">$89</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-apparel">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-18.jpg" alt="New Balance 327 Grey">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">New Balance 327 Grey</a>
                    </h3>
                    <p class="brand-card__title-price">$103</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-apparel">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-19.jpg" alt="adidas originals Yeezy Boost 350 V2 Black Red">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">adidas originals Yeezy Boost 350 V2 Black Red</a>
                    </h3>
                    <p class="brand-card__title-price">$225</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-apparel">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-20.jpg" alt="Nike Tech Hip Pack Light/Bone">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike Tech Hip Pack Light/Bone</a>
                    </h3>
                    <p class="brand-card__title-price">$67</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-apparel">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-21.jpg" alt="Air Jordan 11 Retro Jubilee 25th Anniversary">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Air Jordan 11 Retro "Jubilee" 25th Anniversary</a>
                    </h3>
                    <p class="brand-card__title-price">$254</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-apparel">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-22.jpg" alt="Nike Air Force 1 Low '07 White (Women's)">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Nike Air Force 1 Low '07 White (Women's)</a>
                    </h3>
                    <p class="brand-card__title-price">$63</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-apparel">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-23.jpg" alt="Jordan 1">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Timberland Classic Tooling Boots Male Yellow Boot</a>
                    </h3>
                    <p class="brand-card__title-price">$85</p>
                  </div>
                </article>
              </div>
              <div class="row__col row__col--2 goods-section__list-col" data-filter-item="js-tab-accessories">
                <article class="brand-card">
                  <div class="brand-card__inner">
                    <div class="brand-card__media">
                      <picture class="brand-card__picture">
                        <img src="images/brand-filter-card-24.jpg" alt="Jordan 1 Mid Chicago">
                      </picture>
                    </div>
                    <h3 class="brand-card__title">
                      <a href="#" class="brand-card__link">Jordan 1 Mid "Chicago"</a>
                    </h3>
                    <p class="brand-card__title-price">$230</p>
                  </div>
                </article>
              </div>
            </div>
            <div class="pagination goods-section__pagination">
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
      </section>
      <!-- goods-section END -->
    </main>
    <!-- main END -->
    <!-- footer BEGIN -->
    <?php include 'block/footer.php'; ?>
    <!-- footer END -->
  </div>
  <!-- site END -->

<?php include 'block/foot.php'; ?>