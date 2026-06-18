<?php include "header_footer/header.php"; ?>

<div class="page-header">
    <div class="container">
        <h1>Our Products</h1>
        <ul class="breadcrumb">
            <li><a href="../about.php">About Us</a></li>
            <li class="active">Products</li>
        </ul>
    </div>
</div>

<div class="container mt-100 mb-100">
        <div class="row">
        <?php 
            require_once('../../otherFiles/db.php');
            $select="SELECT * FROM incubator_and_warmer";
            $result=mysqli_query( $con,$select);
            $num_rows=mysqli_num_rows($result);
            if( $num_rows>0)
            {
                while($show_data=mysqli_fetch_assoc($result))
                {
                    ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-card course-card">
                                <a href="../../images/gallery/incubator_and_warmer/<?php echo $show_data['name']; ?>" data-gal="prettyPhoto[galleryName]" class="img-zoom"><i class="fa fa-search"></i></a>
                                <img src="../../images/gallery/incubator_and_warmer/<?php echo $show_data['name']; ?>" class="img-responsive" alt="">
                            </div>
                        </div>
                    <?php
                }
            }
        ?>
        </div>
    </div>

<?php include "header_footer/footer.php";?>