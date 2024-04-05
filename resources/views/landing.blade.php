<x-front-layout>
     <x-slot name="title">
         الکترونیک oc
    </x-slot>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background-color:black">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-right">
					<div class="display-t">
						<div class="display-tc animate-box font-italic" data-animate-effect="fadeInUp">
                                                        <h1 style=" padding-right: 7px; border-right: 3px solid green;" class="mb30"><a href="#">سلام  ! به کمپ آموزش رایگان الکترونیک که بر پایه ی کتاب هنر الکترونیک بنا شده  خوش آمدید. </a></h1>
                      

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="gtco-main">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-post-list">
						

						@forelse($posts as $post)
						<li class="one-third entry animate-box img-rounded" data-animate-effect="fadeIn">
							<a href="{{route('post.show',$post->slug)}}" target="_blank">
                                                            <div class="entry-img"><img style="height:350px; width:100%" src="{{ $post->getBannerUrl() }}"/></div>
								<div class="entry-desc">
									<h3>{{$post->title}}</h3>
									<p>{!! substr($post->content,0,30) !!}</p>
								</div>
							</a>
							<a href="single.html" class="post-meta"> <span class="date-posted">{{ $post->getCreatedAtInJalali() }}</span></a>
                                                @empty
                                                  <p>پستی جهت نمایش وجود ندارد !</p>
                                                @endforelse
                                                </li>											
					</ul>	                                      
				</div>
			</div>
			<div class="row">
                            
				<div class="col-md-12 text-center">
				
                                         {{$posts->links()}}
				</div>
			</div>
		</div>
	</div>

</x-front-layout>


	

