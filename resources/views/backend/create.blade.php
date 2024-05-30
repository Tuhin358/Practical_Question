@extends('backend.master')
@section('content')
    <div class="page-content">
        @if (session('success'))
            <x-alert type="success" message="{{ session('success') }}"></x-alert>
        @endif
        @if (session('danger'))
            <x-alert type="danger" message="{{ session('danger') }}"></x-alert>
        @endif
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">

                    <div class="card-body">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                                <a href="{{ route('dashboard') }}" class="btn btn-info">Back</a>
                            </div>
                        </div>
                        <form id="" class="form form-vertical" action="{{ route('data.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"><span class="required"> * </span>
                                                Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ old('name') }}" placeholder="" required>
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="email" class="form-label"><span class="required"> * </span>
                                                Email</label>
                                            <input type="text" class="form-control" name="email" id="email"
                                                value="{{ old('email') }}" placeholder="" required>
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">
                                                Image</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="gender" class="form-label"><span class="required"> * </span>
                                                Gender</label>
                                            <div>
                                                <input type="radio" class="form-check-input" name="gender" id="male"
                                                    value="male" required>
                                                <label for="male" class="form-check-label">Male</label>
                                            </div>
                                            <div>
                                                <input type="radio" class="form-check-input" name="gender" id="female"
                                                    value="female" required>
                                                <label for="female" class="form-check-label">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="skills" class="form-label"><span class="required"> * </span>
                                                Select Your Skills</label>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="skills[]"
                                                            id="laravel" value="Laravel">
                                                        <label for="laravel" class="form-check-label">Laravel</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="skills[]"
                                                            id="codeigniter" value="Codeigniter">
                                                        <label for="codeigniter"
                                                            class="form-check-label">Codeigniter</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="skills[]"
                                                            id="ajax" value="Ajax">
                                                        <label for="ajax" class="form-check-label">Ajax</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">

                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="skills[]"
                                                            id="vuejs" value="VUE JS">
                                                        <label for="vuejs" class="form-check-label">VUE JS</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="skills[]"
                                                            id="mysql" value="MySQL">
                                                        <label for="mysql" class="form-check-label">MySQL</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="skills[]"
                                                            id="api" value="API">
                                                        <label for="api" class="form-check-label">API</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('skills')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-sm-3 mt-4">
                                    <div class="form-group">
                                        <label for="status" class="form-label"><span class="required">* </span>
                                            Status</label>
                                        <div class="btn-group ms-2" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="status" value="1"
                                                id="active" autocomplete="off" required checked>
                                            <label class="btn btn-outline-primary" for="active">ACTIVE</label>

                                            <input type="radio" class="btn-check" name="status" value="0"
                                                id="inactive" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="inactive">INACTIVE</label>
                                        </div>
                                    </div>
                                    <span class="text-danger">
                                        @error('status')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div> --}}

                            <div class="row mt-5">
                                <div class="col-6 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>
                                        Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
