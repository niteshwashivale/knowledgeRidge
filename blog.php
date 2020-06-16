<?php
    include 'inc/page_start.php';
    $page="blog";
    include("inc/page_header.php");
    // unset($_COOKIE['comment']); 
    // setcookie('comment', null, -1, '/'); 
 ?>
 <style type="text/css">

 #about{    
    background-image: url(images/blog-bg-1.jpg);
    padding: 80px 0 260px;
 }
 </style>
 <?php
    if(!isset($_GET['id'])) {
 ?>
    <section id="about">
    <div class="container">
            <div class="row">
                <div class="col-sm-12  text-center text-grey"> 
                 <div class="section-header">
                    <h2 class="section-title-grey text-center wow fadeInDown text-grey letter-space m-t-115">BLOG</h2>
                    <p class="p-b-60"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit <br>
ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>  
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>
tempor incididunt ut labore et dolore magna aliqua <br>
abore et dolore magna aliqua.</span>
                    </p>
                    
                </div>
                  
                </div>
                 
            </div>
            
        </div>
    <div class="col-sm-12 "><a id="tohash" href="#blog-section1"><i class="fa fa-angle-down wow bounceInDown arrow animated" style="visibility: visible; animation-name: bounce; padding-top:50px"></i></a></div> 
       
    </section><!--/#main-slider-->

    <!--my blog section-->
    <section id="blog-section1" class="wow fadeIn blog-content">
        <div class="container">
            <div class="row">   
                      <?php   
                        $sql = "SELECT * from blogs where status=1 order by added_date desc";
                        $result = $connect->query($sql);
                        if($result->num_rows > 0) { 
                            while($row = $result->fetch_array()) {
                    ?>  
                    <div class="col-md-4 text-white blog">
                   <a class="blog-link" href="blog.php?id=<?php echo $row['id']; ?>">
                    <div class="blog-image" style="background: url(<?php echo 'admin/img/blog_img/'.$row['image']; ?>)">
                                <div class="overlay">
                                    <div class="blog-text">Read More</div>
                                </div>
                        </div>
                    </a>
                        <div class="blog-textcontent">
                                <h3 class="blog-title"> 
                               <?php echo $row['name']; ?>
                                </h3>
                            <p class="blog-date">
                                <?php echo date("M d, Y", strtotime($row['added_date'])) ?> by <span class="blog-author">Knowledge Ridge</span>
                            </p>
                        </a>
                        </div>
                </div>
                <?php }} ?>
            </div>
        </div>

    </section>
<?php }else{
        $id=$_GET['id'];
        $sql1 = "SELECT b.id, b.name, b.image,b.content, b.type, b.added_date, bc.name as bname FROM blogs b INNER JOIN blog_category bc ON bc.id=b.blog_cat WHERE b.id=$id and b.status=1";
        $result1 = $connect->query($sql1);
        if($result1->num_rows > 0) {
            while($row1 = $result1->fetch_array()) {
    ?>
    <section class="mainblog">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="content">
                        <h2><?php echo $row1["name"] ?></h2>
                        <p class="blog-date">
                                    by <span class="blog-author">Knowledge Ridge</span> | <?php echo date("M d, Y", strtotime($row1['added_date'])) ?> | <span class="blog-author"> <?php echo $row1['bname']; ?></span>
                        </p>
                        <div class="mainblogimg">
                            <img class="img-responsive" src="<?php echo 'admin/img/blog_img/'.$row1['image'];?>">
                        </div>
                            <div class="blogmaincontent">
                            <?php echo $row1['content'] ?>
                            </div>
                             <?php   
                        $sql2 = "SELECT * from config where confvar='blog_comments'";
                        $result2 = $connect->query($sql2);
                        if($result2->num_rows > 0) { 
                            while($row2 = $result2->fetch_array()) {
                                if($row2['var_values']==1){
                    ?>  
                        <div class="comments">
                        
                        <?php
                              $sql3 = "SELECT * from comments where status=1 and postid=$id order by date desc";
                              $result3 = $connect->query($sql3);
                              if($result3->num_rows > 0) {
                                  ?>
                                  
                                  <a class="commentcont" href="#commentlist-container"><i class="fa fa-comments-o"></i> Comments</a>
                                  <?php
                                  while($row3 = $result3->fetch_array()) {
                                      ?>
                        <ol class="commentlist">
                            <li class="comment even thread-even depth-1" id="comment-32376">
                                <div id="div-comment-32376" class="comment-body">
                                    <div class="comment-author vcard">
                                         <cite class="fn"><a rel="external nofollow" class="url"><?php echo $row3["name"];?></a></cite> 
                                    </div>
                                    <!--<em class="comment-awaiting-moderation">Your comment is awaiting moderation.</em>-->
                                    <br>
                                    <div class="comment-meta commentmetadata">
                                        <a><?php echo $row3["date"];?></a>       
                                    </div>
                                    <p><?php echo $row3["comment"];?></p>
                                </div>
                            </li>
                        </ol>
                        <?php   } 
                            }
                        ?>
                        <h2>LEAVE A REPLY</h2>
                        <form id="reply" method="POST" class="formcomment">
                         <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="catid" value=<?php echo $id; ?>>
                                    <div class="form-group">
                                        <div>
                                            <label for="comments">Comment<span class="text-danger">*</span></label>
                                            <textarea type="text" cols="45" rows="8" style="height:70px" id="comments" class="form-control" name="comments"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div>
                                            <label for="name">Name<span class="text-danger">*</span></label>
                                            <input type="text" id="name" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div>
                                            <label for="email">Email<span class="text-danger">*</span></label>
                                            <input type="text" id="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div>
                                            <label for="website">Website</label>
                                            <input type="text" cols="45" rows="8" id="website" class="form-control" name="website" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary r-btn">Post a comment</button>
                                </div>
                            </div>
                        </form>
                </div> 
                <?php 
                    }
                }
            }
            
                ?>

                    </div>
                </div>
                 <div class="col-md-3">
                <h3>Recent Posts</h3>
                <?php
                $sql2 = "SELECT * FROM blogs LIMIT 10"; 
                $result2 = $connect->query($sql2);
                if($result2->num_rows > 0) {
                    while($row2 = $result2->fetch_array()) {
    ?>
                <a class="recents" href="blog.php?id=<?php echo $row2["id"] ?>"><?php echo $row2["name"] ?></a>
    <?php }}?>

                
                </div>
                <?php
        }
    }
else{
    header("Location: blog.php");
}
}

 ?>

               
            </div>

        </div>
    </section>
 
   

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<script src="admin/js/plugins.js"></script>
<script src="js/blog.js"></script>
<?php include 'inc/template_end.php'; ?>