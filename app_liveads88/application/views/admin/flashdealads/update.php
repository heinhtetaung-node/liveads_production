  
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Update Flash Deal Ads
                </h3>
            </div>
 
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
				 <?php echo $this->session->flashdata('msg'); ?>
                  <br>
                  <form name="data_form" method="POST" action="<?php echo base_url(); ?>flashdealads/update/<?php echo $this->uri->segment(3);?>" id="flashdealads_update_form"  class="form-horizontal form-label-left">
		
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Name <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" placeholder="Name" id="fdads_name" class="form-control " name="fdads_name" value="<?php echo ($flashdealads!== false ? $flashdealads->fdads_name : set_value('fdads_name')); ?>">
						
						<?php echo form_error('fdads_name');?> 
						</div>
                    </div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Duration <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<select id="fdads_duration" class="form-control" name="fdads_duration">
							<option value="">Choose</option>
							<option value="30 days" <?php echo  (($flashdealads!== false && $flashdealads->fdads_duration == '30 days') ? 'selected="selected"': ''); ?> >30 Days</option>
							<option value="60 days" <?php echo  (($flashdealads!== false && $flashdealads->fdads_duration == '60 days') ? 'selected="selected"': ''); ?> >60 Days</option>
							<option value="90 days" <?php echo  (($flashdealads!== false && $flashdealads->fdads_duration == '90 days') ? 'selected="selected"': ''); ?> >90 Days</option>
						</select>
						<?php echo form_error('fdads_duration');?> 
						</div>
                    </div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Price <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" placeholder="Price" id="fdads_price" class="form-control " name="fdads_price" value="<?php echo ($flashdealads!== false ? $flashdealads->fdads_price : set_value('fdads_price')); ?>">
						
						<?php echo form_error('fdads_price');?> 

						</div>
                    </div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Status <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							
									<?php if($flashdealads!== false && $flashdealads->fdads_status == 1){
										echo '<div class="radio">
												<label>';
										echo form_radio(array('name'=>'fdads_status', 'id'=>'radio-fdads_status-1', 'value'=>'1', 'checked'=>'checked'));
										echo 'Active';
										echo '</label>
											  </div>';
											  
										echo '<div class="radio">
												<label>';
										echo form_radio(array('name'=>'fdads_status', 'id'=>'radio-fdads_status-0', 'value'=>'0'));
										echo 'Inactive';
										echo '</label>
											  </div>';
									}else{
										echo '<div class="radio">
												<label>';
										echo form_radio(array('name'=>'fdads_status', 'id'=>'radio-fdads_status-1', 'value'=>'1'));
										echo 'Active';
										echo '</label>
											  </div>';
											  
										echo '<div class="radio">
												<label>';
										echo form_radio(array('name'=>'fdads_status', 'id'=>'radio-fdads_status-0', 'value'=>'0', 'checked'=>'checked'));
										echo 'Inactive';
										echo '</label>
											  </div>';
									} ?>
							
						</div>

                    </div>
					
					<div class="pull-right">
					<a href="<?php echo base_url(); ?>flashdealads" class="btn btn-primary">Back to List</a>
					<input type="submit" class="btn btn-success" id="" value="Submit" />
					</div>	
					
				</div>
              </div>
            </div>
          </div>
    </div>
</div>
 