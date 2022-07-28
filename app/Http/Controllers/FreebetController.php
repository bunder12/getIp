<?php

namespace App\Http\Controllers;

use App\Models\Freebet;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\dataExport;

class freebetController extends Controller
{
    public function store(Request $request)
    {
        $checkLocation = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        $ip = $checkLocation->ip;
        // $ipCheck = Freebet::findOrFail($request->ip);
        $data = $request->validate([
            'idGame' => 'required',
            'chanel' => 'required',
            'event' => 'required',
            'web' => 'required',
            'member' => 'required',
        ]);
        $data['ip'] = $ip;
        $data['status'] = "ipCheck";
        Freebet::create($data);
       return redirect('/data')->with('success', 'Data berhasil di Tambah!');
    }

    public function delete($id)
    {
        Freebet::where('id', $id)->delete();
        return redirect('/data')->with('success', 'Data berhasil di hapus!');
    }

    public function addData()
    {
        $data = Freebet::all();
        return view('data', ['data' => $data]);
    }

    public function edit($id)
    {
        $data = Freebet::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Freebet::findOrFail($id);
        $data->update($request->all());
        return redirect('/data')->with('success', 'Data berhasil di update!');
    }

    public function export()
    {
        return Excel::download(new dataExport, 'data.xlsx');
    }
}
