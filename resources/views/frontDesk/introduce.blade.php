@extends('frontDesk.public')
@section('title','Introduce')
@section('style','css/addStyle.css')
   


@section('index')

			<!--//side-bar-->
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				
				<!--main-text-->
				<div class="main-text">
									
					<div class="offer-grids">
						<h3>简介</h3>
						
						<div class="testi-info">
                            
                            <div class="testi-middle">
                                <p class="c_size">
                                    <?php print_r($intro->content);?>
                                </p>
                                
                            </div>
                            <div class="clearfix"> </div>
                        </div>
						
						<div class="clearfix"> </div>
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
