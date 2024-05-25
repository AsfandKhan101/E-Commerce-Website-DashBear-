<?php
// Define the path to your JSON file
$jsonFilePath = '/home/course/u24/public_html/submissions/submission04/resources/quotes_mongo.json';

// Check if the JSON file exists
if (!file_exists($jsonFilePath)) {
    die('Error: JSON file not found.');
}

// Read the JSON file and decode its contents
$quotesJson = file_get_contents($jsonFilePath);
$quotesArray = json_decode($quotesJson, true);

// Check if JSON decoding was successful
if ($quotesArray === null) {
    die('Error: Unable to decode JSON file.');
}

// Get a random quote
if (!empty($quotesArray)) {
    $randomQuote = $quotesArray[array_rand($quotesArray)];
    echo "Today's advisory quote, from {$randomQuote['author']}: {$randomQuote['quote']}";
} else {
    echo 'Error: No quotes found in the JSON file.';
}
?>
