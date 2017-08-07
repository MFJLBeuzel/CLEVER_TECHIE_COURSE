<?php
// 1)Create cURL resource
$curl = curl_init();

$search_string = "movies 2017";
$url = "https://www.amazon.co.uk/s/field-keywords=$search_string";
// 2)Set cURL options
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//https://images-eu.ssl-images-amazon.com/images/I/51oDy0hS+FL._AC_US218_.jpg

// 3)Run cURL (execute https request)
$result = curl_exec($curl);

preg_match_all("!https://images-eu.ssl-images-amazon.com/images/I/[^\s]*?._AC_US218_.jpg!", $result, $matches);

$images = array_values(array_unique($matches [0]));

for ($i = 0; $i < count($images); $i++) {
    echo "<div style='float: left; margin: 10 0 0 0; '>";
    echo "<img src='$images[$i]' /><br />";
    echo "</div>";
}

// 4)Close cURL resource
curl_close($curl);
