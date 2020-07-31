<?php

$server = "localhost";
$username = "root";
$password ="";
$database ="project";    

$con = mysqli_connect($server,$username,$password,$database);

if($con){
?>
<script>
alert("Connection Succesful");
</script>
<?php

}else{
    ?>
<script>
alert("No Connection ");
</script>
<?php
}
?>