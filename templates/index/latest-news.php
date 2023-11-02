<?php

include 'lib/latest-news-cards.php';

?>

<section class="news"> <!-- Latest articles -->
    <div class="responsive-container">

        <div class="flex-container-for-heading-and-view-more-link">
            <h2 class="news__header">Latest News</h2>
            <a href="#" class="news__view-all-link news__view-all-link--wide-viewport">View All
                <svg class="icon">
                    <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
                </svg>
            </a>
        </div>

        <div class="news__flex-parent-container">

            <?php
            // Get the three most recent news posts from the database,
            // and create a responsive card for each one
            foreach (getNewsCardData() as $post) {
                echo makeCard($post);
            }
            ?>

        </div>

        <a href="#" class="news__view-all-link news__view-all-link--narrow-viewport">View All
            <svg class="icon">
                <use href="icons/symbol-defs.svg#icon-arrow-right"></use>
            </svg>
        </a>

    </div>
</section>