
<?php
require_once('connection.php');
?>

<!-- SECTIOB BLOG ROLL  -->
<div class="row">
	<div class="col-sm-12 text-center">
	<div class="about-content">
		<h2>NEWSROOM</h2> 
	</div>
	</div>
		<div class="contain">
			  <div id="owl-carousel" class="owl-carousel owl-theme">
              <?php
                $sql = "SELECT * FROM blog ORDER BY date_posted desc LIMIT 10";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>  
                    <div class="item">
                        <div class="jumbotron blog-roll">
                            <div class=" form-group">
                            <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row['date_posted'] ?>
                            <span class="float-right"><i class="fa fa-user" aria-hidden="true"></i>  <?php echo $row['author_name'] ?></span>
                        </div>
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>">
                                <h6 class="card-title"><?php echo $row['title'] ?></h6>
                        </a>			    
                                <p class="card-text"><?php echo substr(strip_tags($row['content']),0,211) ?>...</p>
                                <a class="btn btn-sm btn-outline-dark float-right" href="blog-detail.php?id=<?php echo $row['id'] ?>">Read More &raquo;</a>
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
		</div>
	</div>