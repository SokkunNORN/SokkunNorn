
<?php include_once 'getValue.php'; ?>

    <div class="container m-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="#!" method="post">
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" required name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Province:</label>
                                <input type="text" required name="province" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="email" required name="email" class="form-control">
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-primary" name="btn-send">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <p>Name: <?php echo $info->getName(); ?></p>
                        <p>Gender: <?php echo $info->getGender(); ?></p>
                        <p>Province: <?php echo $info->getProvince(); ?></p>
                        <p>Email: <?php echo $info->getEmail(); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
