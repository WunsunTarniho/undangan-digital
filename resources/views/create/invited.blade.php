@extends('main.body')

@section('container')
    <div class="container rounded col-md-8 mx-auto mt-4">
        <div class="authentication-wrapper authentication-basic" style="min-height: 75vh">
            <div class="container bg-white rounded">
                <div class="p-3 py-5">
                    <form method="POST" action="/invitation/{{ $invitation->slug }}/invited">
                        @csrf
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-row align-items-center back"><i
                                    class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                <h4>Tambah Tamu</h4>
                            </div>
                        </div>
                        @for ($i = 0; $i < 5; $i++)
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <input type="text" name="name[]" id="name"
                                        class="form-control"
                                        placeholder="Nama Tamu" value="{{ old('name.' . $i) }}">
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2">
                                    <input type="text" name="name[]" id="name"
                                        class="form-control"
                                        placeholder="Nama Tamu" value="{{ old('name.' . $i) }}">
                                </div>
                            </div>
                        @endfor
                        @error('name.*')
                            <div class="ms-2 text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mt-5 text-right">
                            <button class="btn btn-primary profile-button" type="submit">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
