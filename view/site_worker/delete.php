<?php include ROOT . '/view/pattern/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/site/worker/index">List of employees</a></li>
                    <li>  <a href="/site/worker/create" > Add employee</a></li>
                    <li class="active">Delete information of employee</li>
                </ol>
            </div>
<div class="col-sm-4 col-sm-offset-4 padding-right">
            <h4>Delete information of employee #<?php echo $id; ?></h4>

            <p>Do you really want to delete this data?</p>

            <form method="post">
                <input type="submit" name="submit" value="Delete" class="btn btn-default"/>
            </form>
</div>
        </div>
    </div>
</section>

<?php include ROOT . '/view/pattern/footer.php'; ?>

