<?php
$q = $_GET['q'];

$xml = new DOMDocument();
$xml->load("emp.xml");

$emps = $xml->getElementsByTagName("emp");

foreach ($emps as $emp) {
    $ename = $emp->getElementsByTagName("ename")->item(0)->nodeValue;
    if ($ename == $q) {
        $eno = $emp->getElementsByTagName("eno")->item(0)->nodeValue;
        $sal = $emp->getElementsByTagName("salary")->item(0)->nodeValue;
        echo "Eno: $eno<br>";
        echo "Ename: $ename<br>";
        echo "Salary: $sal<br>";
        break;
    }
}
?>
