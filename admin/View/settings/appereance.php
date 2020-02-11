
  <div class="left menu">
  <!-- /.left menu -->
        <a class="item active" href="/dynweb/cms/admin/settings/appearance/menus/">
            List menu
        </a>
  <!-- /.ui selection dropdown -->
       
         <?php if ($menuId === null): ?>
            <a href="javascript:void(0)" class="item">
            New menu
            </a> <!-- /.item -->
         <?php endif; ?>
        <!-- /.menu -->
        </div>


<div class="right menu">
    <div class="item active">
      <div class="ui transparent icon input">
        <input type="text" placeholder="Search menu...">
        <i class="search link icon"></i>
      </div>
    </div>
  </div>