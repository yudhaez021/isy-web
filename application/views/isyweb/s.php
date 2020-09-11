<section id="global-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <div class="block">
                  	<h1>Hubungi Kami</h1>
                  	<p>Jika ada yang ingin anda sampaikan atau anda tanyakan, silahkan hubungi kami.</p>
                </div>
			</div>
		</div>
	</div>
</section>

<br>
<h3 align="center">Thank you for contacting us, we will respond your message soon</h3>
	<section id="contact-form">
		<div class="container">
            <div class="row">
              	<div class="col-md-6 col-sm-12">
                	<div class="block">
                  		<?php echo form_open('contact');?>
                    	
						<div class="form-group">
                       		<input type="text" id="name" class="form-control" placeholder="Your Name" name="name" value="<?php echo set_value('name'); ?>" required autofocus/>
                    	</div>
                    	<div class="form-group">
                      		<input type="text" id="email" class="form-control" placeholder="Email Address" name="email" value="<?php echo set_value('email'); ?>" required autofocus/>
                    	</div>
                    	<div class="form-group">
                      		<input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" value="<?php echo set_value('subject'); ?>" required autofocus/>
                    	</div>
                	</div>
              	</div>
              	
				<div class="col-md-6 col-sm-12">
                	<div class="block">
                    	<div class="form-group-2">
                      		<textarea class="form-control" id="message" rows="3" placeholder="Your Message" name="message" value="<?php echo set_value('message'); ?>"></textarea>
                    	</div>
                    	<br>
                    	
						<button class="btn btn-default" type="submit">Send Message</button>
                  		<?php echo form_close();?>
                	</div>
              	</div>
            </div>
            
			<div id="contact-box" class="row">
              	<div class="col-md-6 col-sm-12">
                	<div class="block">
                  		<h2>Social Media</h2>
                  			<ul class="address-block">
                    			<li>
                      				<i class="fa fa-envelope-o"></i>Email: isyweb.904@gmail.com
                    			</li>
                    			<li>
                      				<i class="fa fa-facebook"></i>Facebook: Isy Web
                    			</li>
                    			<li>
                      				<i class="fa fa-wechat"></i>Whats App: 0822 9953 0486
                    			</li>
                  			</ul>
                		</div>
              		</div>
</section>