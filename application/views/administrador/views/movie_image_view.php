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


                    <!-- ==== Table Thumbnail ==== --> 
                    <div class="col-lg-6">                                  
                        <table class="table">
                            <thead>
                                <tr>
                                   <th></th>
                                   <th></th>                                     
                                </tr>  
                            </thead>
                            <tbody>
                                
                                    <tr class="col-lg-8">
                                       <td>
                                            <div class="slide-content-admin">
                                                <img src="">
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
                                
                            </tbody>
                        </table>  
                    </div>   
                    <!-- End Thumbnail --> 

                    <!-- ==== Form Image==== -->
                    <div class="col-lg-5">
                        <div class="well">
                            <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()?>admin_slider_ci/upload_photo_slider" >                       
                                <div class="form-group">
                                    <label >Subir imagen</label>
                                    <input type="file" name="file" id="exampleInputFile"> 
                                    <input type="hidden" name="file">   
                                </div>  
                                <button type="submit" class="btn btn-default">Agregar</button>
                            </form> 
                        </div> <!-- end well -->                       
                        <hr> 
                    </div>
                    <!-- End Form Image -->  

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /#page-wrapper -->
   
