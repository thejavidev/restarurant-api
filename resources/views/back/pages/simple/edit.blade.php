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
                   <a href="{{ route('simple.index') }}" class="btn login_btn btn_blue btn-margin btn-focus ">All</a>
               </div>
                <form action="{{ route('simple.update',$simple->id) }}" method="POST" enctype="multipart/form-data" class="mb-5 bg px-4">
                    @csrf
                    @method('PUT')


                    <div class="row">
                        <div class="row">

                            <div class="col-6 d-flex align-items-center justify-content-center">
                                <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src">Photo</label>
                                <input type="file" accept="image/*" onchange="loadFile(event)" hidden="" class="form-control @error('src') is-invalid  @enderror" id="src" name="src" value="{{ old('src') }}">
                                @error('src')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-start">
                                <img src="{{ asset('files/simple/'.$simple->src) }}"   class="all-img outputImg" alt="">
                            </div>
                        </div>
                        <hr class="mt-4" />
                        <div class="form-group mb-3 col-md-4 d-none">
                            <label class="form-label" for="text_1_az">Text 1(AZ)</label>
                            <input type="text" class="form-control login_input @error('text_1_az') is-invalid  @enderror" name="text_1_az" id="text_1_az" value="{{ old('text_1_az',$simple->text_1_az) }}">
                            @error('text_1_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4 d-none">
                            <label class="form-label" for="text_1_en">Text 1(EN)</label>
                            <input type="text" class="form-control login_input @error('text_1_en') is-invalid  @enderror" name="text_1_en" id="text_1_en" value="{{ old('text_1_en',$simple->text_1_en) }}">
                            @error('text_1_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4 d-none">
                            <label class="form-label" for="text_1_ru">Text 1(RU)</label>
                            <input type="text" class="form-control login_input @error('text_1_ru') is-invalid  @enderror" name="text_1_ru" id="text_1_ru" value="{{ old('text_1_ru',$simple->text_1_ru) }}">
                            @error('text_1_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="text_2_az">Text (AZ)</label>
                            <textarea  cols="30" rows="6" class="form-control login_input @error('text_2_az') is-invalid  @enderror" name="text_2_az" id="text_2_az" >{{ old('text_2_az',$simple->text_2_az) }}</textarea>
                            @error('text_2_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="text_2_en">Text (EN)</label>
                            <textarea  cols="30" rows="6" class="form-control login_input @error('text_2_en') is-invalid  @enderror" name="text_2_en" id="text_2_en" >{{ old('text_2_en',$simple->text_2_en) }}</textarea>
                            @error('text_2_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="text_2_ru">Text (RU)</label>
                            <textarea  cols="30" rows="6" class="form-control login_input @error('text_2_ru') is-invalid  @enderror" name="text_2_ru" id="text_2_ru" >{{ old('text_2_ru',$simple->text_2_ru) }}</textarea>
                            @error('text_2_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  global_buttons">
                        <button class="btn login_btn btn_save">Edit</button>
                    </div>
                </form>
            </div>
        </div>
        @include('back.includes.footer')
    </div>
@endsection

@section('js')

@endsection
