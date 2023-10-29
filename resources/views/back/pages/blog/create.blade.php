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
                    <a href="{{ route('blog.index') }}" class="btn login_btn">All</a>
                </div>

                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="mb-5 bg px-4">
                    @csrf
                    <div class="row">
                        <div class="form-group mb-3 my-2 col-6 d-flex justify-content-center">
                            <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src">Photo (Cover)</label>
                            <input type="file" accept="image/*" hidden="" class="form-control @error('src') is-invalid  @enderror" id="src" name="src" value="{{ old('src') }}">
                            @error('src')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-6 d-flex justify-content-center">
                            <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src_big">Photo (Inner)</label>
                            <input type="file" accept="image/*" hidden="" class="form-control @error('src_big') is-invalid  @enderror" id="src_big" name="src_big" value="{{ old('src_big') }}">
                            @error('src_big')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr class="mt-4" />

                        <div class="form-group mb-3 col-4">
                            <label class="form-label" for="blog_date_az">Date Az</label>
                            <input type="text" class="form-control login_input @error('blog_date_az') is-invalid  @enderror" id="blog_date_az" name="blog_date_az" value="{{ old('blog_date_az') }}">
                            @error('blog_date_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-4">
                            <label class="form-label" for="blog_date_ru">Date Ru</label>
                            <input type="text" class="form-control login_input @error('blog_date_ru') is-invalid  @enderror" id="blog_date_ru" name="blog_date_ru" value="{{ old('blog_date_ru') }}">
                            @error('blog_date_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-4">
                            <label class="form-label" for="blog_date_en">Date En</label>
                            <input type="text" class="form-control  login_input @error('blog_date_en') is-invalid  @enderror" id="blog_date_en" name="blog_date_en" value="{{ old('blog_date_en') }}">
                            @error('blog_date_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="blog_title_az">Title Az</label>
                            <input type="text" class="form-control login_input @error('blog_title_az') is-invalid  @enderror" id="blog_title_az" name="blog_title_az" value="{{ old('blog_title_az') }}">
                            @error('blog_title_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="blog_title_ru">Title Ru</label>
                            <input type="text" class="form-control login_input @error('blog_title_ru') is-invalid  @enderror" id="blog_title_ru" name="blog_title_ru" value="{{ old('blog_title_ru') }}">
                            @error('blog_title_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="blog_title_en">Title (En)</label>
                            <input type="text" class="form-control login_input @error('blog_title_en') is-invalid  @enderror" name="blog_title_en" id="blog_title_en" value="{{ old('blog_title_en') }}">
                            @error('blog_title_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label class="form-label" for="blog_text_az">Text (Az)</label>
                            <textarea name="blog_text_az" id="blog_text_az" class="form-control @error('blog_text_az') is-invalid  @enderror" cols="30" rows="4" >{{ old('blog_text_az') }}</textarea>
                            @error('blog_text_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="blog_text_ru">Text (Ru)</label>
                            <textarea name="blog_text_ru" id="blog_text_ru" class="form-control @error('blog_text_ru') is-invalid  @enderror" cols="30" rows="4" >{{ old('blog_text_ru') }}</textarea>
                            @error('blog_text_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="blog_text_en">Text (En)</label>
                            <textarea name="blog_text_en" id="blog_text_en" class="form-control @error('blog_text_en') is-invalid  @enderror" cols="30" rows="4" >{{ old('blog_text_en') }}</textarea>
                            @error('blog_text_en')
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
            CKEDITOR.replace('blog_text_az',{
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

            CKEDITOR.replace('blog_text_ru',{
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

            CKEDITOR.replace('blog_text_en',{
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
