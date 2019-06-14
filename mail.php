<? 
$wiadomosc=$_POST['wiadomosc'];
if (mail("tagu@tagu.pl", "temat", $wiadomosc))
{
echo "wkrótce się odezwiemy :) ";
}
else
{
echo "Upsss... coś nie tak...";
}
?> 