<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Gate;

class AdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('manage-advices')) {
            $advices = \App\Advice::with('users')->with('reports')->paginate(10);
            return view('advices.index', ['advices' => $advices]);
        }
        abort(403, 'Anda tidak memiliki cukup hak akses');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('manage-advices')) {
            return view('advices.create');
        }
        abort(403, 'Anda tidak memiliki cukup hak akses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::allows('manage-advices')) {
            \Validator::make($request->all(), [
                'tanggapan' => 'required'
            ])->validate();

            $new_advice = new \App\Advice;
            $new_advice->tanggapan = $request->get('tanggapan');
            $new_advice->tanggal_tanggapan = Carbon::now();
            $new_advice->user_id = \Auth::user()->id;
            $new_advice->report_id = $request->get('report_id');

            $new_advice->save();
            return redirect()->route('advices.index')->with('status', 'Tanggapan berhasil dikirim');
        }
        abort(403, 'Anda tidak memiliki cukup hak akses');
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

    public function showAdvices()
    {
        $advices = \App\Advice::with('users')->with('reports')->paginate(10);
        return view('landing', ['advices' => $advices]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::allows('manage-advices')) {
            $advice = \App\Advice::findOrFail($id);
            $reports = \App\Report::pluck('judul_laporan', 'id')->toArray();
            return view('advices.edit')->with(compact('advice', 'reports'));
        }
        abort(403, 'Anda tidak memiliki cukup hak akses');
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
        if (Gate::allows('manage-advices')) {
            \Validator::make($request->all(), [
                'tanggapan' => 'required'
            ])->validate();

            $advice = \App\Advice::findOrFail($id);
            $advice->tanggapan = $request->get('tanggapan');
            $advice->report_id = $request->get('report_id');

            $advice->save();
            return redirect()->route('advices.index')->with('status', 'Tanggapan berhasil diubah');
        }
        abort(403, 'Anda tidak memiliki cukup hak akses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::allows('manage-advices')) {
            $advice = \App\Advice::findOrFail($id);
            $advice->delete();

            return redirect()->route('advices.index')->with('status', 'Tanggapan berhasil dihapus');
        }
        abort(403, 'Anda tidak memiliki cukup hak akses');
    }

    public function ajaxSearch(Request $request)
    {
        $keyword = $request->get('q');

        $reports = \App\Report::where("judul_laporan", "LIKE", "%$keyword%")->get();

        return $reports;
    }
}
