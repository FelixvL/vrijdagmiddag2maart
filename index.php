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
echo "<input type=text id=deid ><input type=button onclick=go()>";
echo "<br><br>";
$debroodjes = allebroodjes();
productenTonen($debroodjes);

function productenTonen($lijstProducten){
    foreach($lijstProducten as $product){
        echo "$product <br>";
    }
}
function allebroodjes(){
    $broodjes = ["Broodje Gezond","Broodje Bal","Broodje Brie","Broodje KipKerrie"];
    return $broodjes;
}