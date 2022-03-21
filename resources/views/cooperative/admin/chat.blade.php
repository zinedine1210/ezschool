@extends('layouts.admin-main')


@section('container')
    <section class="my-3 font-poppins">
        <h5 class="text-main fw-bold mb-2">Chat List</h5>
        <ol class="list-group container-fluid">
            @foreach ($chats as $chat)
                <li class="list-group-item d-flex justify-content-between align-items-start daftarchat">
                    <div class="ms-2 me-auto">
                        <small class="text-muted">Incoming chat from :</small>
                        <div class="fw-bold">{{ $chat[0]->user->username }} / <span
                                class="text-muted fst-italic">{{ $chat[0]->user->nama }}</span></div>
                        <small class="text-muted d-block">{{ $chat[0]->user->key_user }}</small>
                        <a href="/admin-chat/{{ $chat[0]->user_id }}"><i class="fa-brands fa-rocketchat me-2"></i>Reply
                            now</a>

                    </div>
                    <span class="badge bg-danger rounded-pill me-3">{{ $chat->where('role', 'user')->count() }}</span>
                    <form action="/admin-chat/{{ $chat[0]->user_id }}" method="POST">
                        @csrf
                        @method("delete")
                        <button type="submit" class="bg-transparent d-inline-block p-0 text-danger"><i
                                class="fa-solid fa-trash"></i></button>
                    </form>
                </li>
            @endforeach
        </ol>
    </section>
@endsection
