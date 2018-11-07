<!DOCTYPE html>
<html lang="eu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<style media="screen">
  div{
    border-style: dashed;
    border-width: thin;
    height: auto;
    padding: 20px;
    width: 400px;
  }
  h1{
    margin: 0;
    padding: 0;
  }
  table,td,th{
    padding: 5px 60px 10px 10px;
    border: solid;
    border-width: thin;
    border-collapse: collapse;
  }
  body{
    margin-left: 20px;
  }
</style>


<body>
  <div>
    <h1>Receipt</h1>
    <p>Customer Name: <?=$_GET["name"]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Payment Method: <?=$_GET["payment"]?></p>
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Cost</th>
      </tr>
      <tr>
        <td>Apple</td>
        <td><?=$_GET["apples"]?></td>
        <td>$<?php
          $c = (int)$_GET["apples"];
          $t = number_format($c*0.69,2);
          echo $t;
        ?></td>
      </tr>
      <tr>
        <td>Orange</td>
        <td><?=$_GET["oranges"]?></td>
        <td>$<?php
          $c = (int)$_GET["oranges"];
          $t = number_format($c*0.59,2);
          echo $t;
        ?></td>
      </tr>
      <tr>
        <td>Banana</td>
        <td><?=$_GET["bananas"]?></td>
        <td>$<?php
          $c = (int)$_GET["bananas"];
          $t = number_format($c*0.39,2);
          echo $t;
        ?></td>
      </tr>
      <tr>
        <td colspan="2">Total Cost</td>
        <td>$<?=$_GET["total"]?></td>
      </tr>
    </table>
  </div>
</body>
</html>
