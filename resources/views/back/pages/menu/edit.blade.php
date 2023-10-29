@extends('back.layout.master')

@section('title') Menu @endsection

@section('css')

@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')

        <div class="content m-3">
            <div class="mb-3 col-md-10 offset-md-1">
                <div class="d-flex justify-content-center align-items-center mb-4">
                    <a href="{{ route('menu.index') }}" class="btn login_btn btn_blue btn-margin btn-focus ">All</a>
                </div>

                <form action="{{ route('menu.update',$menu->id) }}" method="POST" enctype="multipart/form-data" class="mb-5 bg px-4">
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
                                        <img src="{{ asset('files/menu/'.$menu->src) }}"   class="all-img outputImg" alt="">
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
                                        <img src="{{ asset('files/menu/'.$menu->src_big) }}"   class="all-img outputImg2" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group mb-3 col-md-12">
                            <label class="form-label" for="service_id">Servis</label>
                            <select name="service_id" id="service_id" class="form-control @error('title_az') is-invalid  @enderror">
                                <option value="">Birini seçin</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ $service->id == old('service_id',$menu->service_id) ? 'selected' : '' }}>{{ $service->name_az }}</option>
                                @endforeach
                            </select>
                            @error('service_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row border py-2 px-2 my-3">
                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="menu_date_az">Date (AZ)</label>
                                <input type="text" class="form-control login_input @error('menu_date_az') is-invalid  @enderror" name="menu_date_az" id="menu_date_az" value="{{ old('menu_date_az',$menu->menu_date_az) }}">
                                @error('menu_date_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="menu_date_en">Date (EN)</label>
                                <input type="text" class="form-control login_input @error('menu_date_en') is-invalid  @enderror" name="menu_date_en" id="menu_date_en" value="{{ old('menu_date_en',$menu->menu_date_en) }}">
                                @error('menu_date_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="menu_date_ru">Date (RU)</label>
                                <input type="text" class="form-control login_input @error('menu_date_ru') is-invalid  @enderror" name="menu_date_ru" id="menu_date_ru" value="{{ old('menu_date_ru',$menu->menu_date_ru) }}">
                                @error('menu_date_ru')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="menu_title_az">Title (AZ)</label>
                                <input type="text" class="form-control login_input @error('menu_title_az') is-invalid  @enderror" name="menu_title_az" id="menu_title_az" value="{{ old('menu_title_az',$menu->menu_title_az) }}">
                                @error('menu_title_az')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="menu_title_en">Title (EN)</label>
                                <input type="text" class="form-control login_input @error('menu_title_en') is-invalid  @enderror" name="menu_title_en" id="menu_title_en" value="{{ old('menu_title_en',$menu->menu_title_en) }}">
                                @error('menu_title_en')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3 col-md-4">
                                <label class="form-label" for="menu_title_ru">Title (RU)</label>
                                <input type="text" class="form-control login_input @error('menu_title_ru') is-invalid  @enderror" name="menu_title_ru" id="menu_title_ru" value="{{ old('menu_title_ru',$menu->menu_title_ru) }}">
                                @error('menu_title_ru')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="menu_text_az">Text (Az)</label>
                            <textarea name="menu_text_az" id="menu_text_az" class="form-control @error('menu_text_az') is-invalid  @enderror" cols="30" rows="4">{{ old('menu_text_az',$menu->menu_text_az) }}</textarea>
                            @error('menu_text_az')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="menu_text_en">Text (EN)</label>
                            <textarea name="menu_text_en" id="menu_text_en" class="form-control @error('menu_text_en') is-invalid  @enderror" cols="30" rows="4">{{ old('menu_text_en',$menu->menu_text_en) }}</textarea>
                            @error('menu_text_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="menu_text_ru">Text (Ru)</label>
                            <textarea name="menu_text_ru" id="menu_text_ru" class="form-control @error('menu_text_ru') is-invalid  @enderror" cols="30" rows="4">{{ old('menu_text_ru',$menu->menu_text_ru) }}</textarea>
                            @error('menu_text_ru')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="gram">Gram</label>
                            <input type="text" class="form-control login_input @error('gram') is-invalid  @enderror" name="gram" id="gram" value="{{ old('gram',$menu->gram) }}">
                            @error('gram')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="price">Price</label>
                            <input type="text" class="form-control login_input @error('price') is-invalid  @enderror" name="price" id="price" value="{{ old('price',$menu->price) }}">
                            @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="protein">Protein</label>
                            <input type="text" class="form-control login_input @error('protein') is-invalid  @enderror" name="protein" id="protein" value="{{ old('protein',$menu->protein) }}">
                            @error('protein')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="oils">Oils</label>
                            <input type="text" class="form-control login_input @error('oils') is-invalid  @enderror" name="oils" id="oils" value="{{ old('oils',$menu->oils) }}">
                            @error('oils')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="carbohydrates">Carbohydrates</label>
                            <input type="text" class="form-control login_input @error('oils') is-invalid  @enderror" name="carbohydrates" id="carbohydrates" value="{{ old('carbohydrates',$menu->carbohydrates) }}">
                            @error('carbohydrates')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label class="form-label" for="kcal">Kcal</label>
                            <input type="text" class="form-control login_input @error('kcal') is-invalid  @enderror" name="kcal" id="kcal" value="{{ old('kcal',$menu->kcal) }}">
                            @error('kcal')
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
            CKEDITOR.replace('menu_text_az',{
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

            CKEDITOR.replace('menu_text_ru',{
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

            CKEDITOR.replace('menu_text_en',{
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
