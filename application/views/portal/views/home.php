

    <!-- Page Content -->
    <div class="container">

        <div class="row">      

            <div class="col-md-10 col-md-offset-1">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <?php foreach ($movies as $movie): ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">                        
                        <div class="thumbnail">
                            <img src="<?php echo base_url()?>images/<?php echo $movie['m_images']?>" alt="">
                            <div class="caption">
                                <h5 class="pull-right">(<?php echo $movie['m_year']; ?>)</h5>
                                <h4><a href="movie/<?php echo $movie['m_url']?>"><?php echo $movie['m_name']; ?></a></h4>
                                <p><?php echo $movie['m_description']; ?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                   
                    </div>
                    <?php endforeach; ?>        

                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

    <hr>

    
