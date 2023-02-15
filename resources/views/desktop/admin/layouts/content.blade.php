@extends('desktop.admin.home')

@section('contents')
    
    <ul>
        <li>
            @foreach($boardList as $boardList)
            {{$boardList['board_subject']}}
            @endforeach
        </li>
    </ul>
@endsection