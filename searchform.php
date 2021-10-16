<form class="d-flex" action="<?= home_url( '/' ) ?>" method="get">
    <input class="form-control me-2" type="text" name="s" id="Search" placeholder="Search" aria-label="Search" value="<?php the_search_query( ) ?>">
    <button class="btn btn-outline-light" type="submit">Search</button>
</form>