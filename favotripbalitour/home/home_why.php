<style>
.why .tag-atas {
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 24px;
    color: #000;
    letter-spacing: 1px;
    border-radius: 50px;
    padding: 2px 15px;
    border: solid 1px #000;
    width: max-content;
    font-family: var(--subtext);
    display: block;
    margin: auto;
    margin-bottom: 5px;
}
.why h2{
    font-size: 40px;
    line-height: 60px;
    color: #000;
    font-weight: 400;
    margin-bottom: 40px;
    letter-spacing: .3px;
    text-transform: unset;
    font-family: var(--primtext);
}
.why h2 span {
    font-weight: 700!important;
}
.why .tag-atas,
.why h2, 
.why h2 span {color: white; border-color: white;}

.why .card {
  overflow: hidden;
  position: relative;
  border-radius: 0;
  background: transparent;
}
.why .card h3 {
    font-family: var(--primtext);
    font-size: 23px;
    font-weight: 700;
    color: #fff;
    line-height: 35px;
    text-align: center;
    transition: all ease-in-out .6s;
    letter-spacing: .5px;
    margin-bottom: 10px;
}
.why .card p {
    margin-bottom: 0px;
    font-family: var(--subtext);
    font-size: 15px;
    line-height: 24px;
    font-weight: 300;
    text-align: center;
    letter-spacing: .5px;
    color: #ddd;
    transition: all ease-in-out .6s;
}

.why .card-body {
    padding: 2.5rem 2rem;
    position: relative;
    z-index: 2;
}

.why .icon i {
  font-size: 35px;
  text-align: center;
  color: #fff;
  margin-bottom: 2rem;
  transition: all ease-in-out .6s;
}


.why .icon {
  text-align: center;
  padding-left: 0 !important;
  margin-left: 0;
}

.why .card .shadow {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 5rem;
    height: 5rem;
    transition-delay: .2s;
    border-radius: 50%;
    z-index: 1;
    opacity: .8;
    background-color: #fff;
    /* filter: blur(20px); */
    transform: scale(.0) translate(50%, 50%);
    transition: all ease-in-out .35s;
}
.why .card:hover .shadow {
    transform: scale(11) ;
}
.why .card:hover .icon i,
.why .card:hover  h3,
.why .card:hover  p {
  color: var(--colors);
}

@media (max-width: 768px) {
    .why .tag-atas {
        font-size: 10px;
    }
    .why h2{
        font-size: 25px;
        line-height: 30px;
    }
    .why .text-part {
    padding: 3rem 5%;
  }

  .why .card-body {
    padding: 20px;
}

.why .icon i {
    font-size: 30px;
    margin-bottom: 20px;
}

 .why .card h3 {
        font-size: 16px;
    }

  .why .card p {
    margin-bottom: 0px;
    font-size: 13px;
    line-height: 22px;
}

}
@media (max-width: 576px) {
  .foot-why .patern {
    height: 100%;
    transform: scale(1);
  }
  .foot-why .patern.left {
    left: -2rem;
    top: -1rem;
  }
  .foot-why .patern.right {
    right: -2rem;
    bottom: -1rem;
  }
}
</style>
      
<section class="why pad6rem" style="background: var(--colors);">
  <div class="container-global">
    
    <div class="title-product text-center">
            <span class="tag-atas text-light">Why Chose Us</span>
            <h2 class="text-light">What Makes Us Unique?</h2>
        </div>
    
    <div class="row mx-0 w-100 px-0">
        <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
            <div class="card h-100">
            <div class="shadow"></div>
            <div class="card-body">
                <div class="icon">
                <i class="fa-solid fa-map"></i>
                </div>
                <h3 class="card-title">Private & Customized Tours</h3>
                <p class="text-card">Flexible, personalized Bali private tours.</p>
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
            <div class="card h-100">
            <div class="shadow"></div>
            <div class="card-body">
                <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
                </div>
                <h3 class="card-title">Expert Local Guides</h3>
                <p class="text-card">Local guides with deep cultural insights.</p>
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
            <div class="card h-100">
            <div class="shadow"></div>
            <div class="card-body">
                <div class="icon">
                <i class="fa-solid fa-car"></i>
                </div>
                <h3 class="card-title">Hassle-Free Travel</h3>
                <p class="text-card">Comfortable transport, stress-free trips.</p>
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
            <div class="card h-100">
            <div class="shadow"></div>
            <div class="card-body">
                <div class="icon">
                <i class="fa-solid fa-gem"></i>
                </div>
                <h3 class="card-title">Exclusive Hidden Gems</h3>
                <p class="text-card">Hidden beaches, waterfalls, unique spots.</p>
            </div>
            </div>
        </div>
        </div>
  </div>
</section>
