<!-- resources/views/excel-import.blade.php -->

@extends('welcome')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <h1>Examination Result Upload </h1>
    <form action="{{ route('result.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group  " style="width: 50%">
            <label for="file">Choose Excel File</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="form-group" style="width: 50%">
            <input  type="password" required name="password" placeholder="*************** " class="form-control" >
        </div>
        <button type="submit" class="btn btn-danger">Import</button><br>
    </form>
</div><br><br>
@endsection
