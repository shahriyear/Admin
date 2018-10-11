<div class="card">
  <div class="card-header header-elements-inline">
    <h6 class="card-title"><?php if(isset($miniTitle)) echo $miniTitle; ?></h6>
    <div class="header-elements">
      <div class="list-icons">
        <a class="list-icons-item" data-action="collapse"></a>
        <a class="list-icons-item" data-action="reload"></a>
        <a class="list-icons-item" data-action="remove"></a>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-success" id="pnotify-solid-success">Launch <i class="icon-play3 ml-2"></i></button>
<div id="infoMessage" class="text-success"><?php if(isset($message)) echo $message;?></div>

  <div class="card-body">
    <?php echo form_open('auth/create_user'); ?>
      
      <div class="form-group row">
        <label class="col-lg-2 col-form-label">Name</label>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-md-6">
              <?php echo form_input($first_name)?>
              <span class="form-text text-danger"><?php echo form_error('first_name')?></span>
            </div>
            <div class="col-md-6">
              <?php echo form_input($last_name);?>
              <span class="form-text text-danger"><?php echo form_error('last_name')?></span>
            </div>
          </div>
        </div>
      </div>

    <?php if($identity_column!=='email'): ?>
      <div class="form-group row">
        <label class="col-lg-2 col-form-label">
          <?php echo lang('create_user_identity_label', 'identity'); ?>
        </label>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-md-12">
              <?php  echo form_input($identity); ?>
                <span class="form-text text-danger"><?php  echo form_error('identity');?></span>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label">Email</label>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-md-12">
               <?php echo form_input($email);?>
               <span class="form-text text-danger"><?php echo form_error('email')?></span>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-lg-2 col-form-label">Company Name</label>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-md-12">
              <?php echo form_input($company);?>
              <span class="form-text text-danger"><?php echo form_error('company')?></span>
            </div>
          </div>
        </div>
      </div>
       

      <div class="form-group row">
        <label class="col-lg-2 col-form-label">Phone</label>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-md-12">
               <?php echo form_input($phone);?>
               <span class="form-text text-danger"><?php echo form_error('phone')?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-2 col-form-label">Password</label>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-md-12">
               <?php echo form_input($password);?>
               <span class="form-text text-danger"><?php echo form_error('password')?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-2 col-form-label">Confirm Password</label>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-md-12">
               <?php echo form_input($password_confirm);?>
               <span class="form-text text-danger"><?php echo form_error('password_confirm')?></span>
            </div>
          </div>
        </div>
      </div>

      

      <div class="text-right">
        <input type="submit" name="submit" value="Create User" class="btn btn-primary" >
      </div>
    <?php echo form_close();?>
  </div>
</div>