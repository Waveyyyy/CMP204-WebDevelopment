<form action="assets/php/changePass-action.php" method="post" class="mx-1 mx-md-4">
    <div class="flex-row d-flex align-items-center mb-4">

        <div class="form-floating mb-3 flex-fill" >
            <input type="password" id="passwd-change" class="form-control" name="passwd" placeholder="Password" required/>
            <label class="form-label" for="passwd-change">Password</label>
            <small aria-describedby="passwdChangeReqs" class="form-text">Password should be longer than 10 characters and contain at least 1 capital letter, 1 number and one of the following @$!%*?</small>
        </div>
    </div>
    <div class="flex-row d-flex align-items-center mb-4">

        <div class="form-floating mb-3 flex-fill" >
            <input type="password" id="passwd-confirmChange" class="form-control" name="passwdConfirm" placeholder="PasswordConfirm" required>
            <label class="form-label" for="passwd-confirmChange">Password</label>
        </div>

    </div>

    <div class="justify-content-center d-flex mx-4 mb-3 mb-lg-4 text-center">
        <button type="submit" class="justify-content-center btn btn-primary btn-lg bg-danger border-danger" value="submitted" name="submitted">Confirm Password Change</button>
    </div>

    <div class="justify-content-center d-flex mx-4 mb-3 mb-lg-4">
        <a class="back-link" href="account.php">Back</a>
    </div>

</form>