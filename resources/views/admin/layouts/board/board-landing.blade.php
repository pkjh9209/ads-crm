@extends('admin.home')

@section('contents')
<div class="board-container">
    {{-- 검색 --}}
    <div class="board-search-contents shadow">
        <form action="{{ route('admin.landing.list') }}">
            <div class="landing_seaech">
                <dl>
                    <dt>상세검색</dt>
                    <dd class="seaech_landing">
                        <div>
                            <select name="seaech_type">
                                <option value="landing_name">
                                    랜딩이름
                                </option>
                                <option value="landing_key">
                                    랜딩KEY
                                </option>
                            </select>
                        </div>
                        <div>
                            <input type="text" name="search_val">
                        </div>

                    </dd>
                </dl>
                <dl>
                    <dt>광고시작일</dt>
                    <dd class="seaech_date">
                        <div><input type="date" name="start_reg_date"></div>
                        <div>~</div>
                        <div><input type="date" name="last_reg_date"></div>
                    </dd>
                    <div>
                        <button type="submit">검색하기</button>
                    </div>
                </dl>
            </div>
        </form>
    </div>

    <div class="board-contents shadow">
        <div>
            <h1 class="board-title">광고랜딩목록</h1>
            <a href="">랜딩생성</a>
        </div>
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
                        <td>{{$landingList->landing_key}}</td>
                        {{-- 랜딩제목 --}}
                        <td><a href="/landing/{{$landingList->landing_key}}" target="_blank">{{$landingList->landing_name}}</a></td> 
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
                    <p>게시글이 없습니다.</p>
                @endif
            </tbody>
        </table>
        <div class="pagenation_container">
            {{ $landingLists->links() }}
        </div>
    </div>

</div>

<div class="modal-content">

</div>
@endsection

@section('contents-script')
<script>
function modalOpen(key) {
    alert('test');
}
</script>
@endsection