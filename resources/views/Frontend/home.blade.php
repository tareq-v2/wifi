@extends('Frontend.master')
@section('body')

<div class="container-fluid px-0" style="overflow-x: hidden;">
  
  <div class="top-slider" style="margin: 25px 0;">
    <div>
      <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8dGVjaG5vbG9neXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8dGVjaG5vbG9neXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8dGVjaG5vbG9neXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8dGVjaG5vbG9neXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8dGVjaG5vbG9neXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
    </div>
  </div>
  {{-- data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' --}}
  <div class="container">
    <div class="bottom-slider my-4" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
      <div>
        <img src="{{ asset('/Frontend/image/bottomSliderImg') }}/1-asia.png" alt="bottomSliderImg">
      </div>
      <div>
        <img src="{{ asset('/Frontend/image/bottomSliderImg') }}/apnic.jpg" alt="bottomSliderImg">
      </div>
      <div>
        <img src="{{ asset('/Frontend/image/bottomSliderImg') }}/cambium-networks.png" alt="bottomSliderImg">
      </div>
      <div>
        <img src="{{ asset('/Frontend/image/bottomSliderImg') }}/cisco.png" alt="bottomSliderImg">
      </div>
      <div>
        <img src="{{ asset('/Frontend/image/bottomSliderImg') }}/earth1.png" alt="bottomSliderImg">
      </div>
      <div>
        <img src="{{ asset('/Frontend/image/bottomSliderImg') }}/GP.png" alt="bottomSliderImg">
      </div>
    </div>
  </div>
</div>
  
  
  <div>
</div>
	<section class="sub-list-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/image_left_sub_list.png" alt="sub list image">
				</div>
				<div class="col-12 col-md-6">
					<div class="sub-list-text">
						<h1>Sub list section</h1>
						<div class="divider"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
						<div class="single-item">
							<div class="logo"><img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/upload.png" alt="upload button"></div>
							<div class="text">
								<h3>Title</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, voluptates!</p>
							</div>
						</div>
						<div class="single-item">
							<div class="logo"><img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/download.png" alt="download button"></div>
							<div class="text">
								<h3>Title</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, voluptates!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="standard-picture-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 d-none d-md-block">
					<h1>Standard picture section</h1>
					<div class="divider"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, atque non. Officia totam magni quibusdam illo explicabo nisi nulla nemo, provident iusto cupiditate necessitatibus quod natus. Culpa voluptatum, iste eius natus libero perspiciatis pariatur.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis rerum, magnam temporibus officiis.</p>
				</div>
				<div class="col-12 col-md-6 d-none d-md-block"><img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/image_right_standard.png" alt=""></div>
			</div>			<!-- end row -->
		</div>		<!-- end container -->
	</section>	<!-- end standard-picture-area -->

	<section class="feature-area">
		<h1>Fiber Net Provides</h1>
		<div class="divider"></div>
		<p>Reliable, Safe, Fast High speed broadband internet connection from Fiber Net Ltd.</p>
		<div class="container">
		 	<div class="row">
				<div class="col-12 col-md-4">
					<div class="logo light">
						<img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/bulb.png" alt="">
					</div>
						<h2>Home Internet</h2>
						<p>
							<ul>
								<li>Bufferless Steaming</li>
								<li>Lag Free Gaming</li>
								<li>Real IP Included</li>
								<li>Stable Connection With No Interruptions</li>
							</ul>
						</p>
				</div>				<!-- end col-md-4 -->
				<div class="col-12 col-md-4">
					<div class="logo light">
						<img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/keyboard.png" alt="">
					</div>
						<h2>Corporate Internet</h2>
						<p>
							<ul>
								<li>Dedicated Network</li>
								<li>Business-friendly SLAs</li>
								<li>24×7 Support</li>
								<li>Flexible &amp; Scalable Bandwidth</li>
							</ul>
						</p>
				</div>				<!-- end col-md-4 -->
				<div class="col-12 col-md-4">
					<div class="logo light">
						<img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/3.png" alt="">
					</div>
						<h2>Data Connectivity</h2>
						<p>
							<ul>
								<li>Optimal Performance</li>
								<li>World Class Reliability</li>
								<li>Optical Fiber Network</li>
								<li>Symmetrical Upload &amp; Download Speeds</li>
							</ul>
						</p>
					</div>				<!-- end col-md-4 -->
		 		</div>		 	<!-- end row -->
		 </div> 		 <!-- end container -->
	</section>	<!-- end feature-area -->   

	<section class="pricing-area">
		<div class="wrapper">
        <section class="pricing">
            <div class="container">
                <div class="section-intro">
                    <h1>PRICING option</h1>
                    <div class="divider"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div><!-- #End Section Intro -->
                
                <div class="pricing-plan">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="single-pricing-plan">
                                <div class="title">
                                    <h4>Basic</h4>
                                </div>
                                <div class="price">
                                    <h1><span>$</span>0</h1>
                                    <p>Free for Life</p>
                                </div>
                                <div class="features">
                                    <p>1 gb of space</p>
                                    <p>10 gb of bandwidth</p>
                                    <p>3 websites</p>
                                    <p>Basic Customization</p>
                                    <p>wordpress integration</p>
                                    <p>email support</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-pricing-plan special-plan">
                                <div class="title">
                                    <h4>Professional</h4>
                                </div>
                                <div class="price">
                                    <h1><span>$</span>19</h1>
                                    <p>Free for Life</p>
                                    <h3>OUR most POPULAR</h3>
                                </div>
                                <div class="features">
                                    <p>1 gb of space</p>
                                    <p>10 gb of bandwidth</p>
                                    <p>3 websites</p>
                                    <p>Basic Customization</p>
                                    <p>wordpress integration</p>
                                    <p>email support</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="single-pricing-plan">
                                <div class="title">
                                    <h4>Enterprise</h4>
                                </div>
                                <div class="price">
                                    <h1><span>$</span>70</h1>
                                    <p>Free for Life</p>
                                </div>
                                <div class="features">
                                    <p>1 gb of space</p>
                                    <p>10 gb of bandwidth</p>
                                    <p>3 websites</p>
                                    <p>Basic Customization</p>
                                    <p>wordpress integration</p>
                                    <p>email support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div><!-- #End Container -->
        </section>
    </div><!-- #End Wrapper -->
	</section>	<!-- end pricing area -->

    <!-- customer-review section -->
	<!-- <section class="customer-review">
		<div class="container">
			<div class="section-intro">
				<h1>WHAT OUR CUSTOMERS ARE SAYING</h1>
				<div class="divider"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div> #End Section Intro -->
			<div class="row c_review">
				<div class="col-12 col-md-4">
					<div class="single-review">
						<p class="review-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus accusamus expedita repellat similique odio aspernatur ex, architecto eaque quo suscipit.</p>
						<img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/avatar.png" alt="avatar">
						<div class="name-position">
							<h1>Jeremy H.</h1>
							<p class="position">Manager</p>
						</div>
					</div>
					</div>
				<div class="col-12 col-md-4">
					<div class="single-review">
						<p class="review-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus accusamus expedita repellat similique odio aspernatur ex, architecto eaque quo suscipit.</p>
						<img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/avatar.png" alt="avatar">
						<div class="name-position">
							<h1>John S.</h1>
							<p class="position">Freelancer</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="single-review">
						<p class="review-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus accusamus expedita repellat similique odio aspernatur ex, architecto eaque quo suscipit.</p>
						<img src="https://raw.githubusercontent.com/Coder-Mehedi/itsors/master/Axit/images/avatar.png" alt="avatar">
						<div class="name-position">
							<h1>Susan W.</h1>
							<p class="position">Photographer</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- end customer-review section -->
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;700&display=swap");


.testimonials {
  background: #fff;
  text-align: center;
  width: 95%;
  max-width: 600px;
  padding: 2rem;
  margin: 1.5rem auto;
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.15);
}
.title {
  font-size: 1.5rem;
}
.description {
  font-size: 0.95rem;
  color: #333;
}

.slider-container {
  margin-top: 2rem;
  margin: 2rem auto 0 auto;
  position: relative;
  overflow: hidden;
}
.slider {
  display: flex;
  flex: 0 0 1;
  width: 300%; /* Depends On slide-box Length * 100 */
  transition: all 0.5s linear;
}
.slide-box {
  padding: 0 80px;
}
.slide-box .comment {
  background-color: #000;
  color: #fff;
  font-size: 0.86rem;
  padding: 1rem 1.5rem;
  margin-bottom: 2rem;
  letter-spacing: 0.4px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
  position: relative;
  font-weight: 400;
}
.slide-box .comment::before {
  content: "";
  position: absolute;
  left: 50%;
  bottom: -10px;
  height: 20px;
  width: 20px;
  background-color: #000;
  transform: translateX(-50%) rotate(45deg);
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.15);
}
.slide-box img {
  max-width: 60px;
  border-radius: 50%;
}
.slide-box .name {
  font-size: 1rem;
}
.slide-box .job {
  font-size: 0.7rem;
  color: #8d8e97;
  font-weight: 400;
}

.control-slider {
  position: absolute;
  z-index: 5;
  top: 50%;
  transform: translateY(-50%);
  height: 40px;
  width: 40px;
  background-color: #fff;
  line-height: 40px;
  color: #333;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
}
.btn-left {
  left: 10px;
}
.btn-right {
  right: 10px;
}

@media screen and (max-width: 500px) {
  .slide-box {
    padding: 0 55px;
  }
}

	</style>
	<div class="testimonials">
		<h2 class="title">Some words from our costumers</h2>
		<p class="description">We've been helping businesses to do their best since 2003.</p>
	  
		<div class="slider-container">
		  <div class="slider">
			<div class="slide-box">
			  <!-- Testi One -->
			  <p class="comment">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
				aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			  </p>
			  <img src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" />
			  <h3 class="name">Albert Sinelly</h3>
			  <h4 class="job">Founder Of Devoker Company</h4>
			</div>
			<div class="slide-box">
			  <!-- Testi Two -->
			  <p class="comment">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna
				aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			  </p>
			  <img src="https://images.unsplash.com/photo-1627541718143-1adc1b582e62?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bXVzbGltfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
			  <h3 class="name">Hirok Meryam</h3>
			  <h4 class="job">Full stack Developer, Speaker</h4>
			</div>
			<div class="slide-box">
			  <!-- Testi Three -->
			  <p class="comment">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna
				aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			  </p>
			  <img src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzJ8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
			  <h3 class="name">Sebastian Sert</h3>
			  <h4 class="job">UX/UI Designer, Phtographer</h4>
			</div>
		  </div>
	  
		  <a href="#!" class="control-slider btn-left">
			<i class="fas fa-chevron-left"></i>
		  </a>
		  <a href="#!" class="control-slider btn-right">
			<i class="fas fa-chevron-right"></i>
		  </a>
		</div>
	  </div>
	  <script>
		//   the script for testimonial slider
		  const sliderElm = document.querySelector(".slider-container .slider");
			const btnLeft = document.querySelector(".slider-container .btn-left");
			const btnRight = document.querySelector(".slider-container .btn-right");

			const numberSliderBoxs = sliderElm.children.length;
			let idxCurrentSlide = 0;

			// Functions:
			function moveSlider() {
			let leftMargin = (sliderElm.clientWidth / numberSliderBoxs) * idxCurrentSlide;
			sliderElm.style.marginLeft = -leftMargin + "px";
			console.log(sliderElm.clientWidth, leftMargin);
			}
			function moveLeft() {
			if (idxCurrentSlide === 0) idxCurrentSlide = numberSliderBoxs - 1;
			else idxCurrentSlide--;

			moveSlider();
			}
			function moveRight() {
			if (idxCurrentSlide === numberSliderBoxs - 1) idxCurrentSlide = 0;
			else idxCurrentSlide++;

			moveSlider();
			}

			// Event Listeners:
			btnLeft.addEventListener("click", moveLeft);
			btnRight.addEventListener("click", moveRight);
			window.addEventListener("resize", moveSlider);

	  </script>
    
 
    

<a id="js-scroll-trigger" class="btn btn info uk-align-right" href="#target" uk-scroll><i class="fas fa-user"></i></a>
@endsection