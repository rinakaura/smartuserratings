<?php 
$id = (int) $_GET['id']; 

require 'connect.inc.php'; 

mysql_select_db("hedgevent"); 

$result = mysql_query('SELECT id, event, company, description, location, address, suite, city, state, zip, country, sdate, edate, time_from, time_until, contactname, email, phone, website  FROM calendar_event WHERE id = '$id); 

if($row = mysql_fetch_array($result)) 
  if($query_row = mysql_fetch_assoc($result)){ 
       
      $id= $query_row['id']; 
    $event= $query_row['event']; 
    $company= $query_row['company']; 
    $description= $query_row['description']; 
    $location= $query_row['location']; 
    $address= $query_row['address']; 
    $suite= $query_row['suite']; 
    $city= $query_row['city'];               
    $state= $query_row['state']; 
    $zip= $query_row['zip']; 
     $zip= $query_row['country']; 
    $sdate= $query_row['sdate']; 
    $edate= $query_row['edate']; 
    $timef= $query_row['time_from']; 
    $timeu= $query_row['time_until']; 
    $contact= $query_row['contactname']; 
    $email= $query_row['email'];               
    $phone= $query_row['phone']; 
    $website= $query_row['website']; 
 } 
?>         
    
        
<div id="container"> 
    <div id="listing">     

    <h2><div class="event"><?php echo $event; ?></h2><br> 
<table width="500" border="0" cellpadding="5"> 
  <tr> 
    <td>Calendar</td> 
    <td>Outlook | Google | Apple iCal | Yahoo | MSN</td> 
  </tr> 
  <tr> 
    <td>Share</td> 
    <td>Linkedin | Facebook | Google+ | Twitter | Stocktwits</td> 
  </tr> 
  <tr> 
    <td>Venue</td> 
    <td><?php echo $location; ?></td> 
  </tr> 
  <tr> 
    <td>Location</td> 
    <td><?php echo $address.' - '.$city.' '.$state.' '.$zip'; ?></td> 
  </tr> 
   <tr> 
    <td>Rating</td> 
    <td>*****</td> 
  </tr> 
 </table> 
<br> 
<p>Details:</p> <br> 
<p><?php echo $description; ?> 
</p>