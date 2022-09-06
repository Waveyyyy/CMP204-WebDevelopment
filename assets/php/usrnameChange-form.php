<form action="assets/php/changeUsrname-action.php" method="post" class="mx-1 mx-md-4">
    <div class="flex-row d-flex align-items-center mb-4">

        <div class="form-floating mb-3 flex-fill" >
            <input type="text" id="usrname-change" class="form-control" name="username" placeholder="Username" required/>
            <label class="form-label" for="usrname-change">Username</label>
            <small aria-describedby="usrnameChangeReqs" class="form-text">Username must be between 3 and 20 characters long and contain only letters or numbers</small>
        </div>
    </div>

    <div class="justify-content-center d-flex mx-4 mb-3 mb-lg-4">
        <button type="submit" class="justify-content-center btn btn-primary btn-lg bg-danger border-danger" value="submitted" name="submitted">Confirm Username Change</button>
    </div>

    <div class="justify-content-center d-flex mx-4 mb-3 mb-lg-4">
        <a class="back-link" href="account.php">Back</a>
    </div>

</form>
