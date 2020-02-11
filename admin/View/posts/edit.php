<?php $this->theme->header(); ?> 
      <main class="main">
            <section class="ui vertical stripe">
                <div class="ui container">
                </h3>
                    <!-- /.ui tag label -->
                    <div class="ui attached segment">
                    <h3 class="ui horizontal header divider"> <i class="edit blue icon"></i> </h3>
                    <a class="ui tag label" href="/dynweb/cms/admin/posts/"> Back</a>
                        <h3 class="ui horizontal divider header">
                           <i class="tag icon"></i> <!-- /.tag icon -->
                            <?= $post['title'] ?>
                       
                            <!-- /.post_list_content_title -->
</h3>
    <div class="ui top attached tabular menu">
        <div class="left menu">
        <!-- /.left menu -->
        <div class="active item">  
            <p> Edit post</p>
        </div>
        </div>
        <div class="right menu "> 
    <div class="item active">
        <div class="ui transparent icon input">
            <input type="text" placeholder ="Search a text ..."> 
            <i class="search icon"></i> <!-- /.search icon -->
        </div>
        <!-- /.ui transparent icon input -->
    </div>
        <!-- /.active item -->
    </div>
    <!-- /.ui top attached tabular menu -->
    </div>
                        <div class="ui bottom attached segment">
                            
                            <form name="formpostUpdate" id="formPostEdit" class="ui form">
                                <div class="field">
                                <!-- /.field -->
                            <input type="hidden" name = "postId" id="formPostId" value="<?= $post['id']?>"/>
                            </div>
                                    <div class="field required">
                                    <!-- /.field -->
                                <label for = "formTitle">Title</label> <!-- /.post_list_wrap_form_title_label -->
                                    <input name = "title" id="formTitle" value=" <?= $post['title']?>"/>
                                    </div>
                            <!-- /.post_list_wrap_form_title_p -->
                           
                               <div class="field required">
                               <!-- /.field -->
                                    <label for = "formContent" >Content</label>
                                        <textarea name="content" id="formContent" required autofocus>
                                            <?= $post['content']?>
                                        </textarea>
                                       
                                        </div> <!-- /.post_list_wrap_form_content_label --></p>
                                <!-- /.post_list_wrap_form_content_p -->
                                <div class="ui buttons">
                        <button id="postPageEdit" class="ui positive button" onclick="post.edit()">Save</button>
                            <div class="or"></div> 
                    <a href="/dynweb/cms/admin/posts/" class="ui negative button active">Cancel</a>
                        </div>
                            </form>
                           
                            <!-- /.post_list_wrap_form -->
                        </div>
                        <!-- /.post_list_wrap_form -->
                    </div>
                    <!-- /.post_list_wrap -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.post_list -->
        </main>
        
        <!-- /.follow button -->
        <!-- /.main -->
        <!-- <script type="text/javascript" src="/dynweb/cms/admin/Assets/js/post/postEdit.js"></script> -->
<?php $this->theme->footer();?> 
<script type="text/javascript" src="/dynweb/cms/admin/Assets/js/post/post.js"> </script>
<script type="text/javascript"> 
$('#formContent').trumbowyg();

</script>

       
        