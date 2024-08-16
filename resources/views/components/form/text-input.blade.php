@props(['name', 'error'=>false, 'placeholder'=>''])
<input @if ($error)
    aria-invalid="true"
    aria-describedby="invalid-{{$name}}"
    @endif
    wire:model="{{$name}}"
    type="text" id="{{$name}}"
    placeholder="{{$placeholder}}">

@if ($error) <small id="invalid-{{$name}}">{{ $error }}</small> @endif