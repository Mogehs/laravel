<section class="news-one">
		<div class="auto-container">
			<div class="row clearfix">

			@foreach($blogs as $blog)
				<!-- News Block One -->
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="news-block_one-image">
							<a href="{{ route('my.BlogDetails',['id' => $blog['id']]) }}"><img src="{{$blog['link']}}" alt="" /></a>
						</div>
						<div class="news-block_one-content">
							<div class="news-block_one-date">{{$blog['id']}}<span>Jan</span></div>
							<div class="news-block_one-title">Innovation</div>
							<h5 class="news-block_one-heading"><a href="{{ route('my.BlogDetails',['id' => $blog['id']]) }}">{{ $blog['subject'] }}</a></h5>
							<a href="{{ route('my.BlogDetails', ['id' => $blog['id']]) }}" class="news-block_one-more">Read More</a>
						</div>
					</div>
				</div>
				@endforeach

			

			</div>

			<!-- Pagination Outer -->
			<div class="pagination-outer text-center">
				<ul class="pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#"><span class="fa-solid fa-arrow-right fa-fw"></span></a></li>
				</ul>
			</div>

		</div>
	</section>