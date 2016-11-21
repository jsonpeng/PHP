
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1">Table</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2" class="default-tab">Forms</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content default-tab" id="tab2">
					
						<form action="" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>用户名</label>
										<input class="text-input small-input" type="text" id="small-input" name="username" /> <span class="input-notification success png_bg">Successful message</span>
										
								</p>
								<p>
									<label>密码</label>
										<input class="text-input small-input" type="password" id="small-input" name="password" /> <span class="input-notification success png_bg">Successful message</span>
										
								</p>
								<p>
									<label>邮箱</label>
										<input class="text-input small-input" type="text" id="small-input" name="email" /> <span class="input-notification success png_bg">Successful message</span>
										
								</p>
								<p>
									<input class="button" type="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
	