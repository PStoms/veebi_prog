<?php require_once APPROOT.'/views/inc/header.php';?>
<!--register vorm -->
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
        <h2>Create an Account</h2>
            <form action="<?php echo URLROOT;?>/users/register" method="post">
                <div class="form-group">
                    <label for="name">Name: <sup>*</sup></label>
                    <input type="text" id="name" class="form-control <?php echo (!empty($data['name_err'])) ?  'is-invalid' : '';?>" name="name">
                    <span class="invalid-feedback"><?php echo $data['name_err'];?></span>
                </div>


                <div class="form-group">
                    <label for="pass">Password: <sup>*</sup></label>
                    <input type="password" id="pass" class="form-control <?php echo (!empty($data['pass_err'])) ?  'is-invalid' : '';?>" name="pass">
                    <span class="invalid-feedback"><?php echo $data['pass_err'];?></span>
                </div>


                <div class="form-group">
                    <label for="meil">Email: <sup>*</sup></label>
                    <input type="email" id="meil" class="form-control <?php echo (!empty($data['meil_err'])) ?  'is-invalid' : '';?>" name="meil">
                    <span class="invalid-feedback"><?php echo $data['meil_err'];?></span>
                </div>
            <div class="row">
                <div class="col">
                    <input type="submit" value="Register" class="btn btn-block bg-info">
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php';?>

