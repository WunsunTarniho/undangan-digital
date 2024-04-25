@extends('main.body')

@section('container')
    <section class="intro mt-5">
        <div class="container d-md-flex justify-content-between align-items-center">
            <h3 class="my-2">{{ $title }}</h3>
            @if (count($inviteds))
                <p class="my-3 my-md-0">
                    <span class="me-3">Akan Hadir : {{ $presence }}</span>
                    <span>Tidak Hadir : {{ $absent }}</span>
                </p>
                <button class="btn btn-primary text-nowrap">
                    <i class="bx bx-plus me-2"></i>
                    <a class="text-white text-nowrap" href="/invitation/{{ $invitation_slug }}/invited/create">Tambah Tamu</a>
                </button>
            @endif
        </div>

        @if (!count($inviteds))
            <div class="col-md-8 mx-auto">
                <div class="authentication-wrapper authentication-basic" style="min-height: 60vh;">
                    <div class="p-3 py-5">
                        <h3 class="text-center text-secondary">Belum Ada Tamu Undangan</h3>
                        <button class="btn btn-primary my-5 d-block mx-auto">
                            <i class="bx bx-plus me-2"></i>
                            <a class="text-white" href="/invitation/{{ $invitation_slug }}/invited/create">Tambah Tamu</a>
                        </button>
                    </div>
                </div>
            </div>
        @else
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
                                                <th scope="col">Nama</th>
                                                <th scope="col">Kehadiran</th>
                                                <th scope="col">Jumlah Kehadiran</th>
                                                <th scope="col" class="text-center">Tool</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inviteds as $invited)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $invited->name }}</td>
                                                    <td>{{ $invited->presence ?? ' - ' }}</td>
                                                    <td>{{ $invited->sum ?? ' - ' }}</td>
                                                    <td class="text-nowrap text-center">
                                                        <a href="/invitation/{{ $invitation_slug }}/invited/{{ $invited->url }}/comment/"
                                                            class="badge text-white p-1 me-1 bg-success">
                                                            <i class='bx bx-message-rounded-detail'></i>
                                                        </a>
                                                        <a href="whatsapp://send?text=https://www.namadomain.com/invitation/{{ $invitation_slug }}/invited/{{ $invited->url }}"
                                                            class="badge text-white p-1 me-1 bg-primary">
                                                            <i class='bx bx-share-alt'></i>
                                                        </a>
                                                        <form
                                                            action="/invitation/{{ $invitation_slug }}/invited/{{ $invited->url }}"
                                                            method="POST" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button
                                                                class="badge text-white p-1 bg-danger border border-none"
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
            <div class="container"> {{ $inviteds->links() }}</div>
        @endif

    </section>
@endsection
