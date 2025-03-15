<style>
	.pro-contain {
		border-radius: 4px;
		box-shadow: 0px 0px 5px 1px #00000047;
	}
	.pro-title{
		font-size: 16px;
    	line-height: 20px;
    	font-weight: 700;
	    font-style: normal;
	    font-stretch: normal;
	    letter-spacing: normal;
	    min-height: 40px;
    	max-height: 40px;
    	color: #374044
	}
	.pro-img {
		overflow: hidden;
		border-top-right-radius: 4px;
    	border-top-left-radius: 4px;
	}
	.pro-img img {
		transition: .5s ease;
		min-height: 170px;
		max-height: 170px;
		width: 100%;
	}
	.pro-contain:hover .pro-img img {
		transform: scale(1.1);
	}
	.pro-body {
		background-color: #fff;
		padding: 12px 16px;
		border-bottom-right-radius: 4px;
    	border-bottom-left-radius: 4px;
	}
	.pro-posisi {
		position: absolute;
		bottom: 1px;
	}
	.pro-price {
		color: #374044;
	}
	.pro-price span {
		font-weight: 700;
	}

	.owl-carousel .owl-nav button[class*="owl-"] {
	    transform: scale(1.5);
	    margin: 0 23px;
	    top: -17px;
	}
</style>
<section style="background-color: #f4f4f4" class="pt-3">
	<div class="container">
		<div class="row mb-2">
			<div class="col-8">
				<h1 class="mb-0 title-cat">Popular Activities</h1>
				<h5 class="mb-0 subtitle-cat none-768">Favourite experiences booked by travellers</h5>
			</div>
			<div class="col-4 position-relative"><a href="" class="btn btn-outline-primary custom">See More</a></div>
		</div>

		<div class="row">
			<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark" data-plugin-options="{'items': 4, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
				
			<div class="col-md-12 pt-3 pb-2">
				<div class="pro-contain">
					<div class="pro-img">
						<img src="https://fast-cdn.gotrasoft.com/web-upload/1557993358_16-05-2019_1555308090_15-04-2019_Crystal-Bay-Nusa-Penida-1024x695.jpg" alt="">
					</div>
					<div class="pro-body">
						<h3 class="pro-title mb-0"><a href="">Bali Resort</a></h3>
						<div class="row">
							<div class="col-6 position-relative">
								<div class="pro-posisi">Kuta Bali</div>
							</div>
							<div class="col-6">
								<p class="mb-0 text-right" style="line-height: 10px">from</p>
								<p class="mb-0 text-right pro-price"><span>$232</span> USD</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		</div>
	</div>
</section>