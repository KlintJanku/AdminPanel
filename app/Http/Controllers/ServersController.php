<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;

class ServersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servers = Server::all();
        return view('servers.index')->with('servers',$servers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servers.create');
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
            'title' => 'required',
            'services' => 'required'
        ]);

        //Create new server

        $server = new Server;
        $server->title = $request->input('title');
        $server->services = $request->input('services');
        $server->save();

        return redirect('/servers')->with('success', 'Server created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $server = Server::find($id);
        return view('servers.edit')->with('servers',$server);
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
            'title' => 'required',
            'services' => 'required'
        ]);

        //Create new server

        $server = Server::find($id);
        $server->title = $request->input('title');
        $server->services = $request->input('services');
        $server->save();

        return redirect('/servers')->with('success','Server Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $server = Server::find($id);
        $server->delete();

        return redirect('/servers')->with('success','Server Deleted');
    }
}
