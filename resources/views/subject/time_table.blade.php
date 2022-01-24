@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
{{Auth::user()->name}}
    <form method="POST" action="/select">
    @csrf

   <table border="1">
        <tr>
            <th>授業名</th>
            <th>選択</th>
        </tr>
        @foreach($lessons as $lesson)
        <tr>
            <lable>
            <td>{{$lesson->lesson_name}}</td>
            <td><input type="checkbox"  value="{{ $lesson->id }}" name="lessons_array[]"></td>
            </lable>
        </tr>
        @endforeach
    </table>
    <input type="submit" value="選択">
    </form>

@endsection