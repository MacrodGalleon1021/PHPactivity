<?php
// Question Output
echo "Question 13: What is the output of echo \$people[0]['first_name'];?<br><br>";

// Define the $people array as an array of associative arrays
$people = [
    [
        'first_name' => 'Mark Rodney',
        'last_name' => 'Galleon',
        'age' => 21
    ],
    [
        'first_name' => 'Jordan',
        'last_name' => 'Mesina',
        'age' => 23
    ]
];

// Output the first name of the first person in the array
echo "The first name of the first person is: " . $people[0]['first_name'];
?>
