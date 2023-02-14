@extends('desktop.admin.home')

@section('contents')
    
    <ul>
        <li>
            @foreach($boardlist as $bList)
            {{$bList['board_subject']}}
            @endforeach
        </li>
    </ul>
@endsection