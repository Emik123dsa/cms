<?php $this->theme->header(); ?> 
   
            <section class="ui vertical stripe">
                <div class="ui container">
                    <div class="ui attached segment"> 
                    <h3 class="ui horizontal header divider"> <i class="folder blue icon"></i> </h3>
                        <a class="ui tag label"> Back </a>
                        <!-- /.ui tag label -->
                        <div class="ui top attached tabular menu">
                            <div class="left menu ">
                            <!-- /.menu left -->
                            <!-- /.item -->
                            <a href="/dynweb/cms/admin/posts/" class="item active"> Posts</a> <!-- /.post_list_content_title_link -->                     
                                <a href="/dynweb/cms/admin/posts/create/" class="item"> New posts</a> <!-- /.post_list_content_title_link -->
</div>
                                <div class="right menu "> 
    <div class="item active">
        <div class="ui transparent icon input">
            <input type="text" placeholder ="Search a post ..."> 
            <i class="search icon"></i> <!-- /.search icon -->
        </div>
        <!-- /.ui transparent icon input -->
    </div>
    <div class="item ">
        <div class="ui transparent icon input">
            <input type="text" placeholder ="Navigate to ..."> 
           <button class="ui blue button">Go</button> <!-- /.ui primary button -->
        </div>
        <!-- /.ui transparent icon input -->
    </div>
    <!-- /.item -->
                        </div>
                        <!-- /.menu right -->
                            <!-- /.post_list_content_add -->
                            <!-- /.post_list_content_title -->
                            </div>
                      
                       <div id = "post-menu" class="ui bottom attached segment">
                      
                       <!-- /.ui bottom attached segment -->
                        <!-- /.post_list_wrap_table --> 
                        <table class="ui compact celled definition table">
                          <thead class = "full-width">
                            <tr>
                                <th> </th>
                              <th> Number </th>
                              <th> Title</th>
                              <th> Date</th>
                            </tr>
                          </thead>  
                          <tbody >
                          <?php foreach($posts as $post) : ?>
                          <tr class="ui segment post">
                            <td class="collapsing">
                                <div class="ui toggle slider checkbox">
                                    <input type="checkbox"> <label></label>
                                            </div>
                                        </td>
                              <td> <?= $post['id'] ?> </td>
                              <!-- /.post_list_wrap_number -->
                              <td > 
                                  <div class="ui accordion post">
                                      <div class="title">
                                      <!-- /.ui title -->
                                  <!-- /.ui accordion -->
                                  <a href="javascript:void(0)" >  

                                   <?= $post['title'] ?>
                                    <i class="dropdown icon"> </i> <!-- /.dropdown icon -->
                         
                                  </a> <!-- /.post_list_wrap_title_link -->
                                  </div>
                                  <div class="content"> 
                                      <a href="/dynweb/cms/admin/posts/edit/<?= $post['id']?>" class="ui green button"><i class="edit icon"></i> <!-- /.edit icon --> Edit It</a> <!-- /.ui green button -->
                                      <a href="javascript:void(0)" class="ui red button"><i class="cancel icon"></i> <!-- /.cancel icon --> Delete It</a> <!-- /.ui green button -->
                                  </div>
                                  <!-- /.content -->
                                  </div>
                                  </td>
                              <td> <?= $post['date'] ?></td>
                              </tr>
                          <?php endforeach; ?>
                          </tbody>   
                          <tfoot class="full-width">
    <tr>
      <th> <button class="ui large green button"><i class="edit outline icon"></i>  <!-- /.edit outline --></button> <!-- /.ui large green -->
          </th>
      <th colspan="4">
        <div class="ui left floated large blue labeled icon button">
          <i class="file alternate outline icon"></i> 
          New post
        </div>
        <div id="post-pagination" > 
                            <div class="ui right floated pagination menu"> 

                            <?php if($postId == 1) 
                            { 
                              echo "<div class='icon item'><i class='left chevron icon'></i></div>"; 
                            }
                             else 
                             {echo 
                      
                             "<a href='/dynweb/cms/admin/posts/post/".($postId-1)."' class='icon item'><i class='left chevron icon'></i></a>";
                             
                             ;}?>

                               
                                <?php foreach($pagination as $item): ?>
                        <a href="/dynweb/cms/admin/posts/post/<?= $item['id']?>" class = "item <?php if ($postId == $item['id']) echo ' active' ?>"> <?= $item['id']?></a>
                        
                                <!-- /.item -->
                                <?php endforeach; ?>
                                
                                <!-- /.item -->
                                <?php 
                               
                                if($postId > 0 and $postId < ceil($maxPostId[0]['amount'] / $deltaPostId )) 
                            { 
                              echo 
                      
                             "<a href='/dynweb/cms/admin/posts/post/".($postId+1)."' class='icon item'><i class='right chevron icon'></i></a>";
                            }
                             else 
                             {
                              echo "<div class='icon item'><i class='right chevron icon'></i></div>";  
                              
                             
                             }?>
                            </div>
        <button class="ui large red button">
            Cancelled All
        </button>
      </th>
    </tr>
  </tfoot>
                          <!-- /.full-width -->   
                         </table>
                         </div>
                        <!-- /.post_list_content -->
                    </div>
                    <!-- /.post_list_wrap -->
                    </div>
                    </div>
                <!-- /.container -->
            </section>
            <!-- /.post_list -->
   
            <form name="deletePosts" class="ui form">
<!-- /.ui form -->
<!-- /.ui segment -->
<div class="ui basic modal">
  <div class="ui icon header">
    <i class="delete icon"></i>
   Warning before deleting
  </div>
  <div class="content">
    <p>Are you sure that you want to delete all of them?</p>
  </div>
  <div class="actions">
    <div class="ui red basic cancel inverted button">
      <i class="remove icon"></i>
      No
    </div>
    <div class="ui green ok inverted button">
      <i class="checkmark icon"></i>
      Yes
    </div>
  </div>
</div>
</form>
<?php $this->theme->footer();?> 
       
<script type="text/javascript">
        $('.ui.segment.post').accordion();
        var menuLoader = document.getElementById('post-menu');

        $('.ui.large.red.button, .ui.red.button').on('click', function() {
            $('.ui.basic.modal').modal('show');
        });


</script>