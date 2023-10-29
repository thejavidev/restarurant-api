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
                    <a href="{{ route('product.index') }}" class="btn login_btn">All</a>
                </div>

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="mb-5 bg px-4">
            @csrf
            <div class="row">
                <div class="row">
                    <div class="form-group mb-3 col-md-3">
                        <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src">Photo</label>
                        <input type="file" accept="image/*" hidden="" class="form-control @error('src') is-invalid  @enderror" id="src" name="src" value="{{ old('src') }}">
                        @error('src')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3 col-md-9">
                        <label class="form-label" for="alt">ALT TEG</label>
                        <input type="text" class="form-control login_input @error('alt') is-invalid  @enderror" id="alt" name="alt" value="{{ old('alt') }}">
                        @error('alt')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <hr class="mt-4" />



{{--                <div class="form-group mb-3 col-md-12">--}}
{{--                    <label class="form-label" for="link">Link</label>--}}
{{--                    <input type="text" class="form-control @error('link') is-invalid  @enderror" id="link" name="link" value="{{ old('link') }}">--}}
{{--                    @error('link')--}}
{{--                    <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                    @enderror--}}
{{--                </div>--}}

                <div class="form-group mb-3 col-md-4">
                    <label class="form-label" for="name_az">Name(AZ)</label>
                    <input type="text" class="form-control login_input  @error('name_az') is-invalid  @enderror" name="name_az" id="name_az" value="{{ old('name_az') }}">
                    @error('name_az')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3 col-md-4">
                    <label class="form-label" for="name_en">Name(EN)</label>
                    <input type="text" class="form-control login_input  @error('name_en') is-invalid  @enderror" name="name_en" id="name_en" value="{{ old('name_en') }}">
                    @error('name_en')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3 col-md-4">
                    <label class="form-label" for="name_ru">Name(RU)</label>
                    <input type="text" class="form-control login_input  @error('name_ru') is-invalid  @enderror" name="name_ru" id="name_ru" value="{{ old('name_ru') }}">
                    @error('name_ru')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="big_text_az">Long Text(Az)</label>
                    <textarea name="big_text_az" id="big_text_az" class="form-control @error('big_text_az') is-invalid  @enderror" cols="30" rows="4" >{{ old('big_text_az') }}</textarea>
                    @error('big_text_az')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="big_text_ru">Long Text(Ru)</label>
                    <textarea name="big_text_ru" id="big_text_ru" class="form-control @error('big_text_ru') is-invalid  @enderror" cols="30" rows="4" >{{ old('big_text_ru') }}</textarea>
                    @error('big_text_ru')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="big_text_en">Long Text(En)</label>
                    <textarea name="big_text_en" id="big_text_en" class="form-control @error('big_text_en') is-invalid  @enderror" cols="30" rows="4" >{{ old('big_text_en') }}</textarea>
                    @error('big_text_en')
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('big_text_az',{
                language: '{{ app()->getLocale() }}',
                filebrowserImageBrowseUrl: $('#rootUrl').val()+'/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: $('#rootUrl').val()+'/laravel-filemanager/upload?type=Images&_token={!! csrf_token() !!}',
                filebrowserBrowseUrl: $('#rootUrl').val()+'/laravel-filemanager?type=Files',
                filebrowserUploadUrl: $('#rootUrl').val()+'/laravel-filemanager/upload?type=Files&_token={!! csrf_token() !!}',
                toolbarGroups :[
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
                    { name: 'insert' },
                    { name: 'forms' },
                    { name: 'styles' },
                    { name: 'colors' },
                    { name: 'tools'}
                ],
            });

            CKEDITOR.replace('big_text_ru',{
                language: '{{ app()->getLocale() }}',
                filebrowserImageBrowseUrl: $('#rootUrl').val()+'/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: $('#rootUrl').val()+'/laravel-filemanager/upload?type=Images&_token={!! csrf_token() !!}',
                filebrowserBrowseUrl: $('#rootUrl').val()+'/laravel-filemanager?type=Files',
                filebrowserUploadUrl: $('#rootUrl').val()+'/laravel-filemanager/upload?type=Files&_token={!! csrf_token() !!}',
                toolbarGroups :[
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
                    { name: 'insert' },
                    { name: 'forms' },
                    { name: 'styles' },
                    { name: 'colors' },
                    { name: 'tools'}
                ],
            });

            CKEDITOR.replace('big_text_en',{
                language: '{{ app()->getLocale() }}',
                filebrowserImageBrowseUrl: $('#rootUrl').val()+'/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: $('#rootUrl').val()+'/laravel-filemanager/upload?type=Images&_token={!! csrf_token() !!}',
                filebrowserBrowseUrl: $('#rootUrl').val()+'/laravel-filemanager?type=Files',
                filebrowserUploadUrl: $('#rootUrl').val()+'/laravel-filemanager/upload?type=Files&_token={!! csrf_token() !!}',
                toolbarGroups :[
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                    { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
                    { name: 'insert' },
                    { name: 'forms' },
                    { name: 'styles' },
                    { name: 'colors' },
                    { name: 'tools'}
                ],
            });

        });
    </script>
@endsection
