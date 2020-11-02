@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <h1>Edit Profile</h1>
        </div>
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

            @if ( $errors->has('title') )
                <strong>{{ $errors->first('title') }}</strong>
            @endif
        </div>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

            @if ( $errors->has('description') )
                <strong>{{ $errors->first('description') }}</strong>
            @endif
        </div>
        <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label">{{ __('Url') }}</label>
            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

            @if ( $errors->has('url') )
                <strong>{{ $errors->first('url') }}</strong>
            @endif
        </div>
        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Profile Image</label>
            <input type="file" class="form-control-file" id="image" name="image"/>

            @if ( $errors->has('image') )
                <strong>{{ $errors->first('image') }}</strong>
            @endif
        </div>

        <div class="row pt-4">
            <button class="button btn-primary">Save profile</button>
        </div>
    </form>
</div>
@endsection
