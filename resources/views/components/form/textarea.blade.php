<textarea @error('content') aria-invalid="true" @enderror wire:model="content" id="content" name="content" rows="5" placeholder="محتوای یادداشت"></textarea>
@error('content') <small id="invalid-helper">{{ $message }}</small> @enderror

@props(['name', 'error'=>false, 'placeholder'=>''])
<textarea @if ($error)
    aria-invalid="true"
    aria-describedby="invalid-{{$name}}"
    @endif
    wire:model="{{$name}}"
    placeholder="{{$placeholder}}">

@if ($error) <small id="invalid-{{$name}}">{{ $error }}</small> @endif