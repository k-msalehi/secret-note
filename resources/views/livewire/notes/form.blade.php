<div>
    <header>
        <h1>{{ $head ?? '' }}</h1>
    </header>

    <form wire:submit="save">

        <x-form.text-input name="title" error="{{ $errors->first('title') }}" placeholder="عنوان یادداشت"></x-form.text-input>

        <textarea @error('content') aria-invalid="true" @enderror wire:model="content" id="content" name="content" rows="5" placeholder="محتوای یادداشت"></textarea>
        @error('content') <small id="invalid-helper">{{ $message }}</small> @enderror

        <button>ذخیره</button>
    </form>
</div>