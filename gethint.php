<?php
// Array of courses
$courses = array(
    "Computer Science",
    "Commerce",
    "Communication Engineering",
    "Civil Engineering",
    "Cyber Security",
    "Chemical Engineering",
    "Culinary Arts"
);

// Get the query string from URL
$q = isset($_GET["q"]) ? $_GET["q"] : "";

// Initialize empty hint
$hint = "";

// Lookup all courses if query is not empty
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($courses as $course) {
        if (stristr($q, substr($course, 0, $len))) {
            if ($hint === "") {
                $hint = $course;
            } else {
                $hint .= " , " . $course;
            }
        }
    }
}

// Output "no suggestion" if no hint found
echo $hint === "" ? "no suggestion" : $hint;
?>