@extends('layouts.website')

@section('content')

<!-- Slider Start -->
	<div class="container-fluid pad-cont">
	  <div class="row">
		<div class="col-xl-9 col-lg-9 col-md-9 col-xs-12 mb-5">
		 
			<section class="banner">
		
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
					  <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
					  <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
					</ol>
					<div class="carousel-inner">
					  <div class="carousel-item">
						<img class="d-block w-100 " data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18713a6dcb6%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18713a6dcb6%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.9140625%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
						<div class="carousel-caption d-none d-md-block">
						  <h5>First slide label</h5>
						  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
						</div>
					  </div>
					  <div class="carousel-item active">
						<img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18713a6dcb8%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18713a6dcb8%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
						<div class="carousel-caption d-none d-md-block">
						  <h5>Second slide label</h5>
						  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18713a6dcba%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18713a6dcba%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22276.9921875%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
						<div class="carousel-caption d-none d-md-block">
						  <h5>Third slide label</h5>
						  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
						</div>
					  </div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
				
		
			</section>

			{{-- News  --}}
			<div class="row">
				{{-- @foreach ($cat as $cat_row) --}}
					{{-- <div class="col-lg-12 col-md-12 col-sm-12">
						<h3 class="mt-4 mb-1">{{ $cat_row->name }}</h3>
						<div class="divider my-2"></div>
					</div> --}}

					<div class="col-lg-12 col-md-12 col-sm-12">
						<h3 class="mt-4 mb-1">ประชุม/อบรม</h3>
						<div class="divider my-2"></div>
					</div>

					@foreach ($posts as $post)
					<div class="col-lg-4 col-md-6 col-sm-12 ">
						<a href="{{ route('website.posts.show', $post->id) }}">
							<div class="service-block mb-1 ">
								<img src="{{ asset('/images/posts').'/'. $post->gallery->image }}" alt="" class="mx-auto">						  
								<div class="content title-color">
									
									<p>{{ $post->title }}</p>
									<p><i class="icofont-calendar"></i> <span class="text-sm text-muted"> {{ date('d M Y'), strtotime($post->created_at)  }}</span></p>

									{{-- <a href="department-single.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a> --}}
								</div>
							</div>
						</a>
						
						
					</div>

					
					@endforeach
				{{-- @endforeach --}}
				
				
				
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3 class="mt-4 mb-1">ประชุม/อบรม</h3>
					<div class="divider my-2"></div>
				</div>

				@foreach ($posts as $row)
		
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="thumbnail">
						<a href="/w3images/lights.jpg">
						  <img src="{{ asset('/images/posts').'/'. $row->gallery->image }}" alt="Lights" style="width:100%">
						  <div class="caption">
							<p>{{ $row->title }}</p>
						  </div>
						</a>
					  </div>
				</div>
				@endforeach
			</div>
				
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3 class="mt-4 mb-1">กิจกรรมหน่วยงาน</h3>
					<div class="divider my-2"></div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-block mb-1">
						<img src="{{ asset( 'assets/website/images/service/service-3.jpg') }}" alt="" class="img-fluid">
						<div class="content title-color">
							
							<p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>

							<a href="department-single.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3 class="mt-4 mb-1">ข่าวประชาสัมพันธ์</h3>
					<div class="divider my-2"></div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="service-block mb-1">
						<img src="{{ asset( 'assets/website/images/service/service-3.jpg') }}" alt="" class="img-fluid">
						<div class="content">
							
							<p class="mb-4 title-color">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>

							<a href="department-single.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
			
			<div class="text-center">
					<h2 class="mb-1">บริการของเรา</h2>
					<div class="divider mx-auto mb-4"></div>
			</div>


			<div class="row">
				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block2 mb-lg-0" >
						<i class="icofont-contact-add icofont-5x"></i>
						<div>
							<span class="text-sm text-light">สายตรงผอ.</span>
						</div>
						
					</div>
				</div>
				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block1 mb-lg-0" >
						<i class="icofont-contrast icofont-5x"></i>
						<div>
							<span class="text-sm text-light">ระบบ DRMS</span>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block3  mb-lg-0">
						<i class="icofont-document-folder icofont-5x"></i>
						<div>
							<span class="text-sm text-light">ฐานข้อมูลวิจัย</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block1  mb-lg-0">
						<i class="icofont-learn icofont-5x"></i>
						<div>
							<span class="text-sm text-light">วารสารชุมมชน</span>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block2  mb-lg-0">
						<i class="icofont-address-book icofont-5x"></i>
						<div>
							<span class="text-sm text-light">วิจัยในมนุษย์</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block3  mb-lg-0">
						<i class="icofont-eaten-fish icofont-5x"></i>
						<div>
							<span class="text-sm text-light">วิจัยในสัตว์</span>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block2  mb-lg-0 ">
						<i class="icofont-card icofont-5x "></i>
						<div>
							<span class="text-sm text-light">ค่าตอบแทนตีพิมพ์</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block1  mb-lg-0">
						<i class="icofont-data icofont-5x"></i>
						<div>
							<span class="text-sm text-light">ผลงานวิจัย</span>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block1  mb-lg-0">
						<i class="icofont-exclamation-tringle icofont-5x"></i>
						<div>
							<span class="text-sm text-light">ผลกระทบวิจัย</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 mb-3">
					<div class="contact-block3  mb-lg-0">
						<i class="icofont-users-social icofont-5x "></i>
						<div>
							<span class="text-sm text-light">บริการท้องถิ่น</span>
						</div>
					</div>
				</div>
			
			</div>


			<div class="row">
				<div class="col-lg-12 col-md-12 mb-3">
					<div class="sidebar-widget  gray-bg p-4">
						<h5 class="mb-4">Community Research Journal</h5>
		
						<ul class="list-unstyled lh-35">
							<li class="d-flex justify-content-between align-items-center">
								<span>Monday - Friday</span>
								<span>9:00 - 17:00</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Saturday</span>
								<span>9:00 - 16:00</span>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Sunday</span>
								<span>Closed</span>
							</li>
						</ul>
		
						<div class="sidebar-contatct-info mt-4">
							<p class="mb-0">Need Urgent Help?</p>
							<h3 class="text-color-2">+23-4565-65768</h3>
						</div>
					</div>
				</div>
				

			</div>



			

			
		</div>
	  </div>
	</div>



@endsection