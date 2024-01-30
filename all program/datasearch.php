<?php

$users = [
    ['id' => 1, 'name' => 'Ram', 'age' => 20],
    ['id' => 2, 'name' => 'Anand', 'age' => 25],
    ['id' => 3, 'name' => 'Riya', 'age' => 30]
];

function search($data, $criteria, $value) {
    $results = [];

    foreach ($data as $item) {
        if ($item[$criteria] == $value) {
            $results[] = $item;
        }
    }

    return $results;
}

$criteria = 'age';
$value = 20;

$results = search($users, $criteria, $value);

echo "Search Results for $criteria = $value: <br>";

if (!empty($results)) {
    foreach ($results as $result) {
        echo "ID: " . $result['id'] . ", Name: " . $result['name'] . ", Age: " . $result['age'] . "<br>";
    }
} else {
    echo "No results found.";
}
?>