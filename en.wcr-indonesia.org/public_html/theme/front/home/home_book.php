<?php 
$segment = $this->ci->uri->segment(1).'/';
$samakan = '';
if ($segment == 'search/') {
	$samakan = $data->search_type;
} 
if ($samakan == ROUTE_SEARCH_VIDEO || $segment == ROUTE_VIDEO_VIEW || $segment == ROUTE_VIDEO_TAG || $segment == ROUTE_VIDEO){
	$list = 'video';
	$src = ROUTE_SEARCH_VIDEO;
} elseif ($samakan == ROUTE_SEARCH_BLOG || $segment == ROUTE_BLOG_VIEW || $segment == ROUTE_BLOG_TAG || $segment == ROUTE_BLOG){
	$list = 'article';
	$src = ROUTE_SEARCH_BLOG;
} else{
	$list = 'product';
	$src = ROUTE_SEARCH_PRODUCT;
} ?>

<style>
	.book-text {
		color: white; font-family: 'Roboto', sans-serif; 
		font-weight: 500; 
		font-size: 15px;
	}

	.btn-primary-cus2 {
    padding: 13px 36px;
    line-height: 20px;
    text-transform: uppercase;
    background: none;
    color: #ffffff !important;
    font-size: 14px;
    display: inline-block;
    font-weight: 500;
    border: 2px solid #ffffff !important;
    font-family: 'Roboto', sans-serif;
    border-radius: 5px;
	}

	.btn-primary-cus2:hover {
		background-color: white;
		color: #1fc055 !important;
		border-color: #eee !important;
		transition: 500ms all ease;
	}
</style>



<!-- section id="book" style="background-color: #1fc055; padding: 40px;">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<p class="book-text">Book direct to get the best rate available</p>
			</div>

			<div class="col-md-10">
				<form>
					<div class="form-group row">

						<div class="col-sm-2" style="padding: 0; padding-left: 10px;">
							<label for="inputPassword" class="book-text" style="font-size: 17px;">Arrival Date</label>
								<input type="date" class="form-control">
						</div>

						<div class="col-sm-2" style="padding: 0; padding-left: 10px;">
							<label for="inputPassword" class="book-text" style="font-size: 17px;">Deperture Date</label>
								<input type="date" class="form-control">
						</div>

					
						<div class="col-sm-2" style="padding: 0; padding-left: 10px;">
							<label for="inputPassword" class="book-text" style="font-size: 17px;">Adults</label>
								<select class="custom-select">
  									<option selected>1</option>
  									<option value="2">2</option>
  									<option value="3">3</option>
  									<option value="4">4</option>
  									<option value="5">5</option>
  									<option value="6">6</option>
  									<option value="7">7</option>
								</select>
						</div>


						<div class="col-sm-2" style="padding: 0; padding-left: 10px;">
							<label for="inputPassword" class="book-text" style="font-size: 17px;">Children</label>
								<select class="custom-select">
									<option selected>0</option>
  									<option value="1">1</option>
  									<option value="2">2</option>
  									<option value="3">3</option>
  									<option value="4">4</option>
  									<option value="5">5</option>
  									<option value="6">6</option>
								</select>
						</div>

						<div class="col-md-2 mt-3">
							<button type="submit" name="check" class="btn btn-primary-cus2">Check Avaibility</button>
						</div>

					</div>

			</div>
		</div>
	</div>
</section> -->

<section id="book" style="background-color: #1fc055; padding: 40px;">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<p class="book-text">Book direct to get the best rate available</p>
			</div>

			<div class="col-md-10">
				<form action="<?= base_url('search/').$src ?>">
					<div class="form-group row">

						<div class="col-md-8" style="padding: 0; padding-left: 10px;">
							<label for="search" class="book-text" style="font-size: 17px;">Search Avaibility</label>
								<input type="text" name="q" class="form-control">
						</div>

						<div class="col-md-2 mt-3">
							<button type="submit" class="btn btn-primary-cus2">Check Avaibility</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</section>