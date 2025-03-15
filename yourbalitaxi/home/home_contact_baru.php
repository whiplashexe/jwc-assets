<style>
	.contact-wrap {
        position: relative;
        z-index: 5;
	    background: #fff;
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

        .wrp-whyi i {
		    height: 60px;
		    width: 60px;
		    font-size: 24px;
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
        .wrp-whyi h3 {
        	text-align: center;
        	font-size: 15px;
    		line-height: 25px;
        }
        .wrp-whyi p {
	        text-align: center;
	        font-size: 12px;
	        line-height: 22px;
	    }
    }
</style>

<div class="container-global">
	<section class="contact-wrap">
		<div class="row wht">
        
            <div class="col-md-3 col-6">
				<div class="wrp-whyi">
					<div class="whyi-kiri icon">
						<i class="fa-solid fa-money-check-dollar"></i>
					</div>

					<div class="whyi-kiri">
						<h3>Affordable Plans</h3>
						<p>Prepaid options with no hidden fees.</p>
					</div>
				</div>
			</div>


			<div class="col-md-3 col-6">
				<div class="wrp-whyi">
					<div class="whyi-kiri icon">
						<i class="fa-solid fa-expand"></i>
					</div>

					<div class="whyi-kiri">
						<h3>Instant Activation</h3>
						<p>Scan & connect in minutes, no physical SIM needed.</p>
					</div>
				</div>
			</div>


			<div class="col-md-3 col-6">
				<div class="wrp-whyi">
					<div class="whyi-kiri icon">
						<i class="fa-solid fa-wifi"></i>
					</div>

					<div class="whyi-kiri">
						<h3>Best Coverage</h3>
						<p>Powered by Telkomsel with fast 4G/5G speeds.</p>
					</div>
				</div>
			</div>


			<div class="col-md-3 col-6">
				<div class="wrp-whyi">
					<div class="whyi-kiri icon">
						<i class="fa-solid fa-check-to-slot"></i>
					</div>

					<div class="whyi-kiri">
						<h3>Flexible Validity</h3>
						<p>Choose short-term or long-term plans.</p>
					</div>
				</div>
			</div>

		</div>
	</section>
</div>
