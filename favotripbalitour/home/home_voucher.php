<style>
  :root {
    --full: 100%;
    --wrapper-desktop: 85%;
    --wrapper-mobile: 95%;
  }
  #__voucher-root {
    width: var(--full);
    font-family: var(--primtext);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  #__voucher-root .wrapper {
    width: var(--wrapper-mobile);
    display: flex;
    flex-direction: column;
    justify-content: start;
    margin: 1rem 0;
    align-items: stretch;
  }
  #__voucher-root .wrapper .header .title {
    font-size: 1.6rem;
    font-weight: bold;
  }
  #__voucher-root .wrapper .items-wrapper {
    display: flex;
      gap: 1rem;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
  }
  #__voucher-root .wrapper .items-wrapper > .item {
    position: relative;
  }
  #__voucher-root .wrapper .items-wrapper > .item .detail-btn {
    position: absolute;
    bottom: 0;
    right: 0;
    margin: .6rem;
    width: 20%;
    height: 30%;
    border-radius: 999em;
    padding: .2rem .4rem;
    border: none;
    color: white;
    background-color: #0a83df;
    cursor: pointer;
  }
  #__voucher-root .wrapper .items-wrapper > .item img {
    width: 100%;
    border-top: 1px solid #eaeaea;
    border-left: 1px solid #eaeaea;
    box-shadow: 7px 8px 6px -4px rgba(0,0,0,0.30);
    -webkit-box-shadow: 7px 8px 6px -4px rgba(0,0,0,0.30);
    -moz-box-shadow: 7px 8px 6px -4px rgba(0,0,0,0.30);
  }

  @media (min-width: 768px) {
    #__voucher-root .wrapper {
      width: var(--wrapper-desktop);
    }
  }

  @media (min-width: 900px) {
    #__voucher-root .wrapper .items-wrapper {
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }
    #__voucher-root .wrapper .items-wrapper > .item {
      width: 33%;
    }
  }

</style>

<section id="__voucher-root">
  <div class="wrapper">
    
    <div class="title-why2 mb-md-3 mb-3">
        <div class="row ">
          <div class="col-md-6 px-2">
            <h2>Collect 'em. All Yours!</h2>
            <p>Get exclusive discounts on Bali tours, activities, and experiences.</p>
          </div>
          <div class="col-md-6 px-2 d-flex justify-content-end align-items-center">
            <!-- <a class="__explore-top" href="<?= $subtitle_2 ?>">Explore More</a> -->
          </div>
        </div>
      </div>
    
    <main class="items-wrapper">
      <article class="item item-1">
        <button onclick="window.location.href='https://favotripbalitour.com/view/ubud-trip'" class="detail-btn">Detail</button>
        <img src="https://jwc.gotra-resources.my.id/web-upload/1739515741-14-02-2025-01XGKyaDznUAQ6t5FE32iHhdwsJBg7SW.webp" alt="card">
      </article>
      <article class="item item-2">
        <button onclick="window.location.href='https://favotripbalitour.com/view/2d1n-nusa-penida-with-accommodation-shuttle'" class="detail-btn">Detail</button>
        <img src="https://jwc.gotra-resources.my.id/web-upload/1739515761-14-02-2025-eV6C4ZW7TEGnBMzX5NSpIaQqKcyr9oh8.webp" alt="card">
      </article>
      <article class="item item-3">
        <button onclick="window.location.href='https://favotripbalitour.com/view/water-sport-tanjung-benoa'" class="detail-btn">Detail</button>
        <img src="https://jwc.gotra-resources.my.id/web-upload/1739515771-14-02-2025-XlcVSguU5ZfCoOiA8WHj12zvteFME0qy.webp" alt="card">
      </article>
    </main>
  </div>
</section>