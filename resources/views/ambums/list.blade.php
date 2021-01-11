@extends('layouts.app')

@section('title', 'Ambum')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            Ambum
        </div>
        <div class="card-header">
            <a href="{{ route('ambums.create') }}" class="btn btn-primary">{{ __('messages.add') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>{{ __('messages.music_name') }}</th>
                        <th>{{ __('messages.singer_album') }}</th>
                        <th>{{ __('messages.image') }}</th>
                        <th>{{ __('messages.number_album') }}</th>
                        <th>{{ __('messages.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ambums as $key => $ambum)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>
                                {{ $ambum->name_ambum }}

                            </td>
                            <td>{{ $ambum->singer_ambum }}</td>
                            <td>
                                <img src="{{ url('storage/' . $ambum->image) }}" height="100px"
                                     width="100px">
                            </td>
                            <td>{{ count($ambum->playlist) }}</td>
                            <td>
                                <a href="{{ route('ambums.edit', $ambum->id) }}"
                                   class="btn btn-success">{{ __('messages.update') }}</a>
                                <a href="{{ route('ambums.destroy', $ambum->id) }}"
                                   class="btn btn-danger"
                                   onclick="return confirm('Do you delete?')">{{ __('messages.delete') }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
