<?php
//access the global array called $_POST to get the values from the text fields 
$shirts = $_POST["TShirt"];
$jeans = $_POST["Jeans"];
$caps=$_POST["baseballcap"];
$shipping=$_POST["shipping"];
$password=$_POST["password"];
echo"<head>";
              $cssFile = "style.css";
              echo "<link rel='stylesheet' href='" . $cssFile . "'>";
echo "</head>";
echo"<div>";
        echo"<h1> Hello user! Your password is " . $password . "</h1>";
echo"</div>";
echo "<table>";
echo "<tr>";
        echo "<td>Tshirt: " . $shirts . "</td>";
        echo "<td>Cost per Item: $9.00 </td>";
        echo "<td>Total: $ " . $shirts*(9) . "</td>";
echo"</tr>";
echo "<tr>";
        echo "<td>Jeans: " . $jeans . "</td>";
        echo "<td>Cost per Item: $20.00 </td>";
        echo "<td>Total: $ " . $jeans*(20) . "</td>";
echo"</tr>";
echo "<tr>";
        echo "<td>Caps: " . $caps . "</td>";
        echo "<td>Cost per Item: $7.00 </td>";
        echo "<td>Total: $ " . $caps*(7) . "</td>";
echo"</tr>";
if($shipping==0)
{
    echo "<tr>";
        echo "<td>Shipping Type:Free  </td>";
        echo "<td></td>";
        echo "<td>Cost: $  " . $shipping . "<td>";
    echo"</tr>";
}
if($shipping==50)
{
    echo "<tr>";
        echo "<td>Shipping Type:Overnight  </td>";
        echo "<td></td>";
        echo "<td>Cost: $  " . $shipping . "<td>";
    echo"</tr>";
}
if($shipping==5)
{
    echo "<tr>";
        echo "<td>Shipping Type:Three Day  </td>";
        echo "<td></td>";
        echo "<td>Cost: $  " . $shipping . "<td>";
      echo"</tr>";
}
echo"<tr>";
        echo"<td>Total Cost: $ " .($shipping+($caps*7)+($jeans*20)+($shirts*9)) . "<td>";
echo"</table>"
?>
