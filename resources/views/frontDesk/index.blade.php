@extends('frontDesk.public')
@section('title','Home')
@section('homeActive')
    <li class="active"><a href="./">Home</a></li>
@endsection

@section('index')

			<!--//side-bar-->
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<!--banner-->
				<div class="banner">
					<div class="jumbotron banner-text">
						<h2><?php// print_r($intro->title);?></h2>
						<p><?php// print_r($intro->sm_con);?></p>
						<a class="btn btn-primary" href="introduce" role="button">Read more</a>
					</div>
				</div>
				<!--//banner-->
				<!--main-text-->
				<div class="main-text">
					<div class="welcome">
						<h3>我们的历史展览</h3>
						<div class="col-md-4 welcome-left">
							<img src="images/img6.jpg" alt="">
						</div>
						<div class="col-md-8 welcome-right">
							<h4>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                            of classical Latin established fact that a reader will be distracted Lorem Ipsum when looking
                            at its layout.</h4>
							<p>Lorem Ipsum was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution is that it has a more of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
						</div>
						<div class="clearfix"> </div>
					</div>					
					<div class="offer-grids">
						<h3>最好的设计，最低的价格</h3>
						<div class="col-md-4 offer-grids-info">
							<img src="images/img2.jpg" alt=""/>	
							<div class="offer-text">
								<h5>$94.675</h5>
							</div>
						</div>
						<div class="col-md-4 offer-grids-info">
							<img src="images/img3.jpg" alt=""/>	
							<div class="offer-text">
								<h5>$94.675</h5>
							</div>
						</div>
						<div class="col-md-4 offer-grids-info">
							<img src="images/img13.jpg" alt=""/>	
							<div class="offer-text">
								<h5>$144.5</h5>
							</div>	
						</div>
						<div class="col-md-6 offer-grids-info off-grid2">
							<img src="images/img4.jpg" alt=""/>	
							<div class="offer-text">
								<h5>$366.5</h5>
							</div>
						</div>
						<div class="col-md-6 offer-grids-info off-grid2">
							<img src="images/img5.jpg" alt=""/>							
							<div class="offer-text">
								<h5>$194.75</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>					
					<!--features-->
					<div class="features">
						<div class="col-md-6 feature-left">
							<h3>我们的专业管理</h3>
							<div class="ftrs-left-text">
								<h4>The standard Lorem Ipsum passage, used sincepassage</h4>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident <p>
							</div>
							<div class="ftrs-left-text">
								<h4>The standard Lorem Ipsum passage, used sincepassage</h4>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident <p>
							</div>
							<div class="ftrs-left-text">
								<h4>The standard Lorem Ipsum passage, used sincepassage</h4>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident <p>
							</div>
						</div>
						<div class="col-md-6 feature-right">
							<h3>特色服务</h3>
							<ul class="menu">
								<li class="item1"><a href="#">Nemo enim ipsam <span class="icon"> </span></a>
									<ul>
										<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</a></li>										
									</ul>
								</li>
								<li class="item2"><a href="#">Voluptatemdolor <span class="icon"> </span></a>
									<ul>
										<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</a></li>
									</ul>
								</li>
								<li class="item3"><a href="#">Odit aut fugit <span class="icon"> </span></a>
									<ul>
										<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</a></li>
									</ul>
								</li>
								<li class="item4"><a href="#">Temdolorlupta <span class="icon"> </span></a>
									<ul>
										<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</a></li>
									</ul>
								</li> 
								<li class="item5"><a href="#">Ptatemdolor aut <span class="icon"> </span></a>
									<ul>
										<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</a></li>
									</ul>
								</li>
								<li class="item5"><a href="#">Dolor autptatem <span class="icon"> </span></a>
									<ul>
										<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</a></li>
									</ul>
								</li>
							</ul>
						</div>						
						<div class="clearfix"> </div>
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.menu > li > ul'),
									   menu_a  = $('.menu > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>
					<!--features-->
				</div>
				<div class="footer">
					<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
				</div>
			</div>
			<div class="clearfix"> </div>
@endsection
