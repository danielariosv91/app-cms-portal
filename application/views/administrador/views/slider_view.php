        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Añadir Slider - Home
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>
                                <?php echo anchor('admin/dashboard','Dashboard');?>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Slider
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()?>admin_movie_ci/add_movie" >
                       
                            <div class="form-group">
                                <label >Subir imagen</label>
                                <input type="file" name="file" id="exampleInputFile">    
                            </div>               


                            <button type="submit" class="btn btn-default">Agregar</button>
                        </form>
                        <hr>

        
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
