<style>
	.contact-wrap {
	    background: white;
	    padding: 30px 30px;
	    margin-top: -65px;
	    box-shadow: 0px 2px 10px 4px #0000000d;
	    border-radius: 10px;
	}

	.wrp-whyi i {
	    color: var(--colors);
	    background: #f1f1f1;
	    height: 60px;
	    width: 60px;
	    line-height: 60px;
	    border-radius: 100px;
	    font-size: 30px;
	    text-align: center;
	}
	.wrp-whyi {
	    position: relative;
	    display: flex;
	}

	.whyi-kiri {
	    margin-right: 20px;
	}

	.wrp-whyi p {
	    font-family: var(--primtext);
	    color: #777;
	    margin-bottom: 0px;
	}
	.wrp-whyi h3 {
	    margin-bottom: 3px;
	    font-family: var(--primtext);
	    text-transform: capitalize;
	    font-weight: 600;
	    font-size: 18px;
	    line-height: 25px;
	    letter-spacing: 0px;
	}
    @media screen and (max-width: 768px) {
        .contact-wrap {
            margin-top: -15px;
        }
        .wrp-whyi {
            margin-bottom:10px;
            display: block;
        }
        .wht .col-6 {
            padding-left: 5px;
            padding-right: 5px;
        }
        .whyi-kiri {margin-right: 0;}
        .whyi-kiri.icon {
            display:flex;
            align-items:center;
            justify-content: center;
            margin-bottom: 10px;
        }
        .wrp-whyi h3 {text-align: center;}
        .wrp-whyi p {text-align: center;}
    }
</style>

<div class="container-global">
	<section class="contact-wrap">
		<div class="row wht">

			<div class="col-md-3 col-6">
				<div class="wrp-whyi">
					<div class="whyi-kiri icon">
						<i class="fas fa-car"></i>
					</div>

					<div class="whyi-kiri">
						<h3>Mobil Terawat</h3>
						<p>Jaminan Bersih & Terawat</p>
					</div>
				</div>
			</div>


			<div class="col-md-3 col-6">
				<div class="wrp-whyi">
					<div class="whyi-kiri icon">
						<i class="fas fa-user"></i>
					</div>

					<div class="whyi-kiri">
						<h3>Staff Ramah</h3>
						<p>Driver & Staff Profesional</p>
					</div>
				</div>
			</div>


			<div class="col-md-3 col-6">
				<div class="wrp-whyi">
					<div class="whyi-kiri icon">
						<i class="fas fa-clock"></i>
					</div>

					<div class="whyi-kiri">
						<h3>Tepat Waktu</h3>
						<p>Delivery & Pickup</p>
					</div>
				</div>
			</div>


			<div class="col-md-3 col-6">
				<div class="wrp-whyi">
					<div class="whyi-kiri icon">
						<i class="fab fa-whatsapp"></i>
					</div>

					<div class="whyi-kiri">
						<h3>On 24 Jam</h3>
						<p>Layanan 24 Jam</p>
					</div>
				</div>
			</div>

		</div>
	</section>
</div>
