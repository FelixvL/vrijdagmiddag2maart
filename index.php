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


//brie
//gehakt
//gezond
//plofkipkerrie

function productenTonen($lijstProducten){
    foreach($lijstProducten as $product){
        echo zoekAfbeelding($product);
        echo "$product <br>";
    }
}
function allebroodjes(){
    $broodjes = ["Broodje Gezond","Broodje Bal","Broodje Brie","Broodje KipKerrie"];
    return $broodjes;
}
function zoekAfbeelding($broodje){
    switch($broodje){
//        case allebroodjes()[0]:
        case "Broodje Gezond":
            return "<img src=afbeelding/gezond.jpg width=200><br/>";
            break;
        case allebroodjes()[1]:
            return "<img src=afbeelding/gehakt.jpg width=200><br/>";
            break;
        case allebroodjes()[2]:
            return "<img src=afbeelding/brie.jpg width=200><br/>";
            break;
        case allebroodjes()[3]:
            return "<img src=afbeelding/plofkipkerrie.jpg width=200><br/>";
            break;
    }
}