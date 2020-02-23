<?php include './layouts/desktop-view/navbar.php'; ?>	

	<div class="container" id="container">
		<div class="row">
			<div class="col-md-2">
				<?php include './layouts/desktop-view/sidenav.php'; ?>
			</div>

			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<!-- header -->
						<div class="jumbotron jumbotron-fluid mb-0 header"></div>
						<!-- header -->

						<!-- navbar -->
						<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-bottom navbar-2 mb-15" id="navbar-2">		
							<div class="btn-group btn-group-1" role="group">				 
								<button class="btn btn-secondary like-btn" type="button">
									<img class="button-icon like" src="/images/like-icon.png">
									<span class="like-span">Like</span>
									<i class="fa fa-caret-down ml-1" style="display:none;"></i>
									<!-- <img class="button-icon" src="/images/like-icon-active.png"> -->
									<!-- Liked -->
									<!-- <i class="fa fa-caret-down ml-1"></i> -->
								</button> 
								<button class="btn btn-secondary" type="button">
									<img class="button-icon" src="/images/message-icon.png">
									Message
								</button> 
								<button class="btn btn-secondary" type="button">
									<img class="button-icon" src="/images/more-icon.png">
									More
								</button>
							</div>
	 
					
							<ul class="navbar-nav ml-md-auto">
								<button type="button" class="btn btn-primary contact-us-btn">Contact Us</button>
							</ul>
						</nav>
						<!-- navbar -->
					</div>
				</div>

				<div class="row">
					<div class="col-md-7">
						<div class="add-post-section mb-15">
							<nav class="navbar navbar-expand-lg navbar-3">		
								<div class="btn-group" role="group">				 
									<button class="btn btn-secondary border-0 active" type="button">
										<img class="button-icon" src="/images/pen-icon.png">
										Status
									</button> 
									<button class="btn btn-secondary border-0" type="button">
										<img class="button-icon" src="/images/image-icon.png">
										Photo
									</button>
								</div>
							
							
								<ul class="navbar-nav ml-md-auto">
									<button class="btn">
										<img class="button-icon" src="/images/logo.png">
										<i class="fa fa-caret-down ml-1"></i>
									</button>
								</ul>
							</nav>
							<div class="md-form">
							  <img class="text-area-image" src="/images/logo.png">
							  <textarea class="form-control post-text-area" rows="3" placeholder="Write something on this Page..."></textarea>
							</div>
						</div>
						
						<?php include './layouts/desktop-view/posts.php'; ?>
						
					</div>

					<?php include './layouts/desktop-view/right-column.php'; ?>

				</div>
			</div>
		</div>
	</div>