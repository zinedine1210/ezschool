@extends('layouts.admin-main')

@section('container')
    <section class="my-3">
        <form action="" method="POST">
            <button class="btn btn-danger border-rd mb-3"><i class="fa-solid fa-trash"></i></button>
        </form>
        <div class="table-responsive">
            <table class="table table-striped align-middle table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Key User</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <th>{{ $user->key_user }}</th>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->isAdmin)
                                    <small class="bg-main border-rd text-white fw-bold px-2 py-1">Admin</small>
                                @else
                                    <small class="bg-info border-rd text-white fw-bold px-2 py-1">Not Admin</small>
                                @endif
                            </td>
                            <td>
                                <form action="/user-delete/{{ $user->id }}">
                                    @csrf
                                    @method("delete")
                                    <button class="text-danger bg-transparent d-inline"
                                        onclick="return alert('Apakah anda yakin ingin menghapus?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                    <button class="text-primary ms-1 bg-transparent d-inline" data-bs-toggle="modal"
                                        type="button" data-bs-target="#modaluser{{ $user->key_user }}"><i
                                            class="fa-solid fa-pen"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


    <!-- Modal User -->
    @foreach ($users as $user)
        <div class="modal fade" id="modaluser{{ $user->key_user }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body font-poppins">
                        <form action="/user-edit" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="keyuser" name="keyuser"
                                    placeholder="name@example.com" disabled value="{{ $user->key_user }}">
                                <label for="keyuser">Key User</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="name@example.com" disabled value="{{ $user->username }}">
                                <label for="username">Username</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" disabled value="{{ $user->email }}">
                                <label for="email">Email address</label>
                            </div>
                            <select class="form-select form-select-lg mb-3" name="admin"
                                aria-label=".form-select-lg example">
                                <option value="1" @if ($user->isAdmin == 1) selected @endif>Admin</option>
                                <option value="0" @if ($user->isAdmin == 0) selected @endif>Not Admin</option>
                            </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
