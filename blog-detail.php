<?php
  require_once('header.php');
  require_once('connection.php');
  $activePage = "Blog";
?>

<section id="main-section" class="clearfix">
	<div class="container-fluid pt-5">
	

<!-- Body Section -->
    <section id="about" class="about" >

      <div class="container pl-sm-0 pr-sm-0" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-12 col-md-12" >
            <div class="blog-detail-box" data-aos="fade-left" data-aos-delay="100">
            <?php 
            if(isset($_GET['id'])) {
                $blogId = $_GET['id'];
            }
            $sql = "SELECT * FROM blog WHERE id='".$blogId."'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $blog = $result->fetch_assoc();
            ?>
            <h3><?php echo $blog['title'] ?></h3>
            <div class="blog-info form-group">
            	
            	<!-- Date Posted -->
	            <i class="fa fa-calendar" aria-hidden="true"></i>  
                    <?php echo $blog['date_posted'] ?>
	            
	            <!-- Post Writer -->
	              <i class="fa fa-user" aria-hidden="true"></i>
	              <a href="" class=""><?php echo $blog['author_name'] ?></a>
	            
	            <!-- Tags If Any -->  
	              <i class="fa fa-tag" aria-hidden="true"></i>      
				    
                  <?php 
                        $sql2 = "SELECT * FROM blog_post_tags WHERE blog_id='".$blog['id']."'";
                        $result2 = $conn->query($sql2);

                        if ($result2->num_rows > 0) {
                        // output data of each row
                        while($tag = $result2->fetch_assoc()) {
                            ?>
                                <a href="<?php echo $tag['link'] ?>" class=""><?php echo $tag['title'] ?></a>,
                            <?php
                        }
                        } else {
                            //echo "0 results";
                        }
                    ?>
            </div>
            <div class="blog-detail-content">
                <?php echo $blog['content'] ?>
            </div>
            <?php
                } else {
                    echo "<h3>No Data</h3>";
                }
            ?>   
            </div>
          </div>
        </div>
      </div>

    </section>
   <!-- End About Section -->
<!-- End Body Section -->

</div>
</section> 


</main><!-- End #main -->
<?php
require_once('footer.php');
?>