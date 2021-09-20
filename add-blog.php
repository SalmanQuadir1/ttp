<section id="main-section" class="clearfix">
<div class="container-fluid pt-5">
	
<?php
    require_once('header.php');
    $activePage = "Blog";
?>

<!-- Body Section -->
<script src="assets/js/ckeditor.js"></script>

<div class="container">
      <div class="col-sm-12">                    
         
         <h3>Add News</h3>
                             
             <form id="newsForm" action="process-blog.php" class="form-horizontal" role="form" method="post">
                         
                 <div class="row">
                         <div class="col-sm-6">
                            <div class="form-group">
                                 <input type="text" class="form-control" name="title" value="" placeholder="News Title" />                                        
                         </div>
                         
                         <div class="form-group">
                               
                                 <textarea id="editor" name="content" rows="15">
                                 
                                </textarea>
                         </div>
                         </div>
                         <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="authorName" placeholder="Author Name" />
                             </div>
                             
                             <div class="row" id="tagContaoner">
                                    <div class="tagItem col-sm-12 d-flex form-group" >
                                            <input type="text" class="form-control mr-1" name="tagTitle[]" id="title_0" placeholder="Tag Title" />
              
                                            <input type="text" class="form-control" name="tagLink[]" id="link_0" placeholder="Tag Link" />
                                    
                                 </div>
                                 <div class="col-sm-12 form-group">
                                         <input type="button" id="add_tag" value="Add Tag" class="btn btn-sm btn-dark float-right" />
                                         <input type="button" id="remove_tag" value="X" class="btn btn-sm btn-danger float-right mr-2" />
                                 </div>
                             </div>
                             
                             <div class="form-group">
                                    <input type="text" class="form-control" id="postedDate" name="datePosted" placeholder="Select date" />
                             </div>
                         </div>
                         
                 </div>
                 
                 
                
              
                 <div class="form-group ">
                       <input type="submit" class="btn btn-info" value="Submit News">
                 </div>   
            </form>     



       </div> 
       </div>
       <div class="container-fluid">
       <h3>Published News</h3>
       <div class="row table-responsive">
           <table class="table table-striped table-bordered table-sm">
                <thead>
                  <tr>
                    <th class="th-sm">#
              
                    </th>
                    <th class="th-sm">Title
              
                    </th>
                    <th class="th-sm">Author
              
                    </th>
                    <th class="th-sm">Date Posted
              
                    </th>
                    <th class="th-sm">Action</th>
                  </tr>
                </thead>
                <tbody>
                      <!-- <c:forEach var="blog" items="${blogs}" varStatus="loop">
                          <tr>
                            <td>${loop.index+1}</td>
                            <td>${blog.title}</td>
                            <td>${blog.authorName}</td>
                            <td>${blog.datePosted}</td>
                            <td>
                                    <c:url value="/blog/${loop.index}" var="copy"></c:url>
                                    <a style="cursor:pointer" onClick="copyToClipboard('${copy}')" data-toggle="tooltip" title="Copy Link"><i class="fa fa-clipboard" style="color:#1bb1dc"></i></a>
                                    <a href="${edit}/${loop.index}" data-toggle="tooltip" title="Edit News"><i class="fa fa-pencil-square" style="color:#1bb1dc"></i></a>
                                    <a href="${delete}/${loop.index}" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" style="color:#1bb1dc"></i></a>
                            </td>
                          </tr>
                      </c:forEach> -->
                 
              </table>
       </div>                    
   </div> 
   
   
<script src="assets/js/flatpickr.js"></script>

<script src="assets/js/blog.js"></script>
<script>
  var config =  {
           enableTime: true,
           dateFormat: "y-m-d",
           //maxDate: "today"
  };
   $('#postedDate').flatpickr(config);
   
   function copyToClipboard(text) { console.log("copying...");
         var input = document.body.appendChild(document.createElement("input"));
         input.value = text;
         input.focus();
         input.select();
         document.execCommand('copy');
         input.parentNode.removeChild(input);
       }
   
   let editor;

   ClassicEditor
       .create( document.querySelector( '#editor' ) )
       .then( newEditor => {
           editor = newEditor;
       } )
       .catch( error => {
           console.error( error );
       } );

   // Assuming there is a <button id="submit">Submit</button> in your application.
   /* document.querySelector( '#submit' ).addEventListener( 'click', () => {
       const editorData = editor.getData();

       console.log(editorData); 
   } );*/

</script>

<!-- End Body Section -->

</div>
</section> 
</main><!-- End #main -->
<?php
require_once('footer.php');
?>