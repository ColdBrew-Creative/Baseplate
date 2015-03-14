<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">

    <div>

        <label for="s" class="screen-reader-text"><?php _e('Search for:','bonestheme'); ?></label>

        <input type="search" id="s" name="s" value="<?php echo esc_attr(get_search_query()); ?>" />



        <button type="submit" id="searchsubmit" ><?php _e('Search','bonestheme'); ?></button>

    </div>

</form>
