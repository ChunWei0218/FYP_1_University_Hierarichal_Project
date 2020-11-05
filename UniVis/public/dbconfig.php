<?php
   require __DIR__.'/vendor/autoload.php';

   use Kreait\Firebase\Factory;
   use Kreait\Firebase\ServiceAccount;

   // This assumes that you have placed the Firebase credentials in the same directory
   // as this PHP file.
   $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/fyp-univis-firebase-adminsdk-oqwfo-5b8dc916cf.json');
   $firebase = (new Factory)
      ->withServiceAccount($serviceAccount)
      ->withDatabaseUri('https://fyp-univis.firebaseio.com/')
      ->create();
      
   $database = $firebase->getDatabase();
?>