@extends('layouts.main', ['title'=>"Chat"])

@section('container')
    <section id="my-profile" class="">
        <div class="row justify-content-center container-fluid g-2">
            @include('partials.navbar-profile')
            <div class="col-md-8">
                <div class="card pb-5 chat">
                    <div class="chat-profile bg-main">
                        <div class="row align-items-center px-2 py-2">
                            <div class="col-md-1 ms-3 text-center">
                                <img src="images/logo ezschool.png" alt="profile ezschool"
                                    class="img-fluid img-thumbnail rounded-circle">
                            </div>
                            <div class="col-md-6">
                                <h5 class="font-poppins fw-bold text-white">EzSchool<i
                                        class="fa-brands fa-rocketchat ms-2"></i></h5>
                                <h6 class="text-white">online</h6>
                            </div>
                        </div>

                        <div class="chat-main font-poppins py-3">
                            <h6 class="text-muted fw-bold text-center mb-4">Today</h6>

                            @foreach ($chats as $chat)
                                @if ($chat->role == 'user')
                                    {{-- Chat kamu --}}
                                    <div class="row container justify-content-end my-2">
                                        <div class="col-md-6 bg-main2 bg-gradient p-2 shadow-sm"
                                            style="border-radius: 50px 10px 25px 50px">
                                            <h6 class="font-montserrat text-dark me-2 ms-4" style="font-size: 12px">
                                                {{ $chat->chat }}</h6>
                                        </div>
                                    </div>
                                    {{-- Akhir chat kamu --}}
                                @endif

                                @if ($chat->role == 'admin')
                                    {{-- Chat Ezteam --}}
                                    <div class="row container ms-2 my-2">
                                        <div class="col-md-6 bg-main gradient chat-message p-2 shadow-sm">
                                            <h6 class="font-montserrat text-white me-4 ms-2">Lorem ipsum, dolor sit amet
                                                consectetur
                                                adipisicing elit.
                                                Expedita architecto maxime
                                                laudantium obcaecati inventore quae laboriosam distinctio ipsum consequuntur
                                                sint?
                                            </h6>
                                        </div>
                                    </div>
                                    {{-- Akhir chat ezteam --}}
                                @endif
                            @endforeach

                        </div>

                        <form action="/admin-chat" method="POST">
                            @csrf
                            <input type="hidden" name="role" value="user">
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
