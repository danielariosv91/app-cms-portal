        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Agregar película 
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>
                                <?php echo anchor('admin/dashboard','Dashboard');?>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()?>admin_movie_ci/add_movie" >

                            <div class="form-group">
                                <label>Nombre y Director </label>
                                <input class="form-control" type="text" name="m_name" placeholder="Ingresar nombre película" required>                                
                            </div>                             
                            <div class="form-group form-inline">                                
                                <div class="btn-group">                                    
                                    <select class="form-control" role="group" name="m_director">
                                        <?php foreach ($directors as $director): ?>
                                            <option> <?php echo $director['d_name']; ?></option>
                                        <?php endforeach; ?>                                      
                                    </select>
                                </div>                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                        Añadir director
                                    </button>
                                    <button type="button" class="btn btn-default">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>                                    
                                    <button type="button" class="btn btn-default">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  
                                    </button>
                                </div>                                                                                         
                            </div>                                                                        
                            <div class="form-group">
                                <label>Año:</label>
                                <select class="form-control" name="m_year">
                                    <?php for ($i = 1910; $i <= 2015; $i++): ?>
                                        <option> <?php echo $i ?></option>
                                    <?php endfor; ?>
                                </select> 
                            </div>                                                           
                            <div class="form-group">
                                <label>Música de:</label>
                                <input class="form-control" type="text" name="m_music" placeholder="Ingresar compositor">                                
                            </div> 
                            <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control" name="m_category">
                                    <?php foreach ($categories as $category): ?>
                                        <option> <?php echo $category['c_category']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>  
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" name="m_description" placeholder="Ingresar descripcion">                                
                            </div> 
                            <div class="form-group">
                                <label>Articulo</label>
                                <textarea name="m_article"></textarea>
                            </div> 
                            <div class="form-group">
                                <label >Subir imagen</label>
                                <input type="file" name="file" id="exampleInputFile">    
                            </div>     


                            <button type="submit" class="btn btn-default">Agregar</button>
                        </form>
                        <hr>

        
                </div>
                <!-- /.row -->
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Agregar nuevo director </h4>
                      </div>
                      <div class="modal-body">
                            <!-- Form Direted -->
                            <form id="form-directed">
                                <div class="form-group">
                                    <label>Nombre director: </label>
                                    <input type="text" class="form-control" name="d_name" placeholder="Ingresar nombre director" required>
                                </div>                            
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="submitDirected" >Agregar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Cerrar</button>
                            </form>                             
                      </div>
                        <div class="modal-footer">
                            <div class="alert-content">
                                
                            </div>   
                        </div>
                    </div>
                  </div>
                </div>        

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<script type="text/javascript">

    $(document).ready(function(){

        $("#submitDirected").click(function(){            

            var dataPost = $("#form-directed").serialize();           
            var dataURL  = '<?php echo base_url();?>admin_movie_ci/add_directed'; 
            var alertMSG = '<div class="alert alert-success" role="alert">¡Se ha agregado con éxito!</div>'


            $.ajax({

                type: "POST", 
                url: dataURL, 
                dataType: 'text', 
                data: dataPost, 
                success: function(data){

                    $(".alert-content").append(alertMSG); 
                    $("#submitDirected").attr("disabled", "disabled"); 

                }
            }); 

            return false; 
        });             
    });
</script>