@extends('main.body')

@section('container')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y" style="min-height: 80vh;">
            <div class="authentication-inner">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center my-4">
                            <a href="/" class="app-brand-link gap-2">
                                <span class="app-brand-text text-capitalize demo text-body fw-bolder">Register</span>
                            </a>
                        </div>
                        <!-- /Logo -->

                        <form id="formAuthentication" class="mb-3" action="/auth/register" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label ms-1">Username</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                    placeholder="Enter your name" value="{{ old('name') }}" autofocus />
                                @error('name')
                                    <div class="ms-1 text-danger small mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label ms-1" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Password" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @error('password')
                                    <div class="ms-1 text-danger small mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label ms-1" for="level">Level</label>
                                <select class="form-select @error('level') is-invalid @enderror" name="level" id="level">
                                    <option value="" hidden selected><span class="text-secondary">Level</span></option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                                @error('level')
                                    <div class="ms-1 text-danger small mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-primary d-grid my-4 w-100" type="submit">Register</button>
                        </form>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>
@endsection
