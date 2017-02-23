<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();

        return view('client')->with(['clients'=>$clients]);
    }

    public function addClient(Request $request)
    {
        $data = $request->all();
        $client = new Client();
        $client->fill($data);
        $client->save();

        return redirect('/');
    }

    public function delClient($id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect('/');
    }

    public function searchName(Request $request)
    {
        $data = $request->all();
        $clients = Client::where("name", $data['name'])->get();

        return view('client')->with(['clients'=>$clients]);
    }

    public function searchSurname(Request $request)
    {
        $data = $request->all();
        $clients = Client::where("surname", $data['surname'])->get();
        return view('client')->with(['clients'=>$clients]);
    }

    public function searchPhone(Request $request)
    {
        $data = $request->all();
        $clients = Client::where("phone", $data['phone'])->get();
        return view('client')->with(['clients'=>$clients]);
    }

    public function editClient(Request $request)
    {
        $data = $request->all();
        $client = Client::find($data['id']);
        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->phone = $request->phone;
        $client->save();

        return redirect('/');
    }
}
