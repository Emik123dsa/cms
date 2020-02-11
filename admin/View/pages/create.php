<?php $this->theme->header(); ?> 
      <main class="main">
            <section class="ui vertical stripe">
                <div class="ui container">
                    <div class="ui attached segment ">
                    <h3 class="ui horizontal header divider"> <i class="file blue icon"></i> </h3>
                    <div class="ui top attached tabular menu">
                            <div class="left menu ">
                            <!-- /.menu left -->
                            <!-- /.item -->
                            <a href="/dynweb/cms/admin/pages/" class="item"> Pages</a> <!-- /.page_list_content_title_link -->                     
                                <a href="/dynweb/cms/admin/pages/create/" class="item active"> New Pages</a> <!-- /.page_list_content_title_link -->
</div>
                                <div class="right menu "> 
    <div class="item active">
        <div class="ui transparent icon input">
            <input type="text" placeholder ="Search a page ..."> 
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
                            <!-- /.page_list_content_add -->
                            <!-- /.page_list_content_title -->
                            </div>
                      
                        <div class="ui bottom attached segment">
                            <form id="formPageCreate" class="ui form">
                               
                           <div class="required field">
                           <!-- /.field -->
                           
                           <!-- /.header -->
                                <label for = "formTitle"> Page title</label> <!-- /.page_list_wrap_form_title_label -->
                              
                                    <input type="text" name = "title" id="formTitle" required>
                                
                                </div>
                            <!-- /.page_list_wrap_form_title_p -->
                                <div class="required field">
                                <!-- /.field -->
                                    <label for = "formContent" > Content </label>
                                        <textarea name="content" id="formContent" required></textarea>
                                         <!-- /.page_list_wrap_form_content_label -->
                                <!-- /.page_list_wrap_form_content_p -->
                                </div>

                            <button id="createPage" class="ui submit green button" onclick="page.add()">
                                <i class="wrench icon"></i> <!-- /.put icon -->
                                Commit 
                            </button> <!-- /.page_list_form_wrap_form_button -->
                   
                            </form>
                            
                            <!-- /.page_list_wrap_form -->
                        </div>
                        <!-- /.page_list_wrap_form -->
                    </div>
                    <!-- /.page_list_wrap -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.page_list -->
        </main>
        <!-- /.main -->
       <!-- <script type="text/javascript" src="/dynweb/cms/admin/Assets/js/page/pageCreate.js"></script>--> 
<?php $this->theme->footer();?> 
<script type="text/javascript" src="/dynweb/cms/admin/Assets/js/page/page.js"> </script>
<script type="text/javascript">
$('#formContent').trumbowyg();
</script>



       
        