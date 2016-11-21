
			
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
									<label>ID:<?php echo $result['id'];?></label>
										<input class="text-input small-input" type="hidden" id="small-input" name="id" value="<?php echo $result['id'];?>" /> 
										<br />
								</p>
								<p>
									<label>标题</label>
										<input class="text-input small-input" type="text" id="small-input" name="title" value="<?php echo $result['title'];?>" /> 
										<br />
								</p>
								<!--
								<p>
									<label>Medium form input</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
								</p>
								
								<p>
									<label>Large form input</label>
									<input class="text-input large-input" type="text" id="large-input" name="large-input" />
								</p>
								
								<p>
									<label>Checkboxes</label>
									<input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
								</p>
								
								<p>
									<label>Radio buttons</label>
									<input type="radio" name="radio1" /> This is a radio button<br />
									<input type="radio" name="radio2" /> This is another radio button
								</p>
								
								<p>
									<label>This is a drop down list</label>              
									<select name="dropdown" class="small-input">
										<option value="option1">Option 1</option>
										<option value="option2">Option 2</option>
										<option value="option3">Option 3</option>
										<option value="option4">Option 4</option>
									</select> 
								</p>
								
								-->
								<p>
									<label>内容</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="content" cols="79" rows="15"><?php echo $result['content'];?></textarea>
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
			
	