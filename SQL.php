<?php

$conn = mysqli_connect(
'localhost','root', '','employee'
);

if(isset($conn)){
    echo 'Start Conection';
}else{
    echo 'Fail';
}

?>