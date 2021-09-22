<?php
    require_once('header.php');
    require_once('connection.php');
    $activePage = "Blog";
?>

<section id="main-section" class="clearfix">
	<div class="container-fluid pt-5">
	

<!-- Body Section -->
<main id="main">
  
  <div class="row">
   <div class="col-sm-12 text-center">
       <div class="blog-page-header">
           <h2 class="display-5">BLOG</h2>  
       </div>
       <?php
        if(isset($_SESSION['msg'])) 
        { 
            echo "<div class='alert alert-success'><strong>".$_SESSION['msg']."</strong> !";
            echo "<button class='close' data-dismiss='alert'>&times;</button></div>";
            unset($_SESSION['msg']);
        }
        ?> 
   </div>
  </div>
    <div class="row blog-body">
        <?php
            $sql = "SELECT * FROM blog ORDER BY date_posted desc LIMIT 20";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
        ?>   
                    <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="card blog-card">
                                <div class="card-body">
                                    <h6 class="blog-title"><?php echo $row['title'] ?></h6>
                                    <div class="card-text">
                                            <?php 
                                                $data = strip_tags($row["content"]);
                                            ?>
                                            <?php echo substr($data,0,351) ?>...
                                            <br>
                                            <a href="blog-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-dark float-right">Read More &raquo;</a>
                                    </div>
                                    
                                </div>
                                <div class="card-footer">
                                    <div class=" form-group blog-date">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row['date_posted'] ?>
                                        <span class="float-right"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['author_name'] ?></span>
                                    </div>
                                
                                    <div class="blog-links">
                                        <i class="fa fa-tag" aria-hidden="true"></i>	       
                                        <?php 
                                            $sql2 = "SELECT * FROM blog_post_tags WHERE blog_id='".$row['id']."'";
                                            $result2 = $conn->query($sql2);

                                            if ($result2->num_rows > 0) {
                                            // output data of each row
                                            while($tag = $result2->fetch_assoc()) {
                                            ?>
                                            <a href="<?php echo $tag['link'] ?>" class=""><?php echo $tag['title'] ?></a>,
                                                    
                                            <?php
                                            }
                                            } else {
                                                continue;
                                                //echo "0 results";
                                            }
                                        ?>        
                                    </div>
                                </div>
                            </div>                    
                    </div>
            <?php
                }
            } else {
            //echo "0 results";
            }
            $conn->close();
        ?>
            
         
    </div>
   </main>
   
   <!-- End #main -->
<!-- End Body Section -->


</div>
</section> 


</main><!-- End #main -->
<?php
require_once('footer.php');
?>