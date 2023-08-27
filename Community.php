<title>Comments</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/comment.css'); ?>">

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Discussion</h1>
                
                <?php if($product):?> <!-- check if the product Model database has any data -->
                 <?php foreach ($product as $row) : ?>
                <div class="comment mt-4 text-justify float-left"> <br><br>
                    <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4> <?php echo $row['comment_sender_name']; ?></h4>
                    <span> -<?php echo $row['date']; ?></span>
                    <p><?php echo $row['comment']; ?></p> <br>
<!--                     
                    <button type="button" data-toggle="reply-form" data-target="comment-1-reply-form" class="btn">Reply</button>

            <form method="POST"  action="<?php echo base_url(); ?>/CommentControler/store" class="reply-form d-none" id="comment-1-reply-form">
                <textarea placeholder="Reply to comment" rows="5"></textarea><br>
                <button type="submit" class="btn">Submit</button>
                <button type="button" data-toggle="reply-form" data-target="comment-1-reply-form" class="btn" >Cancel</button> -->
            </form>
                </div>
                
                    <?php endforeach; ?>
                    <?php endif; ?>
                    
            </div>
            

                <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action="<?php echo base_url(); ?>/CommentControler/store" method="post">
                    <div class="form-group">
                        <h4>Leave a comment</h4>
                        <label for="message">Message</label>
                        <textarea name="comment" id=""msg cols="30" rows="10" class="form-control" style="background-color: white;" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="comment_sender_name" id="fullname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">account with us</a> your address will be used to display your profile picture.</p>
                    </div>
                    <div class="form-inline">
                        <input type="checkbox" name="check" id="checkbx" class="mr-1">
                        <label for="subscribe">Subscribe me to the newlettter</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="post" class="btn">Post Comment</button>
                    </div>
                </form>
            </div>
