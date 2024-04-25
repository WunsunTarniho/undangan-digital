@extends('main.body')

@section('container')
    <section class="intro mt-5">
        <div class="container">
            <h3 class="my-2">{{ $title }}</h3>
        </div>
        <div class="gradient-custom-1 h-100">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="table-responsive small bg-white">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Pengguna</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Password</th>
                                            <th scope="col" class="text-center">Tool</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->level }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td class="text-nowrap text-center">
                                                <a href="/user/{{ $user->id }}" class="badge text-white p-1 me-1 bg-warning">
                                                    <i class='bx bx-edit-alt'></i>
                                                </a>
                                                <form action="/user/{{ $user->id }}" method="POST" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge text-white p-1 bg-danger border border-none"
                                                        onclick="return confirm('Yakin ingin hapus ?')">
                                                        <i class='bx bx-trash'></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"> {{ $users->links() }}</div>
    </section>
@endsection
