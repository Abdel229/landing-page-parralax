<?php
session_start();
if (!isset($_SESSION) || empty($_SESSION)) {
    header('Location:index.php');
}

require '../controller/get_client.php';
$clients = get_client();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body{
            width: 90vw;
            margin-inline: auto;
        }
        .retour {
	box-shadow:inset 0px 0px 24px -24px #e184f3;
	background:linear-gradient(to bottom, #c123de 5%, #a20dbd 100%);
	background-color:#c123de;
	border-radius:6px;
	border:1px solid #a511c0;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Impact;
	font-size:26px;
	font-weight:bold;
	padding:12px 31px;
	text-decoration:none;
	text-shadow:-2px -6px 0px #9b14b3;
}
.retour:hover {
	background:linear-gradient(to bottom, #a20dbd 5%, #c123de 100%);
	background-color:#a20dbd;
}
.retour:active {
	position:relative;
	top:1px;
}

        table.blueTable {
  border: 0px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 8px 8px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
    </style>
</head>

<body>
<a href="../index.php" class="retour">Accueil</a>
    <table class="blueTable">
        
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Nationnalté</th>
                <th>E-mail</th>
                <th>Numéro de téléphone</th>
                <th>Pays et ville</th>
                <th>Nom de l'entreprise</th>
                <th>Effectif de l'entreprise</th>
                <th>Secteur d'activité</th>
                <th>Date de création de l'entreprise</th>
                <th>Inscrit le</th>
            </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                    </td>
                </tr>
            </tfoot>
            <tbody>
            <?php 
            
            $compte=0;
            foreach ($clients as $client) : ?>
                <tr>
                <td><?= ++$compte; ?></td>
                <td><?= $client['nom']; ?></td>
                <td><?= $client['birth_day']; ?></td>
                <td><?= $client['countries']; ?></td>
                <td><?= $client['mail']; ?></td>
                <td><?= $client['phone_number']; ?></td>
                <td><?= $client['city']; ?></td>
                <td><?= $client['business_name']; ?></td>
                <td><?= $client['business_number']; ?></td>
                <td><?= $client['activity_area']; ?></td>
                <td><?= $client['business_date']; ?></td>
                <td><?= $client['create_time']; ?></td>
                </tr>
            <?php endforeach; ?> 
           
            </tbody>
            </body>
        <!-- 
           -->
    </table>
</body>

</html>