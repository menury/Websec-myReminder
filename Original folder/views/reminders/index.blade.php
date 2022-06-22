@extends('layouts.master') 
@section('main') 
<div class="row"> 

<div class="col-sm-12">
    @if(session()->get('success')) 
        <div class="alert alert-success text-center">
            {{ session()->get('success') }} 
        </div>
    @endif 
</div> 

<div class="col-sm-12"> 
<br />
<h3 class="display-5 text-center">Reminder List</h3> 
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Time</th>
                <th>Date of Exam</th>
                <th>Countdown</th>
                <th colspan="2" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reminders as $count => $reminder) 
            <tr>
                <td>{{++$count}}</td>
                <td><a href="{{ route('reminders.show',$reminder->reminder_id)}}">{{$reminder->title}}</td>
                <td>{{$reminder->exam_time}}</td>
                <td>{{$reminder->date_of_exam}}</td>
                <td>{{\Carbon\Carbon::parse($reminder->date_of_exam)->diffInDays(\Carbon\Carbon::now())}} days</td>
                <td class="text-center">
                    <a href="{{ route('reminders.edit',$reminder->reminder_id)}}" class="btn btn-primary btn-block">Edit</a>
                </td>
                <td class="text-center">
                    <form action="{{ route('reminders.destroy', $reminder->reminder_id)}}" method="post">
                        @csrf 
                        @method('DELETE') 
                        <button class="btn btn-danger btn-block" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    <div class="text-center">
        <a style="margin: 19px;" href="{{ route('reminders.create')}}" class="btn btn-primary">New Reminder Details</a>
    </div> 
<div>

</div>
@endsection