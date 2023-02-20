<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Http\Resources\ReportResource;
use Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
    
        return view('pages.reports.report');
    }

    public function fetchReports(){
        $reports = Report::all();
        return json_encode([
            "data" => ReportResource::collection($reports)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.reports.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'contact' => 'required|unique:reports|numeric|min:10'
        ]);
        $report = new Report;
        $report->user_id = Auth::user()->id;
        $report->team_id = Auth::user()->team;
        $report->contact=$request->contact;
        $report->disposition=$request->disposition;
        $report->failedMandate=$request->callcat;
        $report->about_policy=$request->about_policy;

        if($report->save()){
            return redirect()->back();
        }
        return redirect()->back()->with(['massage'=>'failed']);
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
        $report = Report::find($id);
        return view('pages.reports.edit',compact('report'));
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
        $report = Report::find($id);
        $report->customer_contact=$request->contact;
        $report->dispositio=$request->unreach;
        $report->Call_Category=$request->Deactivation;
        $report ->How_did_you_find_out_about_this_policy=$request->mobile;
        $report->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
