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

                    <!-- ==== Form Image==== -->
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
                    <!-- End Form Image -->


                    <!-- ==== Table Thumbnail ==== --> 
                    <div class="col-lg-8">                                  
                        <table class="table">
                            <thead>
                                <tr>
                                   <th></th>
                                   <th></th>                                     
                                </tr>  
                            </thead>
                            <tbody>
                                <?php foreach ($sliders as $slider): ?>
                                    <tr class="col-lg-8">
                                       <td>
                                            <div class="slide-content-admin">
                                                <img src="<?php echo base_url()?>images/slider/<?php echo $slider['s_name']; ?>">
                                            </div>
                                       </td> 
                                       <td>
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" value=""> Destacar
                                              </label>
                                            </div>
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" value=""> Activar
                                              </label>
                                            </div>
                                       </td> 
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>  
                    </div>   
                    <!-- End Thumbnail -->              

                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
