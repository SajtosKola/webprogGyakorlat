<form method="POST">
    <div class="col-md-6 mt-3">
        <input type="text" value="<?php echo $userData['nev']; ?>" name="nev" class="form-control" placeholder="Megnevezés"><br />
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="crud_main" class="btn btn-danger">Main page</a>
    </div>
</form>