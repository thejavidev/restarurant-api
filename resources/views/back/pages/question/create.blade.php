@extends('back.layout.master')

@section('title') Products @endsection

@section('css')

@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')

        <div class="content m-3">
            <div class="mb-3 col-md-10 offset-md-1">

                <div class="d-flex justify-content-center align-items-center mb-4">
                    <a href="{{ route('question.index') }}" class="btn login_btn">All</a>
                </div>
                <form action="{{ route('question.store') }}" method="POST" enctype="multipart/form-data" class="mb-5 bg px-4">
                    @csrf
                    <div class="row px-3 py-3">


                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="q_text1_az">Question Title Az</label>
                            <input type="text" class="form-control login_input @error('q_text1_az') is-invalid  @enderror" id="q_text1_az" name="q_text1_az" value="{{ old('q_text1_az') }}">
                            @error('q_text1_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="q_text1_ru">Question Title Ru</label>
                            <input type="text" class="form-control login_input @error('q_text1_ru') is-invalid  @enderror" id="q_text1_ru" name="q_text1_ru" value="{{ old('q_text1_ru') }}">
                            @error('q_text1_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="q_text1_en">Question Title En</label>
                            <input type="text" class="form-control login_input @error('q_text1_en') is-invalid  @enderror" id="q_text1_en" name="q_text1_en" value="{{ old('q_text1_en') }}">
                            @error('q_text1_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>




                        <div class="form-group mb-3">
                            <label class="form-label" for="q_text2_az">Text (Az)</label>
                            <textarea name="q_text2_az" id="q_text2_az" class="form-control login_input @error('q_text2_az') is-invalid  @enderror" cols="30" rows="4" >{{ old('q_text2_az') }}</textarea>
                            @error('q_text2_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="q_text2_ru">Text (Ru)</label>
                            <textarea name="q_text2_ru" id="q_text2_ru" class="form-control login_input @error('q_text2_ru') is-invalid  @enderror" cols="30" rows="4" >{{ old('q_text2_ru') }}</textarea>
                            @error('q_text2_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="q_text2_en">Text (En)</label>
                            <textarea name="q_text2_en" id="q_text2_en" class="form-control login_input @error('q_text2_en') is-invalid  @enderror" cols="30" rows="4" >{{ old('q_text2_en') }}</textarea>
                            @error('q_text2_en')
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
