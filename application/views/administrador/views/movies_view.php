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

                        <form role="form" method="post" action="<?php echo base_url()?>admin_movie_ci/add_movie" >

                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" type="text" name="m_name" placeholder="Ingresar nombre película">                                
                            </div> 
                            <div class="form-group">
                                <label>Dirigida por:</label>
                                <select class="form-control" name="m_director">
                                    <?php foreach ($directors as $director): ?>
                                        <option> <?php echo $director['d_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
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
                                <textarea name="m_article"></textarea>
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
