<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;
const REMINDERS = '/reminders';

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reminders = Reminder::all();
        return view('reminders.index', compact('reminders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reminders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'              =>  'required',
            'exam_time'          =>  'required',
            'date_of_exam'       =>  'required'
        ]);

        $reminders = new Reminder([
            'title' => $request->get('title'),
            'exam_time' => $request->get('exam_time'),
            'date_of_exam' => $request->get('date_of_exam')
        ]);
        
        $reminders->save();
        return redirect(REMINDERS)->with('success', 'Reminder Details Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function show(Reminder $reminder)
    {
        $reminders = Reminder::find($reminder_id);
        return view('reminders.show', compact('reminder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function edit($reminder_id)
    {
        $reminders = Reminder::find($reminder_id);
        return view('reminders.edit', compact('reminders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reminder_id)
    {
        $request->validate([
            'title'              =>  'required',
            'exam_time'          =>  'required',
            'date_of_exam'       =>  'required'
        ]);

        $reminders = Reminder::find($reminder_id);

        $reminders->title = $request->get('title');
        $reminders->exam_time = $request->get('exam_time');
        $reminders->date_of_exam = $request->get('date_of_exam');

        $reminders->save();
        //Reminder::where('reminder_id',$reminder_id)->update($request->all());
        return redirect(REMINDERS)->with('success', 'Reminder Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function destroy($reminder_id)
    {
        $reminders = Reminder::find($reminder_id);
        $reminders->delete();
        return redirect(REMINDERS)->with('success', 'Reminder Deleted!');
    }
}
