<?php

function addMessageToDatabase(array $message): bool
{
    // Get `$databaseConnection` from `lib/database-connection.php`
    include 'database-connection.php';

    try {
        $pdoStatement = $databaseConnection->prepare('
        INSERT INTO Messages (name, email, company, phone, message, agree_to_marketing)
        VALUES (:name, :email, :company, :phone, :message, :marketing)
        ');

        $pdoStatement->bindValue(':name', $message['name'], PDO::PARAM_STR);
        $pdoStatement->bindValue(':email', $message['email'], PDO::PARAM_STR);
        // If the company name is an empty string, set it to PHP's `null` instead, 
        // so SQL will save it as it's own `NULL` data type.
        $pdoStatement->bindValue(
            ':company',
            $message['company'] === '' ? null : $message['company'],
            PDO::PARAM_STR
        );
        $pdoStatement->bindValue(':phone', $message['phone'], PDO::PARAM_STR);
        $pdoStatement->bindValue(':message', $message['message'], PDO::PARAM_STR);
        // PDO should cast a boolean to 1 or 0, which is what the database expects
        $pdoStatement->bindValue(':marketing', $message['marketing'], PDO::PARAM_INT);

        // Execute the SQL command 
        $pdoStatement->execute();

        // If successful, return true so the user gets a success message on the front end
        return true;
    } catch (Exception $exception) {
        echo "Database query failed: " . $exception->getMessage();
        exit;
    }
}
