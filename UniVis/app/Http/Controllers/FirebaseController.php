<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirebaseController extends Controller
{

    public function index()
    {
        // This assumes that you have placed the Firebase credentials in the same directory
        // as this PHP file.
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/fyp_Firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://fyp-univis.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('nodes');

        $key = $ref->push()->getKey();

        $ref->getChild($key)->set([
            'node_type'=>'',
            'name'=>''
            
        ]);
        return $key;
    }
}
