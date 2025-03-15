 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<style type="text/css">


</style>

<?php if ($grid == '1'): ?>

<!-- MENU -->

<style>
  :root {
    --min-width-tablet: 768px;
    --min-width-desktop: 1280px;
    --text-mobile-size: 2rem;
    --text-tablet-size: 2.25rem;
    --text-desktop-size: 3rem;
  }
  #__menu-root {
    font-family: var(--primtext), serif;
  }
  #__menu-root .wrapper {
    padding-top: 8rem;
    padding-bottom: 8rem;
    border: 1px solid #eaeaea;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    gap: 2rem;
    justify-content: start;
  }
  #__menu-root .menu-grid {
    display: grid;
    grid-template-rows: repeat(2, auto);
    grid-template-columns: 1fr;
    gap: .8rem;
  }
  #__menu-root .menu {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
    gap: 0.625rem;
  }
  #__menu-root .item {
    padding: 1.8rem;
    display: flex;
    border-bottom: 1px solid var(--colors);
    justify-content: start;
    align-items: center;
    gap: 1rem;
    position: relative;
    cursor: default;
    overflow: hidden;
    height: 150px;
  }
  #__menu-root .menu > .item:hover .logo {
    color: var(--colors);
    background-color: white;
  }
  #__menu-root .menu > .item:hover .description .title {
    color: white;
  }
  #__menu-root .menu > .item:hover .description .desc {
    color: #f1f1f1;
  }
  #__menu-root .menu > .item:hover .price {
    color: white;
  }
  #__menu-root .menu > .item .logo {
    display: none;
    z-index: 1;
  }
  #__menu-root .menu > .item .description {
    flex: 1;
    display: flex;
    gap: 10px;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    z-index: 1;
  }
  #__menu-root .menu > .item .description .title {
    font-size: 1rem;
    font-weight: bold;
    line-height: 1.7rem;
    color: var(--colors);
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-transform: capitalize;
    letter-spacing: 0px;
  }
  #__menu-root .menu > .item .description .desc {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.7rem;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
  }
  #__menu-root .menu > .item .price {
    font-size: 1.3rem;
    z-index: 1;
    font-weight: bold;
    color: var(--colors);
  }
  #__menu-root .menu > .item .overlay-hover {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--colors);
    transition: all ease-out .5s;
    border-radius: 0;
  }
  #__menu-root .menu > .item:hover .overlay-hover {
    top: 0;
    border-radius: 2rem 2rem 0 0;
  }
  #__menu-root .explore-more {
    border-radius: 999em;
    padding: 12px 30px;
    border: 1px solid var(--colors);
    overflow: hidden;
    font-weight: 600;
    font-size: calc(var(--text-mobile-size) / 2);
    text-align: center;
    background-color: var(--colors);
    color: white;
    margin: 0 auto;
    transition: all ease 500ms;
  }

  #__menu-root .explore-more:hover {
    background-color: black;
  }

  @media (min-width: 768px) {
    #__menu-root .menu-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: auto;
    }
    #__menu-root .menu > .item .logo {
      display: flex;
      font-size: 1.7rem;
      padding: 1.3rem;
      background-color: var(--colors);
      border-radius: 999em;
      color: white;
    }
    #__menu-root .menu > .item .description .title {
      font-size: 18px;
    }
    #__menu-root .menu > .item .description .desc {
      font-size: .8rem;
    }
    #__menu-root .menu > .item .price {
      font-size: 1.4;
    }
  }
  #__menu-root .explore-more {
    font-size: calc(var(--text-tablet-size) / 2 - 4px);
    padding: 10px 20px;
  }
  @media (min-width: 1280px) {
    #__menu-root .menu > .item .logo {
      font-size: 1.8rem;
      padding: 1.4rem;
    }
    #__menu-root .menu > .item .description .title {
        font-size: 19px;
    }
    #__menu-root .menu > .item .description .desc {
      font-size: .9rem;
    }
    #__menu-root .menu > .item .price {
      font-size: 2rem;
    }
    #__menu-root .explore-more {
        font-size: calc(var(--text-desktop-size) / 2 - 7px);
        padding: 12px 30px;
    }
    #__menu-root .menu > .item .price {
      font-size: 1.5rem;
    }
  }
</style>
<section id="__menu-root" style="background: #fffbf8;">
  <div class="container-global wrapper">
    <div class="title-product menu-title text-center">
      <span class="tag-atas"><i class="fa-solid fa-bell-concierge mr-2"></i> <?= $subtitle ?> <i class="fa-solid fa-bell-concierge ml-2"></i></span>
      <h2><?= $title ?></h2>
    </div>
    <div class="menu-grid">
      <div class="menu-1 menu">
        <?php $i=1; foreach ($item->data as $items): ?>
            <?php if ($i <= '4'): ?>
              <article class="item">
                <div class="logo">
                  <i class="fa-solid fa-utensils"></i>
                </div>
                <div class="description">
                  <h3 class="p-0 m-0 title"><?= $items->title ?></h3>
                  <p class="p-0 m-0 desc"><?= strip_tags($items->content) ?></p>
                </div>
                <p class="price p-0 m-0"><?= $items->price ?>K</p>
                <div class="overlay-hover"></div>
              </article>
            <?php endif ?>
        <?php $i++; endforeach; ?>
      </div>

      <div class="menu-2 menu">
        <?php $i=1; foreach ($item->data as $items): ?>
            <?php if ($i >= '5'): ?>
              <article class="item">
                <div class="logo">
                  <i class="fa-solid fa-utensils"></i>
                </div>
                <div class="description">
                  <h3 class="p-0 m-0 title"><?= $items->title ?></h3>
                  <p class="p-0 m-0 desc"><?= strip_tags($items->content) ?></p>
                </div>
                <p class="price p-0 m-0"><?= $items->price ?>K</p>
                <div class="overlay-hover"></div>
              </article>
            <?php endif ?>
        <?php $i++; endforeach; ?>
      </div>

    </div>
    <a class="button explore-more" href="https://drive.google.com/file/d/1BuoFNIwC-R0tqGGVnE5ml9OsXm5zYC1w/view?usp=sharing">View Full Menu <i class="fas fa-arrow-right ml-2"></i></a>
  </div>
</section>


<script>
  const _menu_title = document.querySelector(".menu-title");
  const _menu_items = document.querySelectorAll("#__menu-root .menu-grid .item")
  inView(_menu_title, (element) => {
    animate(element, {y: [50, 0], opacity: [0, 1]}, {ease: "anticipate", duration: 1.5})
    return (leaveInfo) => {
      animate(element, {y: [0, 50], opacity: [1, 0]}, {ease: "anticipate", duration: 1.5})
    }
  })
  inView(_menu_items, (element) => {
    animate(element, {opacity: [0,1], x: [100, 0]}, {ease: "anticipate", delay: stagger(0.5), duration: 1.5})
    return () => {
      animate(element, {opacity: [1,0], x: [0, -100]}, {ease: "anticipate", delay: stagger(0.5), duration: 1.5})
    }
  })
</script>

<?php endif ?>