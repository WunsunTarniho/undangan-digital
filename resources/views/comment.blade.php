@extends('main.body')

@section('container')
    <section class="intro mt-5">
        <div class="container d-md-flex align-items-center gap-2">
            <h3 class="my-2">{{ $title }}</h3>
            <p class="my-3 my-md-0">
                @if ($invited->presence == 'Akan Hadir')
                    <div class="text-success">Akan Hadir <i class='bx bxs-badge-check text-success'></i></div>
                @elseif($invited->presence == 'Tidak Hadir')
                    <div class="text-danger">Tidak Hadir <i class='bx bx-x-circle text-danger'></i></div>
                @endif
            </p>
        </div>

        @if (!count($comments))
            <div class="col-md-8 mx-auto">
                <div class="authentication-wrapper authentication-basic" style="min-height: 60vh;">
                    <div class="p-3 py-5">
                        <h3 class="text-center text-secondary">Belum Response dari {{ $invited->name }}</h3>
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
                                                <th scope="col">Response</th>
                                                <th scope="col" class="text-center">Tool</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($comments as $comment)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $comment->content }}</td>
                                                    <td class="text-nowrap text-center">
                                                        <form
                                                            action="/invitation/{{ $invitation_slug }}/invited/{{ $invited->url }}/comment/{{ $comment->id }}"
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
        @endif
    </section>
@endsection
