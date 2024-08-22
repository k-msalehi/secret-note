<div>
    <header>
        <h1>{{ $head ?? '' }}</h1>
    </header>

    <form wire:submit="save">
        <x-form.text-input name="title" error="{{ $errors->first('title') }}" placeholder="عنوان یادداشت"></x-form.text-input>

        <input x-show="{{$noteAddr}}" readonly dir="ltr" type="text" value="{{$noteAddr}}" >

        <textarea dir="ltr" @error('content') aria-invalid="true" @enderror wire:model="content" id="content" name="content" rows="5" placeholder="محتوای یادداشت"></textarea>
        @error('content') <small id="invalid-helper">{{ $message }}</small> @enderror

        <input type="checkbox" wire:model="onlyAuthor" id="onlyAuthor" name="onlyAuthor">
        <label for="onlyAuthor">فقط برای نویسنده قابل مشاهده باشد.</label>
        <hr>
        <button>ذخیره</button>
    </form>
</div>