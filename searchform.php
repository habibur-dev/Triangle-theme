<form role="form" action="<?php echo home_url('/'); ?>">
    <input type="search" class="search-form" autocomplete="off" placeholder="Type.." value="<?php get_search_query(); ?>" name="s">
    <button type="button" class="btn btn-sm btn-primary">
        Search
    </button>   
</form>