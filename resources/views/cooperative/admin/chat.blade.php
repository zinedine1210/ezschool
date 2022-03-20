@extends('layouts.admin-main')


@section('container')
    <section class="my-3 font-poppins">
        <h5 class="text-main fw-bold mb-2">Chat List</h5>
        <ol class="list-group container-fluid">
            @foreach ($chats as $chat)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <small class="text-muted">Incoming chat from :</small>
                        <div class="fw-bold">{{ $chat->user->username }}</div>
                        <a href="/admin-chat/{{ $chat->id }}"><i class="fa-brands fa-rocketchat me-2"></i>Reply now</a>
                    </div>
                    <span class="badge bg-primary rounded-pill">14</span>
                </li>
            @endforeach
        </ol>
    </section>
@endsection
