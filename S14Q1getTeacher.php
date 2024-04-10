<?php
$q = $_GET['q'];

$xml = new DOMDocument();
$xml->load("teacher.xml");

$teachers = $xml->getElementsByTagName("teacher");

foreach ($teachers as $teacher) {
    $tname = $teacher->getElementsByTagName("tname")->item(0)->nodeValue;
    if ($tname == $q) {
        $tno = $teacher->getElementsByTagName("tno")->item(0)->nodeValue;
        $qualification = $teacher->getElementsByTagName("qualification")->item(0)->nodeValue;
        $salary = $teacher->getElementsByTagName("salary")->item(0)->nodeValue;
        echo "Teacher Number: $tno<br>";
        echo "Name: $tname<br>";
        echo "Qualification: $qualification<br>";
        echo "Salary: $salary<br>";
        break;
    }
}
?>
