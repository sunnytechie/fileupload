@extends('components.layouts.app')
@section('content')
<div>
    <form wire:submit.prevent="updatedVideo">
        <input type="file" wire:model="video">
        @error('video') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Upload Video</button>
    </form>
</div>
@endsection
