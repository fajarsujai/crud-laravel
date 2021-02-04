@extends('layouts.app')

@section('content')
@include('layouts.headers.empty-cards')
<div class="table-responsive">
    <table class="table align-items-center table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Makanan</td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-sm btn-primary" href="{{ route('category.create') }}">Create</a>
</div>
@endsection

@push('js')

@endpush