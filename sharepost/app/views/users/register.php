<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
<div class="col-md-6 mx-auto">
<div class="card card-body bg-light mt-5">
<h2>Create Account</h2>
<p>Pleas fill out this form to register with us</p>
<form action="<?=URLROOT?>/users/register" method="post">
<div class="form-group">
    <label for="name">Name: <sup>*</sup></label>
    <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_error'])) ? 'is-invalid':'' ;?>" value="<?=$data['name']?>" id="" placeholder="please enter your Name..">
    <span class="invalid-feedback"><?=$data['name_error']; ?></span>
</div>
<div class="form-group">
    <label for="email">Email: <sup>*</sup></label>
    <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_error'])) ? 'is-invalid':'' ;?>" value="<?=$data['email']?>" id="" placeholder="please enter your email..">
    <span class="invalid-feedback"><?=$data['email_error']; ?></span>
</div>

<div class="form-group">
    <label for="pwd">Password: <sup>*</sup></label>
    <input type="password" name="pwd" class="form-control form-control-lg <?php echo (!empty($data['pwd_error'])) ? 'is-invalid':'' ;?>" id="" placeholder="Create password..">
    <span class="invalid-feedback"><?=$data['pwd_error']; ?></span>
</div>
<div class="form-group">
    <label for="pwd_conf">Confirme Password: <sup>*</sup></label>
    <input type="password" name="pwd_conf" class="form-control form-control-lg <?php echo (!empty($data['pwd_conf_error'])) ? 'is-invalid':'' ;?>" id="" placeholder="confirme password..">
    <span class="invalid-feedback"><?=$data['pwd_conf_error']; ?></span>
</div>

<div class="row"></div>
</form>
</div>

</div>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
