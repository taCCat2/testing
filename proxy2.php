<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    // Basic URL validation
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Use cURL to fetch the content
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Skip SSL verification for simplicity
        $content = curl_exec($ch);
        curl_close($ch);

        // Output the fetched content
        header("Content-Type: text/html");
        echo $content;
    } else {
        echo 'Invalid URL.';
    }
} else {
    echo 'No URL specified.';
}
?>
