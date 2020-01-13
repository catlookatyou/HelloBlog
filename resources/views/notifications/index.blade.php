@extends('layouts.master')

@section('title', '所有通知')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="infos">
            @if(count($notifications) == 0)
                {{ '沒有任何通知' }}
                <hr>
            @endif
            @foreach ($notifications as $notification)
                <div class="media-heading">
                    @if(isset($notification->data->user_avatar))
                        {{ $notification->data->user_avatar }}
                    @endif
                    <a href="{{ route('users.showPosts', ['id' => $notification->data['user_id']]) }}">{{ $notification->data['user_name'] }}</a>
                    回覆了
                    <a href="{{ route('posts.show', ['id' => $notification->data['post_id']]) }}">{{ $notification->data['post_title'] }}</a>

                    {{-- 回复删除按钮 --}}
                    <span class="meta pull-right float-right" title="{{ $notification->created_at }}">
                        <span class="glyphicon glyphicon-clock" aria-hidden="true"></span>
                        {{ $notification->created_at->diffForHumans() }}
                    </span>
                </div>
                <div class="reply-content">
                    {!! $notification->data['comment_content'] !!}
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>

@stop
