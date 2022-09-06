<form action="assets/php/changeEmail-action.php" method="post" class="mx-1 mx-md-4">
    <div class="flex-row d-flex align-items-center mb-4">

        <div class="form-floating mb-3 flex-fill" >
            <input type="email" id="email-change" class="form-control" name="email" placeholder="Email" required/>
            <label class="form-label" for="email-change">Email</label>
        </div>
    </div>

    <div class="justify-content-center d-flex mx-4 mb-3 mb-lg-4 text-center">
        <button type="submit" class="justify-content-center btn btn-primary btn-lg bg-danger border-danger" value="submitted" name="submitted">Confirm Email Address Change</button>
    </div>

    <div class="justify-content-center d-flex mx-4 mb-3 mb-lg-4">
        <a class="back-link" href="account.php">Back</a>
    </div>

</form>
