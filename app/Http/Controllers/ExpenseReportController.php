<?php

namespace App\Http\Controllers;

use App\Models\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expense_reports = ExpenseReport::all();
        return view('expenseReport.index', compact('expense_reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = new ExpenseReport();
        $report->title = $request->get('title');
        $report->save();

        return redirect()->route('expense_reports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = ExpenseReport::findOrFail($id);

        return view('expenseReport.edit', [
            'report' => $report
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->title = $request->get('title');
        $report->save();

        return redirect()->route('expense_reports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();

        return redirect()->route('expense_reports.index');
    }

    public function confirmDelete($id) {
        $report = ExpenseReport::findOrFail($id);

        return view('expenseReport.confirmDelete', [
            'report' => $report
        ]);
    }
}
