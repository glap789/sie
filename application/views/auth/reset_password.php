<!-- <h1><?php echo lang('reset_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

	<p>
		<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password);?>
	</p>

	<p>
		<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		<?php echo form_input($new_password_confirm);?>
	</p>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'));?></p>

<?php echo form_close();?>

-->

<?php  $this->load->view('_resources/_header')?>

<div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="<?php echo base_url(); ?>assets/dashboard/brand/UPAOlogin.png" class="h-9" alt="">
                  
                  
              </div>
           
                
              <form class="card" action="<?php echo base_url('auth/reset_password/' . $code);?>"  method="post">
                <div class="card-body p-6"> <?php echo lang('reset_password_heading');?>
                  <div class="card-title"></div>
                 
                    <div id="infoMessage"><?php echo $message;?></div>
                  <div class="form-group">
                      
                      
                 
                      
                      
                        <p>
                            
                            <label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password);?>
                            
                            
                        </p>

                      
                        <p>
                           <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		<?php echo form_input($new_password_confirm);?>
                        </p>      
                      
                      
                        
                      
                      
                      
                      
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Cambiar</button>
                  </div>
                </div>
                  
                   <?php echo form_input($user_id);?>
	               <?php echo form_hidden($csrf); ?>
                  
                  
              </form>
              <div class="text-center text-muted">
                Forget it, <a href="<?php echo base_url();?>">send me back</a> to the sign in screen.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






<?php  $this->load->view('_resources/_footer')?>
