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

    public function readFirebase()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/fyp_Firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://fyp-univis.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('nodes');

        $adata = $ref->getValue();

        foreach ($adata as $data){
            $all_data[] = $data;
        }

        return view ('university_table_page',compact('all_data'));
    }

    // This boi keeps taking old input
    public function addData(Request $request){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/fyp_Firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://fyp-univis.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('nodes');

        $nameData = $request->name;
        $node_type = $request->node_type;

        $key = $ref->push()->getKey();

        $ref->getChild($key)->set([
            'name'=>$nameData,
            'node_type'=>$node_type
        ]);

        $adata = $ref->getValue();

        foreach ($adata as $data){
            $all_data[] = $data;
        }

        return view ('university_table_page',compact('all_data'));
    }

    public function addRelationship(Request $request){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/fyp_Firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://fyp-univis.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('edges');

        $source = $request->source;
        $target = $request->target;

        $key = $ref->push()->getKey();

        $ref->getChild($key)->set([
            'source'=>$source,
            'target'=>$target
        ]);

        $adata = $ref->getValue();

        foreach ($adata as $data){
            $all_data[] = $data;
        }

        return view ('university_relationshiptable_page',compact('all_data'));
    }


    public function saveToken(Request $request)
    {
        auth()->user()->update(['device_token'=>$request->token]);
        return response()->json(['token saved successfully.']);
    }

    public function deleteData(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/fyp_Firebase.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://fyp-univis.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('nodes');

        $adata = $ref->getValue();

        $ref->remove();

        foreach ($adata as $data){
            $all_data[] = $data;
        }

        return view ('university_table_page',compact('all_data'));
    }
}
