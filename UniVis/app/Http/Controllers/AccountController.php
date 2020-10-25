<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = $dbo->prepare("select * from account where id=:id");
        return view('account.index', compact('account'));/*** Gotta check */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'email'     =>  'required',
            'contact_num'     =>  'required'
        ]);
        $account = new Account([
            'name'    =>  $request->get('name'),
            'email'     =>  $request->get('email'),
            'contact_num'     =>  $request->get('contact_num')
        ]);
        $account->save();
        return redirect()->route('account.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = Account::find($id);
        return view('account.edit', compact('account', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'email'     =>  'required',
            'contact_num'     =>  'required'
        ]);
        $account = Student::find($id);
        $account->name = $request->get('name');
        $account->email = $request->get('email');
        $account->contact_num = $request->get('contact_num');
        $account->save();
        return redirect()->route('account.index')->with('success', 'Data Updated');
    }
}