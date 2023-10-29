@extends('back.layout.master')

@section('meta')

@endsection

@section('title') Options @endsection

@section('css')

@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')

        <div class="content">
            <div class="mb-3 col-md-8 offset-md-2">
                <form action="{{ route('option.store') }}" method="POST" class="bg px-4 py-2" enctype="multipart/form-data">
                    @csrf
                    <div class="adminmenu">
                        <ul class="nav nav-tabs mb-3 justify-content-evenly px-2 py-2 border-0" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a
                                        class="nav-link border-0 px-5 active"
                                        id="ex1-tab-1"
                                        data-bs-toggle="tab"
                                        href="#ex1-tabs-1"
                                        role="tab"
                                        aria-controls="ex1-tabs-1"
                                        aria-selected="true"
                                >Socials</a
                                >
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                        class="nav-link border-0"
                                        id="ex1-tab-2"
                                        data-bs-toggle="tab"
                                        href="#ex1-tabs-2"
                                        role="tab"
                                        aria-controls="ex1-tabs-2"
                                        aria-selected="false"
                                >Others</a
                                >
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                        class="nav-link border-0"
                                        id="ex1-tab-3"
                                        data-bs-toggle="tab"
                                        href="#ex1-tabs-3"
                                        role="tab"
                                        aria-controls="ex1-tabs-3"
                                        aria-selected="false"
                                >Haqqimizda</a
                                >
                            </li>
                            <li class="nav-item" role="presentation">
                                <a
                                    class="nav-link border-0"
                                    id="ex1-tab-4"
                                    data-bs-toggle="tab"
                                    href="#ex1-tabs-4"
                                    role="tab"
                                    aria-controls="ex1-tabs-4"
                                    aria-selected="false"
                                >Logo</a
                                >
                            </li>

                        </ul>
                        <div class="tab-content" id="ex1-content">
                            <div
                                    class="tab-pane fade show active"
                                    id="ex1-tabs-1"
                                    role="tabpanel"
                                    aria-labelledby="ex1-tab-1"
                            >
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="facebook">Facebook</label>
                                        <input type="text" class="form-control login_input @error('facebook') is-invalid  @enderror" id="facebook" name="facebook" value="{{ old('facebook',\App\Helpers\Options::getOption('facebook')) }}">
                                        @error('facebook')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="instagram">Instagram</label>
                                        <input type="text" class="form-control login_input @error('instagram') is-invalid  @enderror" id="instagram" name="instagram" value="{{ old('instagram',\App\Helpers\Options::getOption('instagram')) }}">
                                        @error('instagram')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="linkedin">Linkedin</label>
                                        <input type="text" class="form-control login_input @error('linkedin') is-invalid  @enderror" id="linkedin" name="linkedin" value="{{ old('linkedin',\App\Helpers\Options::getOption('linkedin')) }}">
                                        @error('linkedin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="vkontakte">Vkontakte</label>
                                        <input type="text" class="form-control login_input @error('vkontakte') is-invalid  @enderror" id="vkontakte" name="vkontakte" value="{{ old('vkontakte',\App\Helpers\Options::getOption('vkontakte')) }}">
                                        @error('vkontakte')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="maplink">Map</label>
                                        <input type="text" class="form-control login_input @error('maplink') is-invalid  @enderror" id="maplink" name="maplink" value="{{ old('vkontakte',\App\Helpers\Options::getOption('maplink')) }}">
                                        @error('maplink')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="github">Github</label>
                                        <input type="text" class="form-control login_input @error('github') is-invalid  @enderror" id="github" name="github" value="{{ old('github',\App\Helpers\Options::getOption('github')) }}">
                                        @error('github')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="youtube">Youtube</label>
                                        <input type="text" class="form-control login_input @error('youtube') is-invalid  @enderror" id="youtube" name="youtube" value="{{ old('youtube',\App\Helpers\Options::getOption('youtube')) }}">
                                        @error('youtube')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="tel">Telefon</label>
                                        <input type="text" class="form-control login_input @error('tel') is-invalid  @enderror" id="tel" name="tel" value="{{ old('tel',\App\Helpers\Options::getOption('tel')) }}">
                                        @error('tel')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="deliverytimer">Çatdırılma saatları</label>
                                        <input type="text" class="form-control login_input @error('deliverytimer') is-invalid  @enderror" id="deliverytimer" name="deliverytimer" value="{{ old('deliverytimer',\App\Helpers\Options::getOption('deliverytimer')) }}">
                                        @error('deliverytimer')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="cafetimer">Kafenin iş saatları:</label>
                                        <input type="text" class="form-control login_input @error('cafetimer') is-invalid  @enderror" id="cafetimer" name="cafetimer" value="{{ old('cafetimer',\App\Helpers\Options::getOption('cafetimer')) }}">
                                        @error('cafetimer')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="minimumorderaz">Minimum sifariş:(AZ)</label>
                                        <textarea name="minimumorderaz" id="minimumorderaz" class="form-control @error('minimumorderaz') is-invalid  @enderror" cols="30" rows="4">{{ old('minimumorderaz',\App\Helpers\Options::getOption('minimumorderaz')) }}</textarea>
                                        @error('minimumorderaz')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="minimumorderen">Minimum sifariş:(EN)</label>
                                        <textarea name="minimumorderen" id="minimumorderen" class="form-control @error('minimumorderen') is-invalid  @enderror" cols="30" rows="4">{{ old('minimumorderen',\App\Helpers\Options::getOption('minimumorderen')) }}</textarea>
                                        @error('minimumorderen')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="minimumorderu">Minimum sifariş:(RU)</label>
                                        <textarea name="minimumorderu" id="minimumorderu" class="form-control @error('minimumorderu') is-invalid  @enderror" cols="30" rows="4">{{ old('minimumorderu',\App\Helpers\Options::getOption('minimumorderu')) }}</textarea>
                                        @error('minimumorderu')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="unvanaz">Adress az</label>
                                        <input type="text" class="form-control login_input @error('unvanaz') is-invalid  @enderror" id="unvanaz" name="unvanaz" value="{{ old('unvanaz',\App\Helpers\Options::getOption('unvanaz')) }}">
                                        @error('unvanaz')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="unvanru">Adress ru</label>
                                        <input type="text" class="form-control login_input @error('unvanru') is-invalid  @enderror" id="unvanru" name="unvanru" value="{{ old('unvanru',\App\Helpers\Options::getOption('unvanru')) }}">
                                        @error('unvanru')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="unvanen">Adress en</label>
                                        <input type="text" class="form-control login_input @error('unvanen') is-invalid  @enderror" id="unvanen" name="unvanen" value="{{ old('unvanen',\App\Helpers\Options::getOption('unvanen')) }}">
                                        @error('unvanen')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="email">E-Poçt</label>
                                        <input type="text" class="form-control login_input @error('email') is-invalid  @enderror" id="email" name="email" value="{{ old('email',\App\Helpers\Options::getOption('email')) }}">
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="youtubelink">Youtube Link</label>
                                        <input type="text" class="form-control login_input @error('youtubelink') is-invalid  @enderror" id="youtubelink" name="youtubelink" value="{{ old('youtubelink',\App\Helpers\Options::getOption('youtubelink')) }}">
                                        @error('youtubelink')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="haqqimizda_az">Haqqımızda(AZ)</label>
                                        <textarea name="haqqimizda_az" id="haqqimizda_az" class="form-control @error('haqqimizda_az') is-invalid  @enderror" cols="30" rows="4">{{ old('haqqimizda_az',\App\Helpers\Options::getOption('haqqimizda_az')) }}</textarea>
                                        @error('haqqimizda_az')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="haqqimizda_en">Haqqımızda(EN)</label>
                                        <textarea name="haqqimizda_en" id="haqqimizda_en" class="form-control @error('haqqimizda_en') is-invalid  @enderror" cols="30" rows="4">{{ old('haqqimizda_en',\App\Helpers\Options::getOption('haqqimizda_en')) }}</textarea>
                                        @error('haqqimizda_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="haqqimizda_ru">Haqqımızda(RU)</label>
                                        <textarea name="haqqimizda_ru" id="haqqimizda_ru" class="form-control @error('haqqimizda_ru') is-invalid  @enderror" cols="30" rows="4">{{ old('haqqimizda_ru',\App\Helpers\Options::getOption('haqqimizda_ru')) }}</textarea>
                                        @error('haqqimizda_ru')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <hr class="mt-3" />
                                    <div class="row">
                                        <div class="col-12 border-1 p-20">
                                            <div class="row">
                                                <div class="form-group mb-3 col-3">
                                                    <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src_about">Photo</label>
                                                    <input type="file" accept="image/*" onchange="loadFile(event)" hidden="" class="form-control @error('src_about') is-invalid  @enderror" id="src_about" name="src_about" value="{{ old('src_about') }}">
                                                    @error('src_about')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-9 d-flex justify-content-center align-items-center">
                                                    <img src="{{ asset('files/about/'.\App\Helpers\Options::getOption('src_about')) }}" alt="" class="all-img outputImg w-40">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                                <div class="row">
                                    <div class="form-group mb-3 col-3">
                                        <label class="form-label form-label-photo photo-margin  text-bg-info fw-bold text-center" for="src_about_2">Logo</label>
                                        <input type="file" accept="image/*" onchange="loadFile2(event)" hidden="" class="form-control @error('src_about_2') is-invalid  @enderror" id="src_about_2" name="src_about_2" value="{{ old('src_about_2') }}">
                                        @error('src_about_2')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-9 d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('files/about/'.\App\Helpers\Options::getOption('src_about_2')) }}" alt="" class="all-img outputImg2 w-40">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group  global_buttons">
                        <button class="btn login_btn btn_blue btn-margin btn-focus " type="submit">Əlavə et</button>
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
            CKEDITOR.replace('haqqimizda_az',{
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

            CKEDITOR.replace('haqqimizda_en',{
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

            CKEDITOR.replace('haqqimizda_ru',{
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

