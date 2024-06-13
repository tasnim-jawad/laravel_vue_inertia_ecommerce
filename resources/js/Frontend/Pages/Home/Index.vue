<template>
   <!-- Offcanvas Menu start -->
			<div class="offcanvas offcanvas-start" id="offcanvasMenu">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title">Menu</h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">

					<div class="account-menu">
						<ul>
							<li><a href="account.html">My Account</a></li>
							<li><a href="cart.html">compare <span>(0)</span></a></li>
							<li><a href="wishlist.html">Wishlist <span>(0)</span></a></li>
						</ul>
					</div>

					<div class="accordion" id="languageMenu">
						<div class="accordion-item">
							<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne">English</button>
							<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#languageMenu">
								<ul>
									<li><a href="#">France</a></li>
									<li><a href="#">Germany</a></li>
									<li><a href="#">Japanese</a></li>
								</ul>
							</div>
						</div>

						<div class="accordion-item">
							<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">USD</button>
							<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#languageMenu">
								<ul>
									<li><a href="#">EUR - Euro</a></li>
									<li><a href="#">GBP - British Pound</a></li>
									<li><a href="#">INR - Indian Rupee</a></li>
								</ul>
							</div>
						</div>
					</div>

					

					<div class="mobail-menu">
						<nav class="offcanvas-menu">
							<ul>
								<li class="active"><a href="index.html">Home</a>
									<ul class="sub-menu">
										<li><a href="index.html">Home shop 1</a></li>
										<li><a href="index-2.html">Home shop 2</a></li>
										<li><a href="index-3.html">Home shop 3</a></li>
									</ul>
								</li>
								<li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a class="mega-title" href="#">Shop Layout</a>
											<ul>
												<li><a href="shop-full-width.html">Full Width</a></li>
												<li><a href="shop-sitebar-right.html">Sidebar Right</a></li>
												<li><a href="shop-sitebar-left.html">Sidebar Left</a></li>
												<li><a href="Shop-list-view.html">List View</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Shop Pages</a>
											<ul class="sub-menu">
												<li><a href="account.html">My account</a></li>
												<li><a href="cart.html">Shoping cart</a></li>
												<li><a href="checkout.html">checkout</a></li>
												<li><a href="wishlist.html">wishlist</a></li>
											</ul>
										</li>
										<li><a class="mega-title" href="#">Product type</a>
											<ul class="sub-menu">
												<li><a href="shop-simple-product.html">simple product</a></li>
												<li><a href="shop-variable-Product.html">Variable Product</a></li>
												<li><a href="shop-grouped-Product.html">Grouped Product</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="blog.html">blog</a>
									<ul class="sub-menu">
										<li><a href="#">Blog Layouts 1</a>
											<ul class="sub-menu">
												<li><a href="blog-left-sitebar-list.html">left sitebar list</a></li>
												<li><a href="blog-left-sitebar-1.html">left sitebar grid 1</a></li>
												<li><a href="blog-left-sitebar-2.html">left sitebar grid 2</a></li>
												<li><a href="blog-left-sitebar-3.html">left sitebar grid 3</a></li>
											</ul>
										</li>
										<li><a href="#">Blog Layouts 2</a>
											<ul class="sub-menu">
												<li><a href="blog-right-sitebar-list.html">right sitebar list</a></li>
												<li><a href="blog-right-sitebar-list-1.html">right sitebar list 1</a></li>
												<li><a href="blog-right-sitebar-list-2.html">right sitebar list 2</a></li>
												<li><a href="blog-right-sitebar-list-3.html">right sitebar list 3</a></li>
											</ul>
										</li>
										<li><a href="#">Blog Layouts 3</a>
											<ul class="sub-menu">
												<li><a href="blog-1-col.html">grid 1 columns</a></li>
												<li><a href="blog-2-col.html">grid 2 columns</a></li>
												<li><a href="blog-3-col.html">grid 3 columns</a></li>
												<li><a href="blog-4-col.html">grid 4 columns</a></li>
											</ul>
										</li>
										<li><a href="#">Blog Layouts 4</a>
											<ul class="sub-menu">
												<li><a href="blog-details-1.html">format:images</a></li>
												<li><a href="blog-details-gallery.html">format:gallery</a></li>
												<li><a href="blog-details-vedio.html">format:video</a></li>
												<li><a href="blog-details-2.html">format:audio</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">pages</a>
									<ul class="sub-menu">
										<li><a href="about.html">about us</a></li>
										<li><a href="faq.html">F.A.Q.s</a></li>
										<li><a href="404.html">404 pages</a></li>
									</ul>
								</li>
								<li><a href="protfolio.html">Protfolio</a>
									<ul class="sub-menu">
										<li><a href="protfolio-details-1.html">single project</a></li>
										<li><a href="protfolio-2-col.html">two columns</a></li>
										<li><a href="protfolio-3-col.html">three columns</a></li>
										<li><a href="protfolio.html">four columns</a></li>
									</ul>
								</li>
								<li><a href="contact.html">contact us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Offcanvas Menu end -->

			<!-- slider area start -->
			<div class="container clearfix">
				<div class="row justify-content-end">
					<div class="col-xl-9 col-lg-8">
						<home-slider></home-slider>
					</div>
				</div>
			</div>

			<div class="all-product-area mtb-45">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="latest-deals box-shadow mb-35 bg-fff">
								<div class="product-title home3-bg text-uppercase">
									<i class="fa fa-history icon home3-bg2"></i>
									<h3>latest deals</h3>
								</div>
								
								<div class="latest-deals-active">
									<div class="product-wrapper">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/18.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/2.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
											<span class="sale">Sale</span>
											<div class="deal-count">
												<div class="timer">
													<div data-countdown="2023/12/01"></div>
												</div>	
											</div>
										</div>
										<div class="product-content home3-hover ">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											<span>&300.00</span>
										</div>
									</div>
									<div class="product-wrapper">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/1.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/2.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
											<span class="sale">Sale</span>
											<div class="deal-count">
												<div class="timer">
													<div data-countdown="2023/12/01"></div>
												</div>	
											</div>
										</div>
										<div class="product-content home3-hover ">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											<span>&300.00</span>
										</div>
									</div>
									<div class="product-wrapper">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/6.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/3.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
											<span class="sale">Sale</span>
											<div class="deal-count">
												<div class="timer">
													<div data-countdown="2023/12/01"></div>
												</div>	
											</div>
										</div>
										<div class="product-content home3-hover">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											<span>&300.00</span>
										</div>
									</div>
									<div class="product-wrapper">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/3.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/5.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
											<span class="sale">Sale</span>
											<div class="deal-count">
												<div class="timer">
													<div data-countdown="2023/12/01"></div>
												</div>	
											</div>
										</div>
										<div class="product-content home3-hover">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											<span>&300.00</span>
										</div>
									</div>							
								</div>
							</div>
							<!-- featured-area start -->
							<div class="featured-area box-shadow bg-fff">
								<div class="product-title home3-bg text-uppercase">
									<i class="fa fa-star-o icon home3-bg2"></i>
									<h3>featured</h3>
								</div>
								<div class="feautred-active home2 left-right-angle">
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/9.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/15.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatleft">
												<h3><a href="#">Cras nec nisl ut erat</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/6.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatleft">
												<h3><a href="#">Cras nec nisl ut erat</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/11.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/9.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/7.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Cras nec nisl ut erat</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/12.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/14.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Ligula euismod eget</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/15.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/17.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Ligula euismod eget</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/8.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/18.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/7.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/5.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/11.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/17.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/1.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/2.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/3.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/4.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/5.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/13.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/7.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/9.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/10.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/11.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/12.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/6.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/3.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/13.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/14.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/15.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/16.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/17.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/18.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/4.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/10.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/3.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/4.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/5.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/7.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- featured-area end -->
							<!-- testimonils-area start -->
							<div class="testimonils-area box-shadow mtb-35 bg-fff">
								<div class="product-title home3-bg text-uppercase">
									<i class="fa fa-star-o icon home3-bg2"></i>
									<h3>TESTIMONIALS</h3>
								</div>
								<div class="testmonial-active home2 right left-right-angle">
									<div class="single-testimonil clear">
										<div class="testimonil-content p mtb-25">
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim…</p>
										</div>
										<div class="test-img floatleft">
											<img src="/frontend/assets/images/test/2.jpg" alt="">
										</div>
										<div class="test-info">
											<h6>Kaji Hasibur Rahman</h6>
											<span>Web Designer</span>
										</div>
									</div>
									<div class="single-testimonil clear">
										<div class="testimonil-content p mtb-25">
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim…</p>
										</div>
										<div class="test-img floatleft">
											<img src="/frontend/assets/images/test/1.jpg" alt="">
										</div>
										<div class="test-info">
											<h6>Lorem ipsum</h6>
											<span>CEO of WooThemes</span>
										</div>
									</div>
									<div class="single-testimonil clear">
										<div class="testimonil-content p mtb-25">
											<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim…</p>
										</div>
										<div class="test-img floatleft">
											<img src="/frontend/assets/images/test/1.jpg" alt="">
										</div>
										<div class="test-info">
											<h6>Lorem ipsum</h6>
											<span>CEO of WooThemes</span>
										</div>
									</div>
								</div>
							</div>
							<!-- testimonils-area end -->
							<!-- blog-area start -->
							<div class="blog-area box-shadow bg-fff">
								<div class="product-title home3-bg text-uppercase">
									<i class="fa fa-comments-o icon home3-bg2"></i>
									<h3>LATEST BLOG</h3>
								</div>
								<div class="feautred-active right home2 left-right-angle">
									<div class="blog-wrapper">
										<div class="blog-img mtb-30">
											<a href="#">
												<img src="/frontend/assets/images/blog/1.jpg" alt="" />
											</a>
										</div>
										<div class="blog-content home3-hover">
											<h3><a href="#">hello world</a></h3>
											<div class="blog-meta">
												<span>April 18, 2022</span>
												<span>0 Comment(s)</span>
											</div>
											<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
										</div>
									</div>
									<div class="blog-wrapper">
										<div class="blog-img mtb-30">
											<a href="#">
												<img src="/frontend/assets/images/blog/2.jpg" alt="" />
											</a>
										</div>
										<div class="blog-content home3-hover">
											<h3><a href="#">hello world</a></h3>
											<div class="blog-meta">
												<span>April 18, 2022</span>
												<span>0 Comment(s)</span>
											</div>
											<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
										</div>
									</div>
									<div class="blog-wrapper">
										<div class="blog-img mtb-30">
											<a href="#">
												<img src="/frontend/assets/images/blog/3.jpg" alt="" />
											</a>
										</div>
										<div class="blog-content home3-hover">
											<h3><a href="#">hello world</a></h3>
											<div class="blog-meta">
												<span>April 18, 2022</span>
												<span>0 Comment(s)</span>
											</div>
											<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
										</div>
									</div>
									<div class="blog-wrapper">
										<div class="blog-img mtb-30">
											<a href="#">
												<img src="/frontend/assets/images/blog/4.jpg" alt="" />
											</a>
										</div>
										<div class="blog-content home3-hover">
											<h3><a href="#">hello world</a></h3>
											<div class="blog-meta">
												<span>April 18, 2022</span>
												<span>0 Comment(s)</span>
											</div>
											<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
										</div>
									</div>
									<div class="blog-wrapper">
										<div class="blog-img mtb-30">
											<a href="#">
												<img src="/frontend/assets/images/blog/5.jpg" alt="" />
											</a>
										</div>
										<div class="blog-content home3-hover">
											<h3><a href="#">hello world</a></h3>
											<div class="blog-meta">
												<span>April 18, 2022</span>
												<span>0 Comment(s)</span>
											</div>
											<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
										</div>
									</div>
								</div>
							</div>
							<!-- blog-area end -->	
							<!-- newsletter-area start -->
							<div class="newsletter-area box-shadow mt-35 bg-fff">
								<div class="product-title home3-bg text-uppercase">
									<i class="fa fa-envelope-o icon home3-bg2"></i>
									<h3>NEWSLETTER SIGN UP</h3>
								</div>
								<div class="newsletter form-style plbr-15">
									<p>  Submit your mail to get events </p>
									<form action="#">
										<input type="email" placeholder="Email"/>
										<button><i class="fa fa-paper-plane-o"></i></button>
									</form>
								</div>
							</div>
							<!-- newsletter-area start -->
						</div>
						<!-- product-area start -->
						<div class="col-lg-9">
							<div class="product box-shadow bg-fff">
								<div class="product-title home3-bg text-uppercase">
									<i class="fa fa-paper-plane-o icon home3-bg2"></i>
									<h3>New Products</h3>
								</div>
								<div class="new-product-active home2 left left-right-angle">
									<div class="product-wrapper bl">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/5.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon c-fff home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product-content home3-hover">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<span>&300.00</span>
										</div>
									</div>
									<div class="product-wrapper bl">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/9.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/5.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon c-fff home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product-content home3-hover">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<span>&300.00</span>
										</div>
									</div>
									<div class="product-wrapper bl">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/3.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/4.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon c-fff home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product-content home3-hover">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<span>&300.00</span>
										</div>
									</div>
									<div class="product-wrapper bl">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/7.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon c-fff home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product-content home3-hover">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<span>&300.00</span>
										</div>
									</div>
									<div class="product-wrapper bl">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/11.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/12.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon c-fff home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product-content home3-hover">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<span>&300.00</span>
										</div>
									</div>
									<div class="product-wrapper bl">
										<div class="product-img">
											<a href="#">
												<img src="/frontend/assets/images/product/15.jpg" alt="" class="primary"/>
												<img src="/frontend/assets/images/product/16.jpg" alt="" class="secondary"/>
											</a>
											<div class="product-icon c-fff home3-hover-bg">
												<ul>
													<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
													<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
												</ul>
											</div>
											<span class="sale">Sale</span>
										</div>
										<div class="product-content home3-hover">
											<h3><a href="#">Adipiscing cursus eu</a></h3>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<span>&300.00</span>
										</div>
									</div>
								</div>
							</div>
							<!-- banner-area start -->
							<div class="banner-area mtb-35">
								<div class="row g-4">
									<div class="col-md-6">
										<div class="single-banner">
											<a href="#">
												<img src="/frontend/assets/images/banner/4.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="single-banner">
											<a href="#">
												<img src="/frontend/assets/images/banner/5.jpg" alt="">
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- banner-area end -->

							<!-- tab-area start -->
							<div class="tab-area box-shadow bg-fff">
								<div class="product-title home3-bg text-uppercase">
									<i class="fa fa-check-square-o icon home3-bg2"></i>
									<h3>Products category</h3>
									<div class="tab-menu home3-tab-menu floatright hidden-xs">
										<ul class="nav">
											<li><a class="active" href="#electronics" data-bs-toggle="tab">Electronics</a></li>
											<li><a href="#smartphone" data-bs-toggle="tab">Smartphone</a></li>
											<li><a href="#tablets" data-bs-toggle="tab">Tablets</a></li>
										</ul>
									</div>
								</div>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="electronics">
										<div class="tab-active left home2 left-right-angle">
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/1.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/2.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/3.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/4.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/5.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/7.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/9.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/10.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/11.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/12.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/13.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/14.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/15.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/16.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/6.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/7.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
										</div>								
									</div>
									<div role="tabpanel" class="tab-pane fade" id="smartphone">
										<div class="tab-active left home2 left-right-angle">
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/16.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/15.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/14.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/13.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#"><i class="fa fa-comments"></i></a></li>
																<li><a href="#"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/12.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/11.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/10.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/9.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/8.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/7.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/6.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/5.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/4.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/3.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/2.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/1.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/6.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/7.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/8.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/9.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="tablets">
										<div class="tab-active left home2 left-right-angle">
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/4.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/5.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/2.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/2.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/9.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/11.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/9.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/12.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/14.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/5.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/7.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/13.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/14.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/9.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/16.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
											<div class="product-items">
												<div class="product-wrapper bb bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/10.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/1.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
														<span class="sale">Sale</span>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
												<div class="product-wrapper bl">
													<div class="product-img">
														<a href="#">
															<img src="/frontend/assets/images/product/12.jpg" alt="" class="primary"/>
															<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
														</a>
														<div class="product-icon c-fff home3-hover-bg">
															<ul>
																<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
																<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product-content home3-hover">
														<h3><a href="#">Adipiscing cursus eu</a></h3>
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
														<span>&300.00</span>
													</div>
												</div>
											</div>
										</div>					
									</div>
								</div>
							</div>
							<!-- tab-area end -->

							<!-- banner-area start -->
							<div class="banner-area mtb-35">
								<div class="row g-4">
									<div class="col-sm-6">
										<div class="single-banner">
											<a href="#">
												<img src="/frontend/assets/images/banner/4.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="single-banner">
											<a href="#">
												<img src="/frontend/assets/images/banner/5.jpg" alt="">
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- banner-area end -->
							
							<!-- mostviewed-area start -->
							<div class="mostviewed-area mt-35 box-shadow bg-fff">
								<div class="product-title home3-bg text-uppercase">
									<i class="fa fa-check-square-o icon home3-bg2"></i>
									<h3>Products category</h3>
								</div>
								<div class="mostviewed-active-2 home2 left-right-angle">
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/6.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatleft">
												<h3><a href="#">Cras nec nisl ut erat</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/11.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/9.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/7.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Cras nec nisl ut erat</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/15.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/17.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Ligula euismod eget</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/8.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/18.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/7.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/5.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/1.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/2.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/3.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/4.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/5.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/7.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/9.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/10.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/11.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/12.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/13.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/14.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/15.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/16.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/17.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/18.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/3.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/4.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/5.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="/frontend/assets/images/product/7.jpg" alt="" class="primary"/>
													<img src="/frontend/assets/images/product/8.jpg" alt="" class="secondary"/>
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- mostviewed-area end -->
						</div>
						<!-- product-area end -->
					</div>
				</div>
			</div>
			<!-- brand-area start -->
			<div class="brand-area mb-35">
				<div class="container">
					<div class="brand-active  box-shadow p-15 bg-fff">
						<div class="single-brand">
							<a href="#">
								<img src="/frontend/assets/images/brand/1.jpg" alt="" />
							</a>
						</div>
						<div class="single-brand">
							<a href="#">
								<img src="/frontend/assets/images/brand/2.jpg" alt="" />
							</a>
						</div>
						<div class="single-brand">
							<a href="#">
								<img src="/frontend/assets/images/brand/3.jpg" alt="" />
							</a>
						</div>
						<div class="single-brand">
							<a href="#">
								<img src="/frontend/assets/images/brand/1.jpg" alt="" />
							</a>
						</div>
						<div class="single-brand">
							<a href="#">
								<img src="/frontend/assets/images/brand/4.jpg" alt="" />
							</a>
						</div>
						<div class="single-brand">
							<a href="#">
								<img src="/frontend/assets/images/brand/5.jpg" alt="" />
							</a>
						</div>
						<div class="single-brand">
							<a href="#">
								<img src="/frontend/assets/images/brand/6.jpg" alt="" />
							</a>
						</div>
						<div class="single-brand">
							<a href="#">
								<img src="/frontend/assets/images/brand/7.jpg" alt="" />
							</a>
						</div>
						<div class="single-brand">
							<a href="#">
								<img src="/frontend/assets/images/brand/8.jpg" alt="" />
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- brand-area end -->

			<!-- order-area start -->
			<div class="order-area box-shadow ptb-30 bb bg-fff">
				<div class="container">
					<div class="row g-4">
						<div class="col-lg-3 col-sm-6">
							<div class="single-order c-fff home3-bg p-20">
								<div class="order-icon">
									<span class="fa fa-plane"></span>
								</div>
								<div class="order-content">
									<h5>World-Wide Shipping</h5>
									<span>On order over $100</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="single-order c-fff home3-bg p-20">
								<div class="order-icon">
									<span class="fa fa-refresh"></span>
								</div>
								<div class="order-content">
									<h5>30 Days Return</h5>
									<span>Moneyback guarantee</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="single-order c-fff home3-bg p-20">
								<div class="order-icon">
									<span class="fa fa-umbrella"></span>
								</div>
								<div class="order-content">
									<h5>SUPPORT 24/7</h5>
									<span>Call us: ( +123 ) 456 789</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="single-order c-fff home3-bg p-20">
								<div class="order-icon">
									<span class="fa fa-user"></span>
								</div>
								<div class="order-content">
									<h5>MEMBER DISCOUNT</h5>
									<span>10% on order over $200</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- order-area end -->
        
    
</template>

<script>
    import HomeSlider from "../../Components/Slider/HomeSlider.vue"
    export default {
        components:{ HomeSlider }
    }

</script>