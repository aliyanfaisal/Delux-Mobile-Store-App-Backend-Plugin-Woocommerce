<h2>Homepage Settings: </h2>

<?php

	if(isset($_POST["save"])){

    global $wpdb;
    $form= $_POST;
    unset($form['save']);
    $table= $wpdb->prefix."dma_settings";
    
   foreach($form as $key=>$value){
      if($value!=""){
        
        $value= (is_array($value)) ? serialize($value): $value;
     
        $data= $wpdb->insert(
          $table,
          [	
            "meta_key"=>$key,
          	"meta_value"=>$value,
			  "screen_name"=>"homepage"
          ]
        );
		  
		
				?>
					<div class="notice notice-success is-dismissible">
						<p><?php _e( 'Settings Updated!', 'sample-text-domain' ); ?></p>
					</div>
				<?php

      }
   }
  }

?>


<form method="post" action="">
  
  <table class="form-table" role="presentation">
              <tbody>
                <tr >
                  <th scope="row"><label for="blogname">Homepage Top Banner:</label></th>
                  <td>
                    <input type="file" class="regular-text components-select-control__input" name="top_banner">
                  </td>
                </tr>

                <tr>
                  <th scope="row">
                    <label for="blogdescription">Select Two Categories: ( Show 2 category products )</label>
                  </th>
                  <td>
                 <?php

                   $args = array(
                               'taxonomy' => 'product_cat',
                               'orderby' => 'name',
                               'order'   => 'ASC'
                           );

                   $cats = get_categories($args);
                   foreach($cats as $cat) {
                ?>
                    <?php // echo get_category_link( $cat->term_id ) ?>
                    <input type="checkbox" name="top_cats[]" value="<?php echo $cat->term_id; ?>">
                     <?php echo $cat->name; ?>
                <?php
                   }?>
                  </td>
                </tr>

                <tr>
                  <td style="display:flex; justify-content:flex-start">
                     <div id="publishing-action">
                        <input type="submit" name="save" id="submit" class="button button-primary button-large" value="Save Changes" /><span class="spinner"></span>
                      </div>
                  </td>
                </tr>
  </table>
</form>
