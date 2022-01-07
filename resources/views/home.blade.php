@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-end">
                        <button class="btn btn-primary mb-3">Transfer Money</button>
                    </div>
                    <table class="table table-striped table-bordered table-responsive">
                        <thead>
                            <td>Sr No.</td>
                            <td>Name</td>
                            <td>Surname</td>
                            <td>Bank Name</td>
                            <td>Cash</td>
                        </thead>
                        @foreach($passbook as $key => $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->surname }}</td>
                                <td>{{ $value->bank_name }}</td>
                                <td>{{ $value->cash }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
