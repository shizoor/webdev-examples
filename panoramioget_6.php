<!DOCTYPE html>
<?php 
$feedurl="http://www.panoramio.com/map/get_panoramas.php?order=popularity&set=3547822&from=0&to=20&minx=-180&miny=-90&maxx=180&maxy=90&size=small";
$jsonfeed = file_get_contents($feedurl);
/*echo $jsonfeed;*/
/*echo "<hr> and now decoded : <br>";*/
$decodedjsonfeed = json_decode($jsonfeed);
/*var_dump ($decodedjsonfeed);*/
/*echo "<hr>";*/

/*print var_dump($decodedjsonfeed->photos);*/

/*echo "<hr>";*/

foreach($decodedjsonfeed->photos as $oPhoto)
{
/*echo "From Panoramio Album <br>";*/
    printf(
        '<h4>%s</h4><a href="%s">
        <img src="%s" /></a><br>
	 %s
        <p>Image taken by <a href="%s" target="_blank">%s</a> on %s</p><br><hr><br>',
        $oPhoto->photo_title,
	$oPhoto->photo_url,
        $oPhoto->photo_file_url,
        $oPhoto->photo_title,
        $oPhoto->owner_url,
        $oPhoto->owner_name,
        $oPhoto->upload_date
    );
}


?>

</html>
