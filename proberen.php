<script>

    function kijken(jojo){
        alert(jojo);
        document.location = "proberen.php?naam="+jojo;
    }

</script>

<?php
$var1 = "piet";
$var2 = "kees";
echo $_GET['naam'];

echo "<input type=button onclick=kijken('".$var1."')>";
echo "<input type=button onclick=kijken('".$var2."')>";
