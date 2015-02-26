        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Gestor de imágenes </h1>
                        <ol class="breadcrumb">
                            <li><?php echo anchor('admin/dashboard','Dashboard');?></li>
                            <li><?php echo anchor('admin/movies','Sección películas');?></li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Imagenes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">    

                    <!-- ==== Form Image==== -->
                    <div class="col-lg-5">
                        <div class="well">
                            <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()?>admin_movie_ci/update_movie/<?php echo $movie['m_index']?>" >                       
                                <div class="form-group">
                                    <label >Subir imagen</label>
                                    <input type="file" name="file" id="exampleInputFile"> 
                                    <input type="hidden" name="file">   
                                </div>  
                                <button type="submit" class="btn btn-default">Agregar</button>
                            </form> 
                        </div> <!-- end well -->                       
                        <hr> 
                    </div><!-- End Form Image -->  

                    <!-- ==== Table Thumbnail ==== --> 
                    <div class="col-lg-3"> 
                        <?php if ($movie['m_images'] != null):?> 
                        <div class="well">                                                           
                            <a href="#" class="thumbnail">
                                <img src="<?php echo base_url()?>images/<?php echo $movie['m_images']?>">
                            </a>                           
                        </div>
                        <?php endif; ?>
                    </div>   
                    <!-- End Thumbnail --> 

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /#page-wrapper -->
   
