        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sección películas</h1>                        
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
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalMovies">
                            Añadir película
                        </button>
                        <hr>
                        <!-- Table -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th> Nombre </th>
                                                <th> Director</th>
                                                <th> Año </th>
                                                <th> Score </th>
                                                <th> Género </th>
                                                <th> Quote </th>
                                                <th> Editar </th>
                                                <th> Eliminar </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($movies as $movie): ?>
                                            <tr>
                                                <td><?php echo $movie['m_name']; ?></td>
                                                <td><?php echo $movie['m_directed']?></td>
                                                <td><?php echo $movie['m_year']?></td>
                                                <td><?php echo $movie['m_music']?></td>
                                                <td><?php echo $movie['m_category']?></td>
                                                <td><?php echo $movie['m_quotes']?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end Table -->
                
                        <!-- Modal Movies -->
                        <div class="modal fade" id="modalMovies" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Agregar nueva pelicula </h4>
                              </div>
                              <div class="modal-body">

                                <!-- Form Movies  -->
                                <form role="form" id="form-movie" enctype="multipart/form-data">

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
                                        <label>Articulo</label>
                                        <textarea id="m_article" name="m_article"></textarea>
                                    </div> 
                                    <div class="form-group">
                                        <label>Quote</label>
                                        <input class="form-control" type="text" name="m_quotes" placeholder="Ingresar quote">                                
                                    </div>
                                    <div class="form-group">
                                        <label >Subir imagen</label>
                                        <input type="file" name="file" id="exampleInputFile">    
                                    </div>     


                                    <button type="button" class="btn btn-default" data-dismiss="modal" id="submitMovie" >Agregar</button>
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
                                    <input id="t_name" type="text" class="form-control" name="d_name" placeholder="Ingresar nombre director" required>
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea id="t_description" name="d_description"></textarea>
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

        $("#submitMovie").click(function(){

            tinyMCE.triggerSave(); 
            var dataTextArea = $('#m_article').val();          
            var dataPost = $("#form-movie").serialize();

            var dataUrl = "<?php echo base_url()?>admin_movie_ci/add_movie";

            $.ajax({

                type: "POST",
                url: dataUrl,
                dataType: "text", 
                data: (dataTextArea, dataPost),
                success: function(data){

                    console.log(data); 
                }
            });

            return false; 

        });

        $("#submitDirected").click(function(){            

            tinyMCE.triggerSave(); 
            var dataTextArea = $('#t_description').val();          
            var dataPost = $("#form-directed").serialize();

            var dataURL  = '<?php echo base_url();?>admin_movie_ci/add_directed'; 
            var alertMSG = '<div class="alert alert-success" role="alert">¡Se ha agregado con éxito!</div>'

            $.ajax({

                type: "POST", 
                url: dataURL, 
                dataType: "text", 
                data: (dataTextArea, dataPost), 
                success: function(data){

                    $(".alert-content").append(alertMSG); 
                    $("#submitDirected").attr("disabled", "disabled"); 

                }
            }); 

            return false; 
        }); 


    });

    /* Cerrar Modal */
    $("#close").click(function(){
        location.reload();
    });
</script>