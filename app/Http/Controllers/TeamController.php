<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function a1()
    {
        $data = team::all();
        return view('table', compact('data'));
    }

    public function a2()
    {
        return view('insert');
    }

    public function a3(Request $request)
    {
        $data = team::create($request->all());
        if ($request->hasFile('photo_team')) {
            $request->file('photo_team')->move('phototeam/', $request->file('photo_team')->getClientOriginalName());
            $data->photo_team = $request->file('photo_team')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('teams')->with('success', 'Input Data Success!');
    }

    public function a4($id)
    {
        $data = team::find($id);

        return view('showdata', compact('data'));
    }

    public function a5(Request $request, $id)
    {
        $data = team::find($id);
        $data->update($request->all());
        return redirect()->route('teams')->with('success', 'Update Data Success!');
    }

    public function a6($id)
    {
        $data = team::find($id);
        $data->delete();
        return redirect()->route('teams')->with('success', 'Delete Data Success!');
    }
}
