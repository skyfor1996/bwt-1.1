<?php include ROOT . '/view/pattern/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/site/worker/index">List of employees</a></li>
                    <li>  <a href="/site/worker/create" > Add employee</a></li>
                </ol>
            </div>


            <h2 class="title text-center">List of employees</h2>

            <br/>
<div class="col-sm-8 col-sm-offset-2 padding-right">
            <table class="table-bordered table-striped table">
                <tr>
                    <th>Employee's ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <?php foreach ($workersList as $worker): ?>
                    <tr>
                        <td><?php echo $worker['id']; ?></td>
                        <td><?php echo $worker['name']; ?></td>
                        <td><?php echo $worker['age']; ?></td>
                        <td><?php echo $worker['salary']; ?></td>
                        <td><a href="/site/worker/update/<?php echo $worker['id']; ?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/site/worker/delete/<?php echo $worker['id']; ?>" title="Delete"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>

            </table>
</div>
        </div>
    </div>
</section>

<?php include ROOT . '/view/pattern/footer.php'; ?>

