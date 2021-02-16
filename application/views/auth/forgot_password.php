



<?php  $this->load->view('_resources/_header')?>




<div class="flex-fill d-flex flex-column justify-content-center py-4  border-top-wide border-primary ">
      <div class="container-tight py-6">
        <div class="text-center mb-4">
          <a href="."><img src="../assets/dashboard/brand/UPAOlogin.png" class="h-9" alt=""></a>
        </div>
         <form class="card card-md" action="<?php echo base_url('/auth/forgot_password');?>"  method="post">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Forgot password</h2>
              <div id="infoMessage"><?php echo $message;?></div>
              
            <p class="text-muted mb-4">Enter your email address and your password will be reset and emailed to you.</p>
              
            <div class="mb-3">
               <label class="form-label" for="identity">Email address</label>
                    <input type="email" class="form-control" id="identity" aria-describedby="emailHelp" placeholder="Enter email" name="identity" >
            </div>
            <div class="form-footer">
             
                
                 <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="3" y="5" width="18" height="14" rx="2"></rect><polyline points="3 7 12 13 21 7"></polyline></svg>
                     Enviar link</button>
                
                
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          Forget it, <a href="<?php echo base_url();?>">send me back</a> to the sign in screen.
        </div>
      </div>
    </div>





</div>

































