    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Directores</h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="active">Directores</li>
                </ol>
            </div>
            
        </div>
        <!-- /.row -->

        <!-- Blog Post Row -->
        <?php foreach ($directors as $directed): ?>
        <div class="row">
            <div class="col-md-1 text-center">
                <p><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html"><img class="img-responsive img-hover" src="http://placehold.it/600x300" alt=""></a>
            </div>
            <div class="col-md-6">
                <h3><a href="directores/<?php echo $directed['d_url']?>"><?php echo $directed['d_name'];?></a></h3>
                <p><?php echo $directed['d_description'];?></p>
                <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div> <!-- /.row -->
        <hr>
        <?php endforeach; ?>






        <!-- Pager -->
        <div class="row">
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
        <!-- /.row -->

        <hr>

  