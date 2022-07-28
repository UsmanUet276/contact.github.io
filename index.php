<?php
    include("header.php");
?>  
<div class="inner-banner has-base-color-overlay text-center">
	<div class="container">
		<div class="box">
			<h3>Contact Us</h3>
		</div><!-- /.box -->
	</div><!-- /.container -->
</div><!-- /.inner-banner -->


<div class="breadcumb-wrapper">
	<div class="container">
		<div class="pull-left">
			<ul class="list-inline link-list">
				<li>
					<a href="#">Home</a>
				</li><!-- comment for inline hack
				 --><li>
					<span>Contact</span>
				</li>
			</ul><!-- /.list-line -->
		</div><!-- /.pull-left -->
		<div class="pull-right">
			<a href="appointment.html" class="get-qoute"><i class="fa fa-arrow-circle-right"></i> Make an appointment</a>
		</div><!-- /.pull-right -->
	</div><!-- /.container -->
</div><!-- /.breadcumb-wrapper -->



<section class="contact-section sec-pad contact-page">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-widget contact-widget ">
					<div class="sec-title semi medium">        
			            <h2><span class="black-color-text">Contact </span> <span class="base-color-text">Details</span></h2>
			        </div><!-- /.sec-title-->
			        <ul class="contact-infos">
						<li>
							<div class="icon-box">
								<i class="lsp-icon-signs"></i>
							</div><!-- /.icon-box -->
							<div class="text-box">
								<p>008 City of Work ,<br />New York, NY 641109 US.</p>
							</div><!-- /.text-box -->
						</li>
						<li>
							<div class="icon-box">
								<i class="lsp-icon-technology"></i>
							</div><!-- /.icon-box -->
							<div class="text-box">
								<p>Call us: +3257 700 1430</p>
							</div><!-- /.text-box -->
						</li>
						<li>
							<div class="icon-box">
								<i class="lsp-icon-note"></i>
							</div><!-- /.icon-box -->
							<div class="text-box">
								<p>Mail us : USA@Statistic.com </p>
							</div><!-- /.text-box -->
						</li>						
					</ul><!-- /.contact-infos -->						
		        </div><!-- /.footer-widget -->
		        <div class="footer-widget working-hrs-widget ">
					<div class="sec-title semi medium">        
			            <h2><span class="black-color-text">Working</span> <span class="base-color-text">Hours</span></h2>
			        </div><!-- /.sec-title-->
			        <ul class="working-hrs">
			        	<li>
			        		Monday <span>09:00am - 08:00pm</span>
			        	</li>
			        	<li>
			        		Tuesday <span>09:00am - 08:00pm</span>
			        	</li>
			        	<li>
			        		Wednesday <span>09:00am - 08:00pm</span>
			        	</li>
			        	<li>
			        		Thursday <span>10:00am - 07:00pm</span>
			        	</li>
			        	<li>
			        		Friday <span>09:00am - 08:00pm</span>
			        	</li>
			        	<li>
			        		Saturday <span>10:00am - 05:00pm</span>
			        	</li>
			        	<li>
			        		Sunday <span class="labed">Closed</span>
			        	</li>
			        </ul><!-- /.owrking-hrs -->
		        </div><!-- /.footer-widget -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-8">
				<div class="sec-title">
					<div class="inner">
						<span class="tag-line">Need Our Service Or Have Queries</span>
						<h2>Send Us Message.</h2>
						<span class="decor-line"></span>
					</div><!-- /.inner-->
				</div><!-- /.sec-title-->
                <div class="default-form-area">
                    <form class="contact-form" action="index.php" method="POST">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" value="" placeholder="Your Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" value="" placeholder="Phone Number*">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                </div>
                            </div>   
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck"  class="form-control" type="hidden" value="">
                                    <button class="thm-btn" name="submit" type="submit">send message</button>
                                </div>
                            </div>   

                        </div>
                    </form>
                </div>

			</div><!-- /.col-md-8 -->
		</div><!-- /.row -->
	</div><!-- /.containerq -->
</section><!-- /.contact-section sec-pad -->
<?php
    include("footer.php");
?>