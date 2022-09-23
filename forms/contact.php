<?php

  require_once '../vendor/autoload.php';
  use \Mailjet\Resources;

  // $email_from = 'info@spearcapitaladvisory.com';
  $email_from = 'dredayduncan@gmail.com';
  
  $apikey = '481d5e99d97941e735e31adcef9012bf';
  $apisecret = '62c8fed91ceb9f9a9bda464ed920166e';
  
  $mj = new \Mailjet\Client($apikey, $apisecret,true,['version' => 'v3.1']);

  /* Checking if the form has been submitted and if the email field is empty. If it is empty, it
  redirects to the index page with a query string of newsletter=false. If it is not empty, it sets the
  email to the visitor_email variable, sets the subject, body and headers. It then sends the email and
  redirects to the index page with a query string of newsletter=true. */
  if (isset($_POST['newsEmail'])){
    
   
    /* Checking if the email field is empty. If it is, it redirects to the index page with a query
    string of newsletter=false. */
    if (empty($_POST['newsEmail'])){
      header("location: ../index.php?newsletter=false");
    }

    $body = [
      'Messages' => [
          [
              'From' => [
                  'Email' => $email_from,
                  'Name' => "Spear Capital Advisory"
              ],
              'To' => [
                  [
                      'Email' => $email_from,
                      'Name' => "Spear Capital Advisory"
                  ]
              ],
              'Subject' => 'Newsletter Inclusion',
              'HTMLPart' => 'Kindly include me in the newsletter using <b>'. $_POST['newsEmail'] . '</b>'
          ]
      ]
    ];

    /* Sending the email. */
    $response = $mj->post(Resources::$Email, ['body' => $body]);

    /* Checking if the email was sent successfully. If it was, it prints OK. If it was not, it prints the
    error message. */
    if ($response->success()){
      header("location: ../index.php?newsletter=true");
    }
    else{
      header("location: ../index.php?newsletter=false");
    }

    
  }
  else{

    $body = [
      'Messages' => [
          [
              'From' => [
                  'Email' => $email_from,
                  'Name' => "Spear Capital Advisory"
              ],
              'To' => [
                  [
                      'Email' => $email_from,
                      'Name' => "Spear Capital Advisory"
                  ]
              ],
              'Subject' => $_POST['subject'],
              'HTMLPart' => "You have received a new message from <b>".$_POST['name']." <i>(". $_POST['email'] .")</i> </b>.</h3>
              <br /> ".$_POST['message']
          ]
      ]
    ];

    // All resources are located in the Resources class

    /* Sending the email. */
    $response = $mj->post(Resources::$Email, ['body' => $body]);

    
    /* Checking if the email was sent successfully. If it was, it prints OK. If it was not, it prints the
    error message. */
    if ($response->success()){
      echo "OK";
    }
    else{
      echo $response->getData();
    }

  }
?>
