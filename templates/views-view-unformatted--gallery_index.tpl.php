<div id="views-unformatted-<?php print $id ?>" class="<?php print $classes ?> ">
	<?php  foreach ($rows as $key => $row): ?>
      <div class="col-md-4">
	 			 <?php print $fields["field_image"]->content; ?>
		  </div>
		
		  <div class="col-md-8">
         <?php print $fields["title"]->content; ?>
      </div>
	  
		
             
	<?php endforeach ?>
        
</div>
