<script>
 function go(){
    var voorbeeld = document.getElementById("deid").value;
//    alert(voorbeeld);
    document.location = "index.php?input="+voorbeeld;
}
</script>

<?php
if(isset($_GET['input'])){
    echo ">>".$_GET['input'];
}
$voornaam = "ruud";
echo "<input type=text id=deid ><input type=button onclick=go()>";