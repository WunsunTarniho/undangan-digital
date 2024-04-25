@extends('main.body')

@section('container')
    <div class="container rounded col-md-8 mx-auto mt-5">
        <div class="authentication-wrapper authentication-basic" style="min-height: 75vh">
            <div class="container bg-white rounded">
                <div class="p-3 py-5">
                    <form method="POST" action="/user/{{ $user->id }}">
                        @csrf
                        @method('PUT')
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-row align-items-center back"><i
                                    class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                <h6><a href="/">Back to home</a></h6>
                            </div>
                            <h6 class="text-right">Edit Profile</h6>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama"
                                    value="{{ old('name', $user->name) }}">
                                @error('name')
                                    <div class="ms-1 text-danger small mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-md-0 mt-4 form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Password" aria-describedby="password"
                                        value="{{ old('password', $user->password) }}" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @error('password')
                                    <div class="ms-1 text-danger small mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="row mt-3">
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Email"
                                    value="john_doe12@bbb.com"></div>
                            <div class="col-md-6"><input type="text" class="form-control" value="+19685969668"
                                    placeholder="Phone number"></div>
                        </div> --}}

                        <div class="mt-5 text-right"><button class="btn btn-primary profile-button"
                                type="submit">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
