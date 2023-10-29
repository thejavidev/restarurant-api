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
                   <a href="{{ route('simple.index') }}" class="btn login_btn">All</a>
               </div>
                <form action="{{ route('simple.store') }}" method="POST" enctype="multipart/form-data" class="mb-5 bg px-4">
                    @csrf
                    <div class="row">
                        <div class="form-group mb-3 col-md-12 d-flex justify-content-center">
                            <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src">Photo</label>
                            <input type="file" accept="image/*" hidden="" class="form-control @error('src') is-invalid  @enderror" id="src" name="src" value="{{ old('src') }}">
                            @error('src')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr class="mt-4" />
                        <div class="form-group mb-3 col-md-12 d-none">
                            <label class="form-label" for="text_1_az">Text 1 Az</label>
                            <input type="text" class="form-control login_input @error('text_1_az') is-invalid  @enderror" id="text_1_az" name="text_1_az" value="{{ old('text_1_az') }}">
                            @error('text_1_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-12 d-none">
                            <label class="form-label" for="text_1_ru">Text 1 Ru</label>
                            <input type="text" class="form-control login_input @error('text_1_ru') is-invalid  @enderror" id="text_1_ru" name="text_1_ru" value="{{ old('text_1_ru') }}">
                            @error('text_1_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-12 d-none">
                            <label class="form-label" for="text_1_en">Text 1(En)</label>
                            <input type="text" class="form-control login_input @error('text_1_en') is-invalid  @enderror" name="text_1_en" id="text_1_en" value="{{ old('text_1_en') }}">
                            @error('text_1_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="text_2_az">Text  Az</label>
                            <textarea cols="30" rows="6"  class="form-control login_input @error('text_2_az') is-invalid  @enderror" name="text_2_az" id="text_2_az" >{{ old('text_2_az') }}</textarea>
                            @error('text_2_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="text_2_ru">Text  Ru</label>
                            <textarea cols="30" rows="6"  class="form-control login_input @error('text_2_ru') is-invalid  @enderror" name="text_2_ru" id="text_2_ru" >{{ old('text_2_ru') }}</textarea>
                            @error('text_2_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="text_2_en">Text (En)</label>
                            <textarea cols="30" rows="6"  class="form-control login_input @error('text_2_en') is-invalid  @enderror" name="text_2_en" id="text_2_en" >{{ old('text_2_en') }}</textarea>
                            @error('text_2_en')
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
