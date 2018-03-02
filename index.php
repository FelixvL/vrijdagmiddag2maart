<select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>



<script>
 function go(){
    var voorbeeld = document.getElementById("deid").value;
//    alert(voorbeeld);
    document.location = "index.php?input="+voorbeeld;
}
</script>
<?php
$debroodjes = allebroodjes();

if(isset($_GET['input'])){
    echo ">>".$_GET['input'];
}
bestelMenu($debroodjes);
//echo "<input type=text id=deid >";
echo "<input type=button onclick=go() value=bestellen>";
echo "<br><br>";
productenTonen($debroodjes);

function bestelMenu($alledingen){
    echo "<select id=deid>";
    foreach($alledingen as $ding){
        echo "<option value=\"$ding\">$ding</option>";
    }
    echo "</select>";
}

function productenTonen($lijstProducten){
    foreach($lijstProducten as $product){
        echo "<img src=afbeelding/".zoekAfbeelding($product)." width=200><br/>";
        echo "$product <br>";
    }
}
function allebroodjes(){
    $broodjes = ["Broodje Gezond","Broodje Bal","Broodje Brie","Broodje PlofKipKerrie"];
    return $broodjes;
}
function zoekAfbeelding($broodje){
    switch($broodje){
//        case allebroodjes()[0]:
        case "Broodje Gezond":
            return "gezond.jpg";
            break;
        case allebroodjes()[1]:
            return "gehakt.jpg";
            break;
        case allebroodjes()[2]:
            return "brie.jpg";
            break;
        case allebroodjes()[3]:
            return "plofkipkerrie.jpg";
            break;
    }
}