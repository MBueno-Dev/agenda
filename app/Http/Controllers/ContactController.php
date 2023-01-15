<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('agenda/contacts', compact('contacts'));
    }

    public function contacts()
    {
        $user = auth()->user();
        $contacts = Contact::all();
        return view('/agenda/contacts', compact('user', 'contacts'));
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        Contact::create(
            [
                'name'=> $request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'user_id'=>$user->id
            ]

        );

        return redirect('/contacts');
    }


    public function show($id)
    {
        $user = auth()->user();
        $identif = auth()->id();
        $contact = Contact::find($id);
        
        if ($identif == $contact->user_id){
            return view('agenda.show', compact('contact', 'identif'));
        }else{
            return redirect('/404/');
        }
    }
 
    public function edit($id)
    {
        
        $identif = auth()->id();
        $contact = Contact::find($id);
        
        if ($identif == $contact->user_id){
            return view('agenda.edit', compact('contact', 'identif'));
        }else{
            return redirect('/404s/');
        }
    }

    public function update($id, Request $request)
    {
        $contact = Contact::find($id);

        $contact->update(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'phone' =>$request->phone
            ]
        );
        return redirect('/contacts/show/' . $id );
    }

    public function delete($id){
        $contact = Contact::find($id);
        $identif = auth()->id();

        if ($identif == $contact->user_id){
            $contact->delete();
            return redirect('/contacts/' );
        }else{
            return redirect('/404/');
        }


    }


}
