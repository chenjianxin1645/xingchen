@extends('frontDesk.public')

@section('title','Contact')
@section('contactActive')
    <li class="active"><a href="contact">Contact</a></li>
@endsection

@section('contact')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main about-main">
				<div class="contact">
					<h3>如何找到我们</h3>
					<div class="map">
						<iframe src="" frameborder="0" style="border:0"></iframe>
					</div>					
					<div class="contact-grids">
						<div class="col-md-4 address">
							<h3>联系方式</h3>
							<p class="cnt-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages sed do </p>
							<p>Eiusmod Tempor inc</p>
							<p>9560 St Dolor,London</p>
							<p>Telephone : +2 800 544 6035</p>
							<p>FAX : +1 800 889 4444</p>
							<p>Email : <a href="mailto:example@mail.com">mail@example.com</a></p>
						</div>
						<div class="col-md-8 contact-form">
							<h3>联系地址</h3>
							<form>
								<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
								<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
								<input type="submit" value="Submit" >
							</form>
						</div>
						<div class="clearfix"> </div>	
					</div>				
				</div>
				<div class="footer">
					<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
				</div>
			</div>
			<div class="clearfix"> </div>	
@endsection