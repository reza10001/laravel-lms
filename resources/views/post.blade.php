<x-front-layout>
    <x-slot name="title">
         {{$post->title}}
    </x-slot>
<header id="gtco-header" class="gtco-cover" role="banner" style="background-color:black" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-right">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<span class="date-post">تاریخ:{{$post->getCreatedAtInJalali()}} </span>
							<h1 class="mb30"><a href="#">{{$post->title}}</a></h1>
							<!--<p>by <a href="#" class="text-link"></a></p>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="gtco-maine">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12">
					<article class="mt-negative">
						<div class="text-right content-article">																												
							<div class="row">
								<div class="col-md-12 animate-box">
                                                                    {!!$post->content!!}
                                                                </div>
								
								
								
								
							</div>
							
							
						</div>
					</article>
				</div>
			</div>
		<!--	<div class="row">
				<div class="col-md-12">
					<h2 class="related-title animate-box">Related Posts</h2>
				</div>
			</div>
			<div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-post-list">
						<li class="one-third animate-box entry" data-animate-effect="fadeIn">
							<a href="#">
								<div class="entry-img"></div>
								<div class="entry-desc">
									<h3>How Web Hosting Can Impact Page Load Speed</h3>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
							</a>
							<a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
						</li>
						<li class="one-third animate-box entry" data-animate-effect="fadeIn">
							<a href="#">
								<div class="entry-img"></div>
								<div class="entry-desc">
									<h3>How Web Hosting Can Impact Page Load Speed</h3>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
							</a>
							<a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
						</li>
						<li class="one-third animate-box entry" data-animate-effect="fadeIn">
							<a href="#">
								<div class="entry-img"></div>
								<div class="entry-desc">
									<h3>How Web Hosting Can Impact Page Load Speed</h3>
									<p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								</div>
							</a>
							<a href="#" class="post-meta">Business  <span class="date-posted">4 days ago</span></a>
						</li>
					</ul>	
				</div>
			</div>   -->
		</div>
	</div>



</x-front-layout>

