@extends('layouts.admin-main')

@section('container')
    <section class="my-3">
        <div class="row justify-content-center container-fluid">
            <div class="col-md-12">
                <ol class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start daftarchat">
                        <div class="ms-2 me-auto">
                            <small class="text-muted">Incoming order from :</small>
                            <div class="fw-bold">Zinedine Ziddan Fahdlevy / asjkasj</div>
                            <small class="text-muted d-block">USR129018301</small>
                            <h4 class="text-main fw-bold">Rp 30000</h4>
                            <a href="/admin-chat/"><i class="fa-brands fa-rocketchat me-1"></i>Chat</a>
                            <a href="/admin-chat/" class="ms-3"><i class="fa-solid fa-eye me-1"></i>Detail
                                order</a>
                        </div>
                        <span class="badge bg-danger border-rd py-1 px-2">Order not confirmed</span>
                        <span class="badge bg-info border-rd py-1 px-2 ms-2">3 orders</span>
                        <span class="badge bg-warning border-rd py-1 px-2 ms-2">3.5 Km / 30 menit</span>
                    </li>
                </ol>
            </div>
        </div>
    </section>
@endsection
