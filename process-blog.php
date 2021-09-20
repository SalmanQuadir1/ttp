<?php 

require_once('connection.php');

if(isset($_POST['title'])){

  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $content = mysqli_real_escape_string($conn, $_POST['content']);
  $author_name = mysqli_real_escape_string($conn, $_POST['authorName']);
  $date_posted = mysqli_real_escape_string($conn, $_POST['datePosted']);
  //$content = $_POST['content'];

  $tagTitles = $_POST['tagTitle'];
  $tagLinks = $_POST['tagLink'];

  //$cols = array("blog_id", "link", "title");
  //$blog_id=9;
  
    $sql = "INSERT INTO blog (author_name,date_posted,title,content) VALUES ('$author_name','$date_posted','$title','$content')";
    
    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
       if($last_id != '') { echo "Row Id ".$last_id;
          foreach($tagTitles as $key => $title)
            {
              if($title != '' && $tagLinks[$key] != '')
              {
                $title_tag = mysqli_real_escape_string($conn, $title);
                $link_tag = mysqli_real_escape_string($conn, $tagLinks[$key]);
               
                $sqlTags = "INSERT INTO blog_post_tags (blog_id,link,title) VALUES ('$last_id','$link_tag','$title_tag')";
                if ($conn->query($sqlTags) === TRUE) {              
                  echo "done";
                  
                } else {
                  echo "Error in Tags: " . $sql . "<br>" . $conn->error;
                }
              } 
           }
          echo "Blog Added Successfully";
          header('Location: blog-home.php');exit;
        }      

     } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
    $conn->close();
 
    

    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
   
    }

    function insertTags($conn, $blog_id, $tagTitles, $tagLinks) {
      foreach($tagTitles as $key => $title)
      {
          if($title != '' && $tagLinks[$key] != '')
          {
            $insData = array("blog_id"=>$blog_id, "link"=>mysqli_real_escape_string($conn, $tagLinks[$key]), "title"=>mysqli_real_escape_string($conn, $title));
            $columns = implode(", ",array_keys($insData));
            $values  = implode(", ", $insData);
            /* echo "cols \n";
            print_r($columns);
            echo "values \n";
            print_r($values); */

            $sqlTags = "INSERT INTO `blog_post_tags` ($columns) VALUES ($values)";
            if ($conn->query($sqlTags) === TRUE) {              
              return true;
              
            } else {
              return false;
            }
          } 
      }
    }
?>