@extends('layouts.profile')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>My Profile</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                        <div class="row">
                        <label class="text col-md-6">更新日付</label>
                            <div class="date">
                                {{ $post->updated_at->format('Y年m月d日') }}
                            </div>
                        <label class="text col-md-6">氏名</label>
                            <div class="name">
                                {{ str_limit($post->name, 150) }}
                            </div>
                        <label class="text col-md-6">性別</label>
                            <div class="gender">
                                {{ str_limit($post->gender, 150) }}
                            </div>
                        <label class="text col-md-6">趣味</label>
                            <div class="hobby">
                                {{ str_limit($post->hobby, 150) }}
                            </div>
                        <label class="text col-md-6">自己紹介</label>
                            <div class="introduction">
                                {{ str_limit($post->introduction, 1500) }}
                            </div>
                        </div>
                        <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection