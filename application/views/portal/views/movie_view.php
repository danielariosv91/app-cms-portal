    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> <?php echo $movie['m_name']; ?>
                    <small>(<?php echo $movie['m_year']; ?>)</small>
                </h1>
                <ol class="breadcrumb">
                    <li><?php echo anchor('','Home'); ?></li>
                    <li class="active"><?php echo $movie['m_name']; ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                
                <!-- Blog Post -->
                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>

                <!-- Preview Image -->
                <div class="img-content">
                    <img src="<?php echo base_url(); ?>images/<?php echo $movie['m_images']; ?>" alt="">
                </div>
                <hr>

                <!-- Post Content -->
                <p><?php echo $movie['m_article']; ?></p>              
                <hr>  

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Buscar</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Buscar</button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>



                <!-- Movie Details Well -->
                <div class="well">
                    <h4></h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li>Director: </li>
                                <li>Reparto: </li>
                                <li>Música: </li>
                                <li>Género</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#"><?php echo $movie['m_directed'];?></a></li>
                                <li><a href="#">Nombre de actores</a></li>
                                <li><a href="#"><?php echo $movie['m_music'];?></a></li>
                                <li><a href="#"><?php echo $movie['m_category'];?></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <div class="well">
                    <h4>Arcitulos asociados</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a></li>
                                <li><a href="#">Category Name</a></li>
                                <li><a href="#">Category Name</a></li>
                                <li><a href="#">Category Name</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Quotes</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
