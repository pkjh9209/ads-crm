@extends('desktop.admin.home')

@section('contents')
<div class="board-container">
    <div>

    </div>
    {{-- 검색 --}}
    <div class="board-search-contents shadow">
        <ul>
            <li>
                <dl>
                    <dt>키워드검색</dt>
                    <dd>
                        <div>
                            <select name="" id="">
                                <option value="">

                                </option>
                                <option value="">

                                </option>
                                <option value="">

                                </option>
                            </select>
                        </div>
                        <div>
                            
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>상담일</dt>
                    <dd></dd>
                </dl>
                <dl>
                    <dt>예약일</dt>
                    <dd></dd>
                </dl>
                <dl>
                    <dt>마케팅활용동의</dt>
                    <dd></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="board-contents shadow">
        <h1 class="board-title">광고신청자</h1>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">번호</th>
                    <th scope="col">카테고리</th>
                    <th scope="col">랜딩제목</th>
                    <th scope="col">UTM</th>
                    <th scope="col">연락처</th>
                    <th scope="col">성별</th>
                    <th scope="col">나이</th>
                    <th scope="col">상담희망시간</th>
                    <th scope="col">신청일</th>
                    <th scope="col">콜내역</th>
                    <th scope="col">상담내용</th>
                    <th scope="col">특이사항</th>
                    <th scope="col">상담일</th>
                    <th scope="col">예약상태</th>
                    <th scope="col">상담자지정</th>
                    <th scope="col">관리</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $members)
                <tr>
                    {{-- 번호 --}}
                    <td>{{$members['id']}}</td>
                    {{-- 카테고리 --}}
                    <td>{{$members['category']}}</td>
                    {{--  랜딩키 --}}
                    <td>{{$members['landing_key']}}</td>
                    {{--  utm --}}
                    <td>{{$members['utm']}}</td>
                    {{-- 전화번호 --}}
                    <td>{{$members['tel']}}</td> 
                    {{-- 성별 --}}
                    <td>{{$members['sex']}}</td>
                    {{-- 나이 --}}
                    <td>{{$members['age']}}</td>
                    {{-- 상담희망시간 --}}
                    <td>{{$members['age']}}</td>
                    {{-- 신청일 --}}
                    <td>{{$members['reg_date']}}</td>
                    {{-- 콜내역 --}}
                    <td>{{$members['age']}}</td>
                    {{-- 상담내용 --}}
                    <td>{{$members['last_call_memo']}}</td>
                    {{-- 특이사항 --}}
                    <td></td>
                    {{-- 상담일 --}}
                    <td></td>
                    {{-- 예약상태 --}}
                    <td>{{$members['reserve_status_1']}}<br>{{$members['reserve_date_1']}}</td>
                    {{-- 상담자지정 --}}
                    <td>{{$members['last_call_reg_id']}}</td>
                    {{-- 관리 --}}
                    <td>{{$members['age']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection