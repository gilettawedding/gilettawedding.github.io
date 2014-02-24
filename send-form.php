<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "gilettawedding2014@.com";
 
    $email_subject = "Wedding RSVP";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Houston, we have a problem...";
 
        echo "There was an error submitting your RSVP form.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $adult1 = $_POST['adult1']; // required
 
    $adult2 = $_POST['adult2']; // not required
 
    $adult3 = $_POST['adult3']; // not required
 
    $child1 = $_POST['child1']; // not required
 
    $child2 = $_POST['child2']; // not required
 
    $child3 = $_POST['child3']; // not required
    
    $arrival_date = $_POST['arrival-date']; // required
    
    $arrival_time = $_POST['arrival-time']; // required
    
    $departure_date = $_POST['departure-date']; // required
    
    $departure_time = $_POST['departure-time']
    
    $shuttle = $_POST['shuttle']; // required
    
    $BBQ = $_POST['BBQ']; // not required
    
    $on_site_lodging = $_POST['on-site-lodging']; // not required
    
    $accomodation_preference = $_POST['accomodation-preference']; // not required
    
    $bed_in_bag = $_POST['bed-in-bag']; // not required
    
    $dietary_restrictions = $_POST['dietary-restrictions']; // not required
    
    $fav_song = $_POST['fav-song']; // not required
    
    
    
    
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Adult1 ".clean_string($adult1)."\n";
 
    $email_message .= "Adult2 ".clean_string($Adult2)."\n";
 
    $email_message .= "Adult3: ".clean_string($adult3)."\n";
 
    $email_message .= "Child1: ".clean_string($child1)."\n";
 
    $email_message .= "Child2: ".clean_string($child2)."\n";    
    
    $email_message .= "child3 ".clean_string($child3)."\n";
 
    $email_message .= "Arrival Date: ".clean_string($arrival_date)."\n";
 
    $email_message .= "Arrival Time: ".clean_string($arrival_time)."\n";
 
    $email_message .= "Departure Date: ".clean_string($departure_date)."\n";
 
    $email_message .= "Departure Time: ".clean_string($departure_time)."\n";    
    
    $email_message .= "Shuttle ".clean_string($shuttle)."\n";
 
    $email_message .= "BBQ: ".clean_string($BBQ)."\n";
 
    $email_message .= "What nights will you be staying with us: ".clean_string($on_site_lodging)."\n";
 
    $email_message .= "Accomodation Preference: ".clean_string($accomodation_preference)."\n";
 
    $email_message .= "Bed-in-a-bag: ".clean_string($bed_in_bag)."\n";    
    
    $email_message .= "Dietary Restrictions ".clean_string($dietary_restrictions)."\n";
 
    $email_message .= "Favorite Song: ".clean_string($fav_song)."\n";
  
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>