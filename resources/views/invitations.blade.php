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
                            <div class="table-responsive bg-white">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Undangan</th>
                                            <th scope="col">Host</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Waktu Acara</th>
                                            <th scope="col" class="text-center">Tool</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($invitations as $invitation)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $invitation->name }}</td>
                                                <td>{{ $invitation->user->name }}</td>
                                                <td>{{ $invitation->category->name }}</td>
                                                <td>{{ $invitation->event_time }}</td>
                                                <td class="text-nowrap text-center">
                                                    <a href="/invitation/{{ $invitation->slug }}"
                                                        class="badge text-white p-1 me-1 bg-info">
                                                        <i class='bx bx-folder-open'></i>
                                                    </a>
                                                    @can('user')
                                                        <a href="/invitation/{{ $invitation->slug }}/invited"
                                                            class="badge text-white p-1 me-1 bg-success">
                                                            <i class='bx bx-detail'></i>
                                                        </a>
                                                    @endcan
                                                    @can('admin')
                                                        <form action="/invitation/{{ $invitation->slug }}" method="POST"
                                                            class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="badge text-white p-1 bg-danger border border-none"
                                                                onclick="return confirm('Yakin ingin hapus ?')">
                                                                <i class='bx bx-trash'></i>
                                                            </button>
                                                        </form>
                                                    @endcan
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
        <div class="container"> {{ $invitations->links() }}</div>
    </section>
@endsection
