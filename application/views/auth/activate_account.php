
<?php  $this->load->view('_resources/_header')?>

 
    <div class="flex-fill d-flex flex-column justify-content-center py-4  border-top-wide border-primary ">
      <div class="container-tight py-6">
        <div class="text-center mb-4">
          <a href="."><img src="../assets/dashboard/brand/UPAOlogin.png" class="h-9" alt=""></a>
        </div>
          
          
          
       <form class="card" action="<?php echo base_url('/auth/activate_account');?>"  method="post">
          <div class="card-body text-center">
            <div class="mb-4">
              <h2 class="card-title"><?php echo $identity_label;?></h2>
                    <div id="infoMessage"><?php echo $message;?></div>
                
                
              <p class="text-muted">Please enter your email UPAO to unlock your account</p>
            </div>
            
            <div class="mb-4">
               <input type="email" class="form-control" id="identity" aria-describedby="emailHelp" placeholder="Enter email" name="identity" >
            </div>
            <div>
             
                
                <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="5" y="11" width="14" height="10" rx="2"></rect><circle cx="12" cy="16" r="1"></circle><path d="M8 11v-5a4 4 0 0 1 8 0"></path></svg> Enviar link</button>
                
                
                
            </div>
          </div>
        </form>
          
          
          <div class="text-center text-muted">
                Forget it, <a href="<?php echo base_url();?>">send me back</a> to the sign in screen.
              </div>
          
          
      </div>
    </div>








