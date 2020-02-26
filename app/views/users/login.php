<?php require_once APPROOT.'/views/inc/header.php';?>
<!--login vorm -->
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Log in</h2>
            <form action="<?php echo URLROOT;?>/users/login" method="post">
                <div class="form-group">
                    <label for="meil">Email: <sup>*</sup></label>
                    <input type="email" id="meil" class="form-control">
                </div>

                <div class="form-group">
                    <label for="pass">Password: <sup>*</sup></label>
                    <input type="password" id="pass" class="form-control">
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Login" class="btn btn-block bg-info">
                    </div>
                </div>
        </div>
    </div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php';?>
