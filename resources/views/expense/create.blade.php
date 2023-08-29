@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}/expenses" method="POST" class="mb-4">
                @csrf
                <div class="form-group mb-4">
                    <label for="title">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{ old('description') }}">
                </div>
                <div class="form-group mb-4">
                    <label for="title">Amount:</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Type a amount" value="@if($errors->any()){{ old('amount') }}@else{{ 0 }}@endif">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
