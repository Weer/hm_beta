<?php
$mrk_cnt = 0;

require '../geocodedmap-master/functions/queries/query_top_ten.php';

while 
    
($obj = $stmt->fetch_object()) {
    
$fbname[$mrk_cnt] = $obj->fb_name;
    
$lat[$mrk_cnt] = $obj->fb_lat;
    
$lng[$mrk_cnt] = $obj->fb_lng;
    
$street[$mrk_cnt] = $obj->fb_street; 
    
$talking_about[$mrk_cnt] = $obj->fb_talking_about;
    
$date[$mrk_cnt] = $obj->fb_date; 
    
$mrk_cnt++;
    
}

?>