@extends('back.layout.master')

@section('title') Products @endsection

@section('css')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')

        <div class="content">
            <div class="mb-3 col-md-8 offset-md-2">
                <table class="table table-vcenter table-mobile-md card-table">
                    <thead style="cursor: ">
                    <tr>
                        <th>Site tipe</th>
                        <th>Adı</th>
                        <th>Tel no</th>
                    </tr>
                    </thead>
                    <tbody id="services">
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->site_type }}</td>
                                <td>{{ $contact->full_name }}</td>
                                <td>{{ $contact->tel }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $contacts->links('vendor.pagination.bootstrap-4') !!}
            </div>
        </div>
        @include('back.includes.footer')
    </div>
@endsection

@section('js')

@endsection
