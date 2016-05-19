 <!--left panel for notices -->
      <aside class="col-md-4">
     	<div class=" box_style_1">                
				<div class="widget">
					<h4>NOTICES</h4>
                    
					<ul class="recent_post">
						@foreach($notices as $notice)
						<li>
							<i class="icon-calendar-empty"></i>{{ date('F d, Y', strtotime($notice->created_at)) }}
							<div>
								<a href="{{$notice->url}}"> {{$notice->title}}</a>
							</div>
						</li>
						@endforeach						
					</ul>
				</div><!-- End widget -->
				
			</div><!-- End box-sidebar -->
     </aside><!-- End aside for notices