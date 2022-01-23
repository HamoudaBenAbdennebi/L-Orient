<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        if(isset($_GET['name']) and isset($_GET['adr']) and isset($_GET['menu']) and isset($_GET['qt'])){
            $name = $_GET['name'];
            $adr = $_GET['adr'];
            $menu = $_GET['menu'];
            $qt = $_GET['qt'];
        }
        else{
            $name = "";
            $adr = "";
            $menu = "";
            $qt ="";
        }
        if($menu == "Couscous")
            $prix = 3.500;
        else if($menu == "Spaghetti")
            $prix = 4.500;
        else if($menu == "Polonaise")
            $prix = 6.900;
        $idc = mysql_connect("localhost","root","");
        $c = mysql_select_db('restaurant');
        $req = "insert into `commande` ( `Num` , `Nompre` , `Adr` , `Plat` , `Qte` ) values ('', '$name', '$adr', '$menu', '$qt')";
        $resultat = mysql_query($req);
    ?>
    <p>nom :<? echo $name?></p>
    <p>adresse :<? echo $adr?></p>



    <table border='1'>
        <tr>
            <th>produit</th>
            <th>prix unitaire</th>
            <th>quantite</th>
            <th>montant a payer</th>
        </tr>
        <tr>
            <td><? echo $menu?></td>
            <td><? echo $prix ?></td>
            <td><? echo $qt?></td>
            <td><? echo($prix * $qt) ?></td>
        </tr>
        
    </table>
</body>
</html>