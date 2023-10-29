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
                    <a href="{{ route('blog.index') }}" class="btn login_btn btn_blue btn-margin btn-focus ">All</a>
                </div>

                <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data" class="mb-5 bg px-4">
                    @csrf
                    @method('PUT')


                    <div class="row">
                        <div class="row border px-2 py-2 my-3">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center justify-content-center">
                                        <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src">Photo(cover)</label>
                                        <input type="file" accept="image/*" onchange="loadFile(event)" hidden="" class="form-control @error('src') is-invalid  @enderror" id="src" name="src" value="{{ old('src') }}">
                                        @error('src')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-start">
                                        <img src="{{ asset('files/blog/'.$blog->src) }}"   class="all-img outputImg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center justify-content-center">
                                        <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src_big">Photo(Inner)</label>
                                        <input type="file" accept="image/*" onchange="loadFile2(event)" hidden="" class="form-control @error('src_big') is-invalid  @enderror" id="src_big" name="src_big" value="{{ old('src_big') }}">
                                        @error('src_big')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-start">
                                        <img src="{{ asset('files/blog/'.$blog->src_big) }}"   class="all-img outputImg2" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row border py-2 px-2 my-3">
                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="blog_date_az">Date (AZ)</label>
                                <input type="text" class="form-control login_input @error('blog_date_az') is-invalid  @enderror" name="blog_date_az" id="blog_date_az" value="{{ old('blog_date_az',$blog->blog_date_az) }}">
                                @error('text_1_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="blog_date_en">Date (EN)</label>
                                <input type="text" class="form-control login_input @error('blog_date_en') is-invalid  @enderror" name="blog_date_en" id="blog_date_en" value="{{ old('blog_date_en',$blog->blog_date_en) }}">
                                @error('blog_date_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="blog_date_ru">Date (RU)</label>
                                <input type="text" class="form-control login_input @error('blog_date_ru') is-invalid  @enderror" name="blog_date_ru" id="blog_date_ru" value="{{ old('blog_date_ru',$blog->blog_date_ru) }}">
                                @error('blog_date_ru')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="blog_title_az">Title (AZ)</label>
                                <input type="text" class="form-control login_input @error('blog_title_az') is-invalid  @enderror" name="blog_title_az" id="blog_title_az" value="{{ old('blog_title_az',$blog->blog_title_az) }}">
                                @error('blog_title_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="blog_title_en">Title (EN)</label>
                                <input type="text" class="form-control login_input @error('blog_title_en') is-invalid  @enderror" name="blog_title_en" id="blog_title_en" value="{{ old('blog_title_en',$blog->blog_title_en) }}">
                                @error('blog_title_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="text_2_ru">Title (RU)</label>
                                <input type="text" class="form-control login_input @error('blog_title_ru') is-invalid  @enderror" name="blog_title_ru" id="blog_title_ru" value="{{ old('blog_title_ru',$blog->blog_title_ru) }}">
                                @error('blog_title_ru')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="blog_text_az">Text (Az)</label>
                            <textarea name="blog_text_az" id="blog_text_az" class="form-control @error('blog_text_az') is-invalid  @enderror" cols="30" rows="4">{{ old('blog_text_az',$blog->blog_text_az) }}</textarea>
                            @error('blog_text_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="blog_text_en">Text (EN)</label>
                            <textarea name="blog_text_en" id="blog_text_en" class="form-control @error('blog_text_en') is-invalid  @enderror" cols="30" rows="4">{{ old('blog_text_en',$blog->blog_text_en) }}</textarea>
                            @error('blog_text_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="blog_text_ru">Text (Ru)</label>
                            <textarea name="blog_text_ru" id="blog_text_ru" class="form-control @error('blog_text_ru') is-invalid  @enderror" cols="30" rows="4">{{ old('blog_text_ru',$blog->blog_text_ru) }}</textarea>
                            @error('blog_text_ru')
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
