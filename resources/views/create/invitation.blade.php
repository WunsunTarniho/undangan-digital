@extends('main.body')

@section('container')
    <div class="authentication-wrapper authentication-basic container-p-y" style="min-height: 80vh;">
        <div class="container-fluid col-md-8 mx-1">
            <div class="card">
                <h3 class="text-center mt-4">Buat Undangan</h3>
                <div class="card-body">
                    <form method="POST" action="/invitation">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-label">
                                    Name<span class="text-danger">*</span>
                                </label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    id="name" name="name" placeholder="Nama Undangan" value="{{ old('name') }}">
                                @error('name')
                                    <div class="ms-1 text-danger small mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex mt-sm-0 mt-3">
                                <label class="form-label">Host
                                    <span class="text-danger">*</span>
                                </label>
                                <select name="user_id" id="user_id" class="form-select @error('user_id') is-invalid @enderror">
                                    <option value="" hidden selected><span class="text-secondary">Host</span></option>
                                    @foreach ($users as $user)
                                        @if (old('user_id') == $user->id)
                                            <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                                        @else
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('host')
                                    <div class="ms-1 text-danger small mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-between text-left mt-3">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-label">Kategori<span class="text-danger"> *</span>
                                </label>
                                <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id"
                                    placeholder="Jenis Undangan">
                                    <option value="" hidden selected><span class="text-secondary">Kategori</span></option>
                                    @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}
                                            </option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="ms-1 text-danger small mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex mt-3 mt-sm-0">
                                <label class="form-label">Waktu Acara<span class="text-danger">*</span></label>
                                <input class="form-control @error('event_time') is-invalid @enderror" type="datetime-local" name="event_time" id="event_time"
                                    value="{{ old('event_time') }}" />
                                @error('event_time')
                                    <div class="ms-1 text-danger small mt-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-4">Buat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
