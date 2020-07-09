<?php
$questions= $_REQUEST['questions'];
$answers = $_REQUEST['answers'];

$con = mysqli_connect("localhost","root","","php_questions");
$sql = "INSERT INTO `q_and_a`( `questions`, `answers`) VALUES ('$questions','$answers')";
$res =mysqli_query($con,$sql);

while($res){
    echo '
            <script>
                alert("added);
            </script>
            
    ';
}