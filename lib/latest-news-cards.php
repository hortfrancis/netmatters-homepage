<?php

$authorsToUrls = [
    'netmatters ltd' => 'images/netmatters-avatar.png',
];

function getAuthorImageUrl($authorName)
{
    global $authorsToUrls;
    return $authorsToUrls[strtolower($authorName)];
}

function getNewsCardData()
{
    // Get `$databaseConnection` from `lib/database-connection.php`
    include 'database-connection.php';

    try {
        // Get the 3 most recent posts from the datatbase
        $pdoStatement = $databaseConnection->query('
        SELECT * FROM News 
        ORDER BY date DESC 
        LIMIT 3
        ');
        // Returns an array of associative arrays
        return $pdoStatement->fetchAll();
    } catch (Exception $exception) {
        echo "Database query failed: " . $exception->getMessage();
        exit;
    }
}

// Service categories are saved as strings separated by a space in the database,
// so need to find the appropriate CSS class modifier to add the correct colour
function getClassModifierFromPostCategory($postCategory)
{
    // In case the category is not saved in lower case
    $postCategory = strtolower($postCategory);

    if ($postCategory === 'bespoke software') {
        return '--bespoke-software';
    } elseif ($postCategory === 'it support') {
        return '--it-support';
    } elseif ($postCategory === 'digital marketing') {
        return '--digital-marketing';
    } elseif ($postCategory === 'telecoms services') {
        return '--telecoms-services';
    } elseif ($postCategory === 'web design') {
        return '--web-design';
    } elseif ($postCategory === 'cyber security') {
        return '--cyber-security';
    } elseif ($postCategory === 'developer course') {
        return '--developer-course';
    }
}

function makeCard($post)
{
    $categoryClassModifier = getClassModifierFromPostCategory($post['service_category']);
    $authorImageUrl = getAuthorImageUrl($post['author']);
    $date = DateTime::createFromFormat('Y-m-d', $post['date']);

    // Create the card HTML markup, using the data from the database
    return "
        <section class='news__card'>
        <a href='#'>

        <img src='"
        . htmlspecialchars($post['image_url'])
        . "' alt='' class='news__card-image'>"

        . "<div class='news__card-text-container'>"

        . "<h3 class='news__card-title news__card-title" . $categoryClassModifier . "'>"
        . htmlspecialchars($post['title']) . "</h3>"

        . "<span class='news__card-read-length'>" . htmlspecialchars($post['read_duration']) . " MINUTE READ</span>"

        . "<p class='news__card-summary'>" . htmlspecialchars($post['content']) . "</p>"

        . "<span class='news__card-read-more-button news__card-read-more-button" . $categoryClassModifier . "'>Read More</span>"

        . "<div class='news__card-author-container'>"

        . "<img src='" . $authorImageUrl . "' alt='' class='news__card-avatar'>"

        . "<div class='news__card-author-text-container'>"

        . "<span class='news__card-posted-by'>Posted by " . htmlspecialchars(ucwords($post['author'])) . "</span>"

        . "<time datetime='" . $date->format('Y-m-d') . " class='news__card-posted-date'>" . $date->format('jS F Y') . "</time>"

        . "</div>"
        .  "</div>"
        . "</div>"
        . "</a>"

        . "<a href='#' class='news__card-category-label news__card-category-label" . $categoryClassModifier . "'>"
        . htmlspecialchars(ucwords($post['label_category'])) . "</a>"

        . "</section>";
}
