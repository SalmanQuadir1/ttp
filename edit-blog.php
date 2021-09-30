<?php
    require_once('header.php');
    require_once('connection.php');
    $activePage = "Blog"; 
    if(isset($_GET['id'])) {
        $blogId = $_GET['id'];
    }
    if(!isset($_SESSION['user'])) {
        header('Location:./login.php');
        exit;
    }
?>

<section id="main-section" class="clearfix">
	<div class="container-fluid pt-5">
	

<!-- Body Section -->

<script src="assets/js/ckeditor.js"></script>

<div class="container mt-4">
      <div class="col-sm-12">                    
         
         <h3>Modify News</h3>
                             
             <form id="newsForm" action="process-blog.php?edit=true" class="form-horizontal" role="form" method="post">
                         
                 <div class="row">
                    <?php
                        $sql = "SELECT * FROM blog WHERE id='".$blogId."'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $blog = $result->fetch_assoc();
                    ?>
                        <input type="hidden" name="id" value="<?php echo $blog['id'] ?>" />                     
                         <div class="col-sm-6">
                            <div class="form-group">
                                 <input type="text" class="form-control" name="title" required value="<?php echo $blog['title']; ?>" placeholder="News Title" />                                        
                         </div> 
                         <div class="form-group">
                            <input type="text" class="form-control" name="authorName" required value="<?php echo $blog['author_name']; ?>" placeholder="Author Name" />
                         </div>                        
                         
                         </div>
                         <div class="col-sm-6">
                             
                             <!-- <div class="row" id="tagContaoner">
                                    <div class="tagItem col-sm-12 d-flex form-group" >
                                            <input type="text" class="form-control mr-1" name="tagTitle[]" id="title_0" placeholder="Tag Title" />
              
                                            <input type="text" class="form-control" name="tagLink[]" id="link_0" placeholder="Tag Link" />
                                    
                                 </div>
                                 <div class="col-sm-12 form-group">
                                         <input type="button" id="add_tag" value="Add Tag" class="btn btn-sm btn-dark float-right" />
                                         <input type="button" id="remove_tag" value="X" class="btn btn-sm btn-danger float-right mr-2" />
                                 </div>
                             </div> -->
                             
                             <div class="form-group">
                                    <input type="text" class="form-control" id="postedDate" required value="<?php echo $blog['date_posted']; ?>" name="datePosted" placeholder="Select date" />
                             </div>
                         </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">  
                                    <textarea id="editor" name="content" required>      
                                        <?php echo $blog['content']; ?>                           
                                    </textarea>
                                </div>
                            </div>
                         </div>
                        
                         
                    <?php
                        } else {
                            echo "<h3>No Data</h3>";
                        }
                    ?>   
              
                 <div class="form-group ">
                       <input type="SUBMIT" class="btn btn-info" id="submit" value="Submit News">
                 </div>   
            </form>    
       </div> 
    </div> 
   
   
<script src="assets/js/flatpickr.js"></script>

<script src="assets/js/blog.js"></script>
<script>
  var config =  {
           enableTime: true,
           dateFormat: "Y-m-d",
           enableTime: false,
           //maxDate: "today"
  };
   $('#postedDate').flatpickr(config);
      
   let editor;

   ClassicEditor
       .create( document.querySelector( '#editor' ), {
        //toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'News Heading', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'News Title', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'News Sub Title', class: 'ck-heading_heading3' }
            ]
        }
       })
       .then( newEditor => {
           editor = newEditor;
       })
       .catch( error => {
           console.error( error );
       } );

    /* $('#submit').click(function(e) {
        e.preventDefault();
       const editorData = editor.getData();        
       console.log(editorData); 
       //editor.updateSourceElement("<h1>Hello Moto</h1>");
       return false;
   }); */

</script>

<!-- End Body Section -->

</div>
</section> 


</main><!-- End #main -->
<?php
require_once('footer.php');
?>