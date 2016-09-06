<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Categories
                    <button type="button" class="btn btn-warning pull-right" data-toggle="modal"
                            data-target="#modal-new-category">New category
                    </button>
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


<!-- Modal -->
<div class="modal fade" id="modal-new-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>