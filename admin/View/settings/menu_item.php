
<!-- /.ui card -->
<div class="column " data-id="<?= $item['id'] ?>" data-position = "<?= $item['position'] ?>" >
<div class="ui card" >
       <div class="content">
           <span class="left floated meta">
           <i id="arrow" class="arrows alternate icon"></i> 
           </span>
           
    <div class="right floated meta"> <h4 class="ui header"> Good <?= $item['id'] ?> </h4>
  
        </div>
  </div>
  <div class="image">
    <img src="/dynweb/cms/admin/Assets/img/image.png" alt="img">
    
    <!-- /.meta -->
  </div>
  <div class="meta center aligned"> 
      Picture of Good <?php echo $item['id']; ?>
    </div>
  <div class="content">
     
     <!-- /.ui form -->
 <div class="ui two buttons">
   <a href="javascript:void(0)" class="ui positive button">
     <i class="edit icon"></i> <!-- /.edit icon -->
  Edit
</a> 
   <!-- /.ui positive button --> 
   
   <!-- /.ui form -->
   <div tabindex="-1" class="delete ui negative button" data-index="<?php echo $item['id']?>" onclick="settings.deleteMenuItem(<?php echo $item['id']?>)">
     Delete
</div> <!-- /.ui negative button -->
   
  </div>
 <!-- /.ui two buttons -->
  </div>
  
  <div class="extra content">
    
    <!-- /.ui form -->
    <div class="ui large transparent left icon input">
      
      <input type="text" onchange="settings.changeMenuItemName(<?php echo $item['id']?>)" data-name = "<?php echo $item['id'] ?>" value="<?= $item['name'] ?>">
      <i class="list link icon"></i>
    </div>
  </div>
  <div class="extra content">
  <div class="ui large transparent left icon input">
  <input class="link" type="text" onchange="settings.changeMenuItemLink(<?php echo $item['id'] ?>)" data-link = "<?php echo $item['id'] ?>" value="<?= $item['link'] ?>">  
              <i class="edit link icon"></i> <!-- /.edit link icon -->
  </div>
  </div>
 <!-- /.extra content -->
  <!-- /.extra content -->   
        </div> 
</div>
     
 