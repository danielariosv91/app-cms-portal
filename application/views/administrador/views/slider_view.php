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

                    <!-- ==== Form ==== -->
                    <div class="col-lg-4">
                        <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()?>admin_slider_ci/upload_photo_slider" >
                       
                            <div class="form-group">
                                <label >Subir imagen</label>
                                <input type="file" name="file" id="exampleInputFile"> 
                                <input type="hidden" name="file">   
                            </div>  
                            <button type="submit" class="btn btn-default">Agregar</button>
                        </form>
                        <hr> 
                    </div>
                    <!-- End Form -->

                    <!-- ==== Thumbnail ==== -->
                    <?php foreach ($sliders as $slide): ?>
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                              <img src="<?php echo base_url()?>images/slider/<?php echo $slide['s_name']?>" alt="What is this?">
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <!-- End Thumbnail -->
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
