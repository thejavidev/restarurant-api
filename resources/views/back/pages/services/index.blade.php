@extends('back.layout.master')

@section('title') Services @endsection

@section('css')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')

        <div class="content">
            <div class="mb-3 col-md-8 offset-md-2">
                <div class="global_buttons">
                    <a href="{{ route('services.create') }}" class="btn login_btn btn-focus ">Add</a>
                </div>

                <table class="table table-vcenter table-mobile-md card-table bg px-4 py-4">
                    <thead >
                    <tr>
                        <th class="text-center">Name</th>


                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody id="services">
                    @foreach($services as $service)
                        <tr>

                            <td class="text-center">{{ $service->name_az }}</td>

                            <td>
                                <div class="btn-list align-items-center justify-content-center">
                                    <a href="{{ route('services.edit',$service->id) }}" class="btn btn-blue"><i class="fa fa-pen"></i></a>
                                    <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-red" type="submit" onclick="return confirm('You are sure you want to delete it?')"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('back.includes.footer')
    </div>
@endsection

@section('js')

@endsection
