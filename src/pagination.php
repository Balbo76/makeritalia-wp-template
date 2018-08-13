<!-- pagination -->

    <nav aria-label="Page navigation example">
        <ul class="pagination">

            <?php
                global $wp_query;
                $big = 999999999;
                $links = paginate_links( array(
                    'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                    'format'  => '?paged=%#%',
                    'current' => max( 1, get_query_var( 'paged' ) ),
                    'total'   => $wp_query->max_num_pages,
                    'type' => 'array'
                ) );

                foreach ($links as $link){
                    echo '<li class="page-item">'.str_replace("page-numbers","page-link",$link).'</li>';
                }
             ?>

        </ul>
    </nav>

<!-- /pagination -->
