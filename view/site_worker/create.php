<?php include ROOT . '/view/pattern/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/site/worker/index">List of employees</a></li>
                    <li class="active">Add employee</li>
                </ol>
            </div>

            <h2 class="title text-center">Add new employee</h2>
            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-sm-1 col-sm-offset-3 padding-center">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <table>

                            <tr>
                                <td> <p>Name</p></td>
                                <td><p>Age</p></td>
                                <td><p>Salary</p></td>
                            </tr>

                            <tr>
                                <td><input type="text" name="name" placeholder="" value=""></td>
                                <td><input type="text" name="age" placeholder="" value=""></td>
                                <td><input type="text" name="salary" placeholder="" value=""></td>
                            </tr>

                        </table>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Save">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/view/pattern/footer.php'; ?>

