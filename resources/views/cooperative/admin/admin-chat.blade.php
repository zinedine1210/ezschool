@extends('layouts.admin-main')

@section('container')
    <section class="my-3 container-fluid">
        <div class="row g-0">
            <div class="col-md-3">
                <ol class="list-group">
                    @foreach ($listchats as $chat)
                        <li class="list-group-item d-flex justify-content-between align-items-start daftarchat">
                            <div class="ms-2 me-auto">
                                <small class="text-muted">Incoming chat from :</small>
                                <div class="fw-bold">{{ $chat[0]->user->username }} / <span
                                        class="text-muted fst-italic">{{ $chat[0]->user->nama }}</span></div>
                                <small class="text-muted d-block">{{ $chat[0]->user->key_user }}</small>
                                <a href="/admin-chat/{{ $chat[0]->user_id }}"><i
                                        class="fa-brands fa-rocketchat me-2"></i>Reply
                                    now</a>
                            </div>
                            <span class="badge bg-danger rounded-pill">{{ $chat->where('role', 'user')->count() }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div class="col-md-9">
                <div class="card pb-5 chat">
                    <div class="chat-profile bg-main">
                        <div class="row align-items-center px-2 py-2">
                            @foreach ($chatdetail as $chat)
                                <div class="col-md-1 ms-3 text-center">
                                    <img src="../images/payment/bni.png" alt="profile ezschool"
                                        class="img-fluid img-thumbnail rounded-circle">
                                </div>
                                <div class="col-md-6">
                                    <h6 class="font-poppins text-white">{{ $chat[0]->user->username }} /
                                        {{ $chat[0]->user->nama }}<i class="fa-brands fa-rocketchat ms-2"></i></h6>
                                    <small class="text-white d-block">online</small>
                                </div>
                            @endforeach
                        </div>

                        <div class="chat-main font-poppins py-3">
                            {{-- <h6 class="text-muted fw-bold text-center mb-4">Today</h6> --}}

                            @foreach ($chats as $chat)
                                @if ($chat->role == 'admin')
                                    {{-- Chat admin --}}
                                    <div class="row container justify-content-end my-2">
                                        <div class="col-md-6 bg-main2 bg-gradient p-2 shadow-sm"
                                            style="border-radius: 50px 10px 25px 50px">
                                            <h6 class="font-montserrat text-dark me-2 ms-4" style="font-size: 12px">
                                                {{ $chat->chat }}</h6>
                                        </div>
                                    </div>
                                    {{-- Akhir chat admin --}}
                                @endif

                                @if ($chat->role == 'user')
                                    {{-- Chat kamu --}}
                                    <div class="row container ms-2 my-2">
                                        <div class="col-md-6 bg-main gradient chat-message p-2 shadow-sm">
                                            <h6 class="font-montserrat text-white me-4 ms-2">{{ $chat->chat }}
                                            </h6>
                                        </div>
                                    </div>
                                    {{-- Akhir chat kamu --}}
                                @endif
                            @endforeach

                        </div>

                        <form action="/admin-chat" method="POST">
                            @csrf
                            <input type="hidden" name="role" value="admin">
                            <input type="hidden" name="user" value="{{ auth()->user()->id }}">
                            <div class="row font-montserrat container">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="chat"
                                            placeholder="Send message here..." aria-label="Recipient's username"
                                            aria-describedby="button-addon2">
                                        <button class="btn bg-main text-white" type="submit" id="button-addon2">Send<i
                                                class="fa-solid fa-paper-plane ms-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
