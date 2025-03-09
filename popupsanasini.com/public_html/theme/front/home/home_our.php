<style>
	/*=============== Team =============*/
      
      .team {
		font-family: var(--primtext);
	  }
      .team .title-p1 span {
        margin-bottom: 1rem;
        padding: .4rem 1.2rem;
        background-color: #008c8d15;
        color: #008c8d;
        font-size: 15px;
        border-radius: 5px;
      }
      .team .title-p1 h2 {
        max-width: 800px;
        padding: 0;
        margin-top: 1.5rem;
        letter-spacing: .5px;
        font-size: 50px;
        line-height: 58px;
        color: var(--colors);
        font-weight: 800;
        margin-right: auto;
        margin-left: auto;
      }
      .team {
        font-family: var(--primtext);
        position: relative;

        /* background-image: url("https://gotra.sgp1.digitaloceanspaces.com/web-upload/1714255803-28-04-2024-qihEaB4Xcm3DyCARKsQIureVfp5WMlLj.webp"); */
        background-size: contain;
      }
      .team a {
        text-decoration: none !important;
      }
      .team .card {
        box-shadow: 5px 5px 10px #00000020;
        border-radius: 8px;
      }
      .team .card img {
        aspect-ratio: 3/4;
        object-fit: cover;
        border-radius: 8px;
        width: 100%;
      }
      .team .card .card-img-overlay {
        background-color: #fff;
        height: fit-content;
        bottom: 0;
        padding: 1.3rem 1.6rem 1rem;
        border-radius: 10px;
        top: auto;
        transform: scale(0.9);
        transition: 0.5s;
      }
      .team .card h5 {
        font-size: 22px;
        letter-spacing: 0.4px;
        text-transform: none;
        font-weight: 600;
        padding-right: 15px;
        /* max-width: 70%; */
        line-height: 26px;
        position: relative;
      }
      .team .card h5::before {
        position: absolute;
        content: "";
        left: 0;
        top: -1.8rem;
        width: 50%;
        height: 5px;
        border-radius: 2px;
        background-color: var(--color2);
      }
      .team .card p  {
		font-size: 14px;
		font-family: var(--primtext);
		letter-spacing: .5px;
	  }
	  
      .team .card .icon i {
        background-color: var(--color2);
        transition: 0.3s;
        font-size: 1.5rem;
        border-radius: 50%;
        width: 3rem;
        height: 3rem;
        color: #fff;
        display: flex;
		padding-left: 2px;
		padding-bottom: 2px;
        justify-content: center;
        align-items: center;
      }
      .team .card .icon i:hover {
        transition: 0.3s;
        background-color: var(--colors);
      }

      @media (max-width: 768px) {
        .team .title-p1 h2 {
            font-size: 35px;
            line-height: 45px;
        }

        .team .card img { height: 430px; }
      }
/*=============== Team =============*/
</style>
<section class="pad6rem team">
    <!-- <div class="patern"></div> -->
    <div class="container-global wow fadeIn" data-wow-duration="2s" >

        
        <div class="title-product text-center">
            <span class="tag-atas">Our Expert Guides</span>
            <h2>Team Behind <span>Your Adventure</span></h2>
        </div>

        <div class="row justify-content-center">

				<div class="col-sm-4 mb-3">
          <div class="card border-0">
            <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1736755347-13-01-2025-Co6P7inyp1JlSYfteOQc58xUK3gdG40h.webp" alt="Pande" />
            <div class="card-img-overlay mb-2">
              <div
                class="d-flex justify-content-between mb-3"
                style="flex-wrap: nowrap; margin-top: 2rem"
              >
                <div class="capt">
                  <h5 class="card-title">Pande</h5>
							    <p class="card-text">Our Driver</p>
                </div>
                <!-- <div class="icon">
                  <a href="<?= $func->dm_whatsapp() ?>">
                      <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 mb-3">
          <div class="card border-0">
            <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1736755345-13-01-2025-1hnoGFzv9JbQqBP3EVleXk4IZiAWmyYS.webp" alt="Dwi" />
            <div class="card-img-overlay mb-2">
              <div
                class="d-flex justify-content-between mb-3"
                style="flex-wrap: nowrap; margin-top: 2rem"
              >
                <div class="capt">
                  <h5 class="card-title">Dwi</h5>
							    <p class="card-text">Our Driver</p>
                </div>
                <!-- <div class="icon">
                  <a href="<?= $func->dm_whatsapp() ?>">
                      <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>

				<div class="col-sm-4 mb-3">
          <div class="card border-0">
            <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1736755355-13-01-2025-2MOtcpK503Wk6QXusrvdhLVHPSzaeqDA.webp" alt="Eka" />
            <div class="card-img-overlay mb-2">
              <div
                class="d-flex justify-content-between mb-3"
                style="flex-wrap: nowrap; margin-top: 2rem"
              >
                <div class="capt">
                  <h5 class="card-title">Eka</h5>
							    <p class="card-text">Our Driver</p>
                </div>
                <!-- <div class="icon">
                  <a href="<?= $func->dm_whatsapp() ?>">
                      <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>

				<div class="col-sm-4 mb-3">
          <div class="card border-0">
            <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1736755344-13-01-2025-DaPF4LZN28IWKnvG61ioSQl9YH3A7Er5.webp" alt="Ketut" />
            <div class="card-img-overlay mb-2">
              <div
                class="d-flex justify-content-between mb-3"
                style="flex-wrap: nowrap; margin-top: 2rem"
              >
                <div class="capt">
                  <h5 class="card-title">Ketut</h5>
							    <p class="card-text">Our Driver</p>
                </div>
                <!-- <div class="icon">
                  <a href="<?= $func->dm_whatsapp() ?>">
                      <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
				<div class="col-sm-4 mb-3">
          <div class="card border-0">
            <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1736755353-13-01-2025-9cTkQUiduPF3LrZClHpBGyAKwb2W7IfN.webp" alt="Jerink" />
            <div class="card-img-overlay mb-2">
              <div
                class="d-flex justify-content-between mb-3"
                style="flex-wrap: nowrap; margin-top: 2rem"
              >
                <div class="capt">
                  <h5 class="card-title">Jerink</h5>
							    <p class="card-text">Our Driver</p>
                </div>
                <!-- <div class="icon">
                  <a href="<?= $func->dm_whatsapp() ?>">
                      <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
				<div class="col-sm-4 mb-3">
          <div class="card border-0">
            <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1736755345-13-01-2025-idHjbun78f1ahDErqG52wYeJUzyVmoPR.webp" alt="Arwi" />
            <div class="card-img-overlay mb-2">
              <div
                class="d-flex justify-content-between mb-3"
                style="flex-wrap: nowrap; margin-top: 2rem"
              >
                <div class="capt">
                  <h5 class="card-title">Arwi</h5>
							    <p class="card-text">Our Driver</p>
                </div>
                <!-- <div class="icon">
                  <a href="<?= $func->dm_whatsapp() ?>">
                      <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
				<div class="col-sm-4 mb-3">
          <div class="card border-0">
            <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1736755347-13-01-2025-7cYR2Ih8jq5pDBSZGsfJLNFkb4WiT1aC.webp" alt="Balon" />
            <div class="card-img-overlay mb-2">
              <div
                class="d-flex justify-content-between mb-3"
                style="flex-wrap: nowrap; margin-top: 2rem"
              >
                <div class="capt">
                  <h5 class="card-title">Balon</h5>
							    <p class="card-text">Our Driver</p>
                </div>
                <!-- <div class="icon">
                  <a href="<?= $func->dm_whatsapp() ?>">
                      <i class="fa-brands fa-whatsapp"></i>
                  </a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
                
      </div>

    </div>
</section>