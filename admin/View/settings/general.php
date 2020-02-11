<?php use Engine\Core\Template\Theme; $this->theme->header()?>

      <main class="main">
            <section class="ui vertical stripe">
                <div class="ui container">
                    <div class="ui attached segment">
                        <h3 class="ui horizontal header divider"> <i class="setting loading blue icon"></i> </h3>
                        <!-- /.ui header horizontal divider -->
                        <div class="ui top attached tabular menu">
                            <?php Theme::block('settings/tabs') ?>
                            <!-- /.setting_list_content_title -->
                        </div>
                        <div class="ui bottom attached segment">
                            <form id="formSetting" class="ui form">
                            <?php foreach($settings as $setting):?>
                                <?php if($setting['key_field'] == "language"): ?>
                           <div class="field required">
                           <!-- /.field -->
                            <label><?= $setting['name'] ?></label> <!-- /.setting_list_wrap_name -->
                           
                            <!-- /. -->
                            <select id="<?= $setting['key_field'] ?>" name="<?= $setting['key_field'] ?>" value = "<?= $setting['value'] ?>">
                                    <?php foreach ($languages as $language): ?>

                               <option value="<?=$language->info->key ?>"> <?= $language->info->title ?> </option>

                                <?php endforeach; ?>
                            </select>
                            </div>
                            

                            <?php else: ?>

                                <div class="field required">
                                <!-- /.field -->
                                <label for="formNameSite" class="setting_list_wrap_label"><?= $setting['name'] ?></label> <!-- /.setting_list_wrap_name_site_label -->
                                <input type="text"  id ="<?= $setting['key_field'] ?>" name="<?= $setting['key_field'] ?>" value = "<?= $setting['value'] ?>"class="setting_list_wrap_input">
                            <!-- /.setting_list_wrap_name_site_p -->
                            </div>
                            <?php endif; ?>

                            <?php endforeach; ?>
                           
                            
                           
                            <!-- /.setting_list_wrap_select_p -->
                               
                                <!-- /.ui two column stackable center aligned grid -->
                                <!-- /.ui attached bottom -->
                                <div class="ui divider clearing"></div>
                                <!-- /.ui divider horizontal -->
                            <button id = "settingUpdate" class="ui large primary button " onclick="settings.update()" >
                                 <i class="fly icon"></i> <!-- /.change icon -->
                            Change 
                            </button> <!-- /.setting_list_form_wrap_form_button -->
                           <!-- /.ui indicating progress -->
                            <!-- /.ui segment info message -->
                       
                            </form>
                          
                          <!-- /.ui info message -->
                            <!-- /.setting_list_wrap_form -->
                        </div>
                        <!-- /.setting_list_wrap_form -->
                    </div>
                    
                    <!-- /.setting_list_wrap -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.setting_list -->
        </main>
        <!-- /.main -->
        <!--  -->
<?php $this->theme->footer()?>
<script type="text/javascript" src="/dynweb/cms/admin/Assets/js/setting/setting.js"></script>
<script> 
$('.ui.pointing.dropdown.link.item').dropdown(); 

</script>