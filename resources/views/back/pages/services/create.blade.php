@extends('back.layout.master')

@section('title') Services @endsection

@section('css')

@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')

        <div class="content m-3">
            <div class="mb-3 col-md-10 offset-md-1">

                <div class="d-flex justify-content-center align-items-center mb-4">
                    <a href="{{ route('services.index') }}" class="btn login_btn">All</a>
                </div>
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="mb-5 bg px-4">
                    @csrf
                    <div class="row px-3 py-3">

                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="name_az">Name Az</label>
                            <input type="text" class="form-control login_input @error('name_az') is-invalid  @enderror" id="name_az" name="name_az" value="{{ old('name_az') }}">
                            @error('name_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="name_ru">Name Ru</label>
                            <input type="text" class="form-control login_input @error('name_ru') is-invalid  @enderror" id="name_ru" name="name_ru" value="{{ old('name_ru') }}">
                            @error('name_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="name_en">Name En</label>
                            <input type="text" class="form-control login_input @error('name_en') is-invalid  @enderror" id="name_en" name="name_en" value="{{ old('name_en') }}">
                            @error('name_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group  global_buttons">
                        <button class="btn login_btn btn_save">ADD</button>
                    </div>
                </form>
            </div>
        </div>
        @include('back.includes.footer')
    </div>
@endsection

@section('js')

@endsection
