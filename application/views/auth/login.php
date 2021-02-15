<!--

<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>




-->








<?php  $this->load->view('_resources/_header')?>




<body class="antialiased border-top-wide border-primary d-flex flex-column">
  <div class="flex-fill d-flex flex-column justify-content-center py-4">
    <div class="container-tight py-6">
      <div class="text-center mb-4">
        <img src="<?php echo base_url(); ?>assets/dashboard/brand/UPAOlogin.png" class="h-6" alt="">
      </div>
      <form class="card card-md" action="<?php echo base_url('/auth/login');?>" method="post">
        <div class="card-body">
          <h2 class="card-title text-center mb-4">Ingrese sus credenciales</h2>
          <div class="mb-3">
            <div id="infoMessage"><?php echo $message;?></div>

            <label class="form-label">Email o código de Alumno</label>
            <input type="email" class="form-control" id="identity" value="admin@admin.com" name="identity"
              aria-describedby="emailHelp" placeholder="Email">

          </div>

          <div class="mb-2">
            <label class="form-label">
              Password
              <span class="form-label-description">
                <a href="<?php echo base_url('auth/forgot_password');?>" class="float-right small">Olvidé mi
                  password</a>
              </span>
            </label>
            <input type="password" class="form-control" id="password" value="password" name="password"
              placeholder="Password">
          </div>
          <div class="form-group">
            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="remember" name="remember" />
              <span class="custom-control-label">Recordarme</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
        </div>
      </form>
      <div class="text-center text-muted mt-3">
        No tienes cuenta? <a href="<?php echo base_url('/auth/activate_account');?>">Activar mi cuenta</a>
      </div>
    </div>
  </div>




  <?php  $this->load->view('_resources/_footer')?>