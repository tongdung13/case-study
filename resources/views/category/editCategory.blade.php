@extends('layouts.app')

@section('title', 'Edit Country')

@section('content')

    <div class="container">
        <form method="POST" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">NAME</span>
                <input type="text" name="category_name" value="{{ $category->category_name }}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>

    </div>

@endsection
