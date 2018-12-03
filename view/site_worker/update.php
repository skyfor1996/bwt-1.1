<?php include ROOT . '/view/pattern/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/site/worker/index">List of employees</a></li>
                    <li>  <a href="/site/worker/create" > Add employee</a></li>
                    <li class="active">Edit information of employee</li>
                </ol>
            </div>

            <h4>Edit information of employee #<?php echo $id; ?></h4>

            <br/>
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <table>

                            <tr>
                                <td> <p>Name</p></td>
                                <td><p>Age</p></td>
                                <td><p>Salary</p></td>
                            </tr>

                            <tr>
                                <td><input type="text" name="name" placeholder="" value="<?php echo $worker['name']; ?>"></td>
                                <td> <input type="text" name="age" placeholder="" value="<?php echo $worker['age']; ?>"></td>
                                <td><input type="text" name="salary" placeholder="" value="<?php echo $worker['salary']; ?>"></td>
                            </tr>

                        </table>


                        <br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Save">
                        <br/><br/>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/view/pattern/footer.php'; ?>

