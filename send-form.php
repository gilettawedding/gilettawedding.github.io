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
 
    if(!isset($_POST['adult1']) ||
 
        !isset($_POST['arrival-date']) ||
 
        !isset($_POST['arrival-time']) ||
 
        !isset($_POST['departure-date']) ||
 
        !isset($_POST['departure-time']) ||
        
        !isset($_POST['accomodation-prefference'])) {
 
        died('Uh oh, there are required questions that have not been answered');       
 
    }
 
     
 
    $adult1 = $_POST['adult1']; // required
 
    $adult2 = $_POST['adult2']; // not required
 
    $adult3 = $_POST['adult3']; // not required
 
    $child1 = $_POST['child1']; // not required
 
    $child2 = $_POST['child2']; // not required
 
    $child3 = $_POST['child3']; // not required
    
    $arrival_date = $_POST['arrival-date']; // required
    
    $arrival_time = $_POST['arrival-time']; // required
    
    $arrival_comments = $_POST['arrival-comments']; // not required
    
    $departure_date = $_POST['departure-date']; // required
    
    $departure_time = $_POST['departure-time'] // required
    
    $departure_comments = $_Post['departure-comments'] // not required
    
    $shuttle = $_POST['shuttle']; // not required
    
    $BBQ = $_POST['BBQ']; // not required
    
    $on_site_lodging = $_POST['on-site-lodging']; // not required
    
    $accomodation_preference = $_POST['accomodation-preference']; // required
    
    $accomosation_comments = $_POST['accomodation-comments']; // not required
    
    $bed_in_bag = $_POST['bed-in-bag']; // not required
    
    $dietary_restrictions = $_POST['dietary-restrictions']; // not required
    
    $fav_song = $_POST['fav-song']; // not required
    
    $final_comments = $_POST['final-comments']; // not required
    
    
    
    
 
 
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
    
    $email_message .= "Comments about Arrival: ".clean_string($arrival_comments)."\n"
 
    $email_message .= "Departure Date: ".clean_string($departure_date)."\n";
 
    $email_message .= "Departure Time: ".clean_string($departure_time)."\n";    
    
    $email_message .= "Shuttle ".clean_string($shuttle)."\n";
 
    $email_message .= "BBQ: ".clean_string($BBQ)."\n";
 
    $email_message .= "What nights will you be staying with us: ".clean_string($on_site_lodging)."\n";
 
    $email_message .= "Accomodation Preference: ".clean_string($accomodation_preference)."\n";
 
    $email_message .= "Bed-in-a-bag: ".clean_string($bed_in_bag)."\n";    
    
    $email_message .= "Dietary Restrictions ".clean_string($dietary_restrictions)."\n";
 
    $email_message .= "Favorite Song: ".clean_string($fav_song)."\n";
  
    $email_message .= "Final comments: ".clean_string($final_comments)."\n"
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for RSVP-ing!  We will send your room assignment and an itemized invoice as soon as we've processed everything.
 
 
 
<?php
 
}
 
?>