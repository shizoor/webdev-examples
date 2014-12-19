<html>
<body>
<?php
$pi = 3.14159265;

//  Code to draw clockface here

$size=200;

print_r("<svg height=\"500\" width=\"600\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">");

for ($i=0; $i<12; $i++)
{
$x = sin($pi*$i/6);
$y = cos($pi*$i/6);

$xnew=$x*0.9;
$ynew=$y*0.9;

$x = $x * 200 + 200;
$y = $y * 200 + 200;

$xnew=$xnew * 200 + 200;
$ynew=$ynew * 200 + 200;

//print_r($i . " " . $x . " " . $y . "<br>");

print_r("<line x1=\"" . $x . "\" y1=\"" . $y . "\" x2=\"" . $xnew . "\" y2=\"" . $ynew . "\"\nstyle=\"stroke:rgb(0,0,0);stroke-width:2\"/>");
}
print_r("<circle cx=\"200\" cy=\"200\" r=\"10\" stroke=\"black\" \n stroke-width=\"2\" fill=\"black\" />");

// Code to get the date and draw the hands here

$today = getdate();
$secondsangle=$pi-2*$today['seconds']*$pi/60;

$x=$size;
$y=$size;

$xnew=sin($secondsangle);
$ynew=cos($secondsangle);

$xnew=$xnew * $size + $size;
$ynew=$ynew * $size + $size;

print_r("<line x1=\"" . $x . "\" y1=\"" . $y . "\" x2=\"" . $xnew . "\" y2=\"" . $ynew . "\"\nstyle=\"stroke:rgb(0,0,0);stroke-width:1\"/>");

$minutesangle=$pi-2*$today['minutes']*$pi/60;

$x=$size;
$y=$size;

$xnew=sin($minutesangle);
$ynew=cos($minutesangle);

$xnew=$xnew * $size + $size;
$ynew=$ynew * $size + $size;

print_r("<line x1=\"" . $x . "\" y1=\"" . $y . "\" x2=\"" . $xnew . "\" y2=\"" . $ynew . "\"\nstyle=\"stroke:rgb(0,0,0);stroke-width:3\"/>");


$hoursangle=$pi-2*$today['hours']*$pi/12;

$x=$size;
$y=$size;

$xnew=sin($hoursangle);
$ynew=cos($hoursangle);

$xnew=$xnew * $size/3 + $size;
$ynew=$ynew * $size/3 + $size;

print_r("<line x1=\"" . $x . "\" y1=\"" . $y . "\" x2=\"" . $xnew . "\" y2=\"" . $ynew . "\"\nstyle=\"stroke:rgb(0,0,0);stroke-width:10\"/>");


print_r("</svg>");
?>

</body>
</html>
