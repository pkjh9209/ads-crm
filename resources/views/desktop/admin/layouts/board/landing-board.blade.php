@extends('desktop.admin.home')

@section('contents')
<div class="board-container">
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
                    <th scope="col">랜딩key</th>
                    <th scope="col">랜딩제목</th>
                    <th scope="col">페이지뷰</th>
                    <th scope="col">신청자</th>
                    <th scope="col">랜딩등록일</th>
                    <th scope="col">담당자</th>
                    <th scope="col">디렉토리</th>
                    <th scope="col">관리</th>
                </tr>
            </thead>
            <tbody>

                @if(count($landingLists)>0)
                    @foreach($landingLists as $landingList)
                    <tr>
                        {{-- 번호 --}}
                        <td>{{$landingList->id}}</td>
                        {{-- 카테고리 --}}
                        <td>{{$landingList->category}}</td>
                        {{--  랜딩key --}}
                        <td>
                            <a href="/landing/{{$landingList->landing_key}}" target="_blank">
                                {{$landingList->landing_key}}
                            </a>
                        </td>
                        {{-- 랜딩제목 --}}
                        <td>{{$landingList->landing_name}}</td> 
                        {{-- 페이지뷰 --}}
                        <td>{{$landingList->real_hit}}</td>
                        {{-- 신청자 --}}
                        <td>{{$landingList->member_cnt}}</td>
                        {{-- 랜딩등록일 --}}
                        <td>{{$landingList->reg_date}}</td>
                        {{-- 담당자 --}}
                        <td>{{$landingList->reg_id}}</td>
                        {{-- 디렉토리 --}}
                        <td>{{$landingList->landing_url}}</td>
                        <td>관리</td>
                    </tr>
                    @endforeach
                @else
                    <p>No Posts Found</p>
                @endif
            </tbody>
        </table>
        {{ $landingLists->links() }}
    </div>

</div>

<div class="modal-content">

</div>
@endsection

@section('contents-script')
<script>
window.onload = function () {
    document.getElementById('button').onclick = function () {
        document.getElementById('modal').style.display = "none"
    };
};

function modalOpen(key) {
    alert('test');
}
</script>
@endsection