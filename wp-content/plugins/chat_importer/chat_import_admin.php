<?php
<div class="wrap">
    <?php    echo "<h2>" . __( 'Chat Product Display Options', 'chaimp_trdom' ) . "</h2>"; ?>
     
    <form name="chaimp_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="chaimp_hidden" value="Y">
        <?php    echo "<h4>" . __( 'Chat Database Settings', 'chaimp_trdom' ) . "</h4>"; ?>
        <p><?php _e("Database host: " ); ?><input type="text" name="chaimp_dbhost" value="<?php echo $dbhost; ?>" size="20"><?php _e(" ex: localhost" ); ?></p>
        <p><?php _e("Database name: " ); ?><input type="text" name="chaimp_dbname" value="<?php echo $dbname; ?>" size="20"><?php _e(" ex: Chat_shop" ); ?></p>
        <p><?php _e("Database user: " ); ?><input type="text" name="chaimp_dbuser" value="<?php echo $dbuser; ?>" size="20"><?php _e(" ex: root" ); ?></p>
        <p><?php _e("Database password: " ); ?><input type="text" name="chaimp_dbpwd" value="<?php echo $dbpwd; ?>" size="20"><?php _e(" ex: secretpassword" ); ?></p>
        <hr />
        <?php    echo "<h4>" . __( 'Chat Store Settings', 'chaimp_trdom' ) . "</h4>"; ?>
        <p><?php _e("Store URL: " ); ?><input type="text" name="chaimp_store_url" value="<?php echo $store_url; ?>" size="20"><?php _e(" ex: http://www.yourstore.com/" ); ?></p>
        <p><?php _e("Product image folder: " ); ?><input type="text" name="chaimp_prod_img_folder" value="<?php echo $prod_img_folder; ?>" size="20"><?php _e(" ex: http://www.yourstore.com/images/" ); ?></p>
         
     
        <p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Update Options', 'chaimp_trdom' ) ?>" />
        </p>
    </form>
</div>
?>