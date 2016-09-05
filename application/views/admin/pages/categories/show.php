<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Categories
                    <a href="/app/movies/create" class="pull-right btn btn-warning">New category</a>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active"><a href="/app/admin/movies">Categories</a></li>
                </ol>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <table id="table-cms-admin" class="table table-bordered display nowrap" cellspacing="0" width="100%">
                    <thead>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $key => $value): ?>
                        <tr>
                            <td>
                                <?php echo $value->name; ?>
                            </td>
                            <td>
                                <button class="btn btn-default"></button>
                            </td>
                            <td>
                                <button class="btn btn-default"></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- /#page-wrapper -->
</div> <!-- /#wrapper -->