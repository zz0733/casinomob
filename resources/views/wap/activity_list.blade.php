@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="m_activity">
                <ul>
                    @foreach($data as $k => $item)
                        <li>
                            <a href="">
                                <img src="{{ $item->title_img }}" alt="">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
