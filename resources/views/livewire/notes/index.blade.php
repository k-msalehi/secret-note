<div>
    <section>
        <a wire:navigate href="{{route('notes.create')}}">
            <button>+ افزودن یادداشت جدید</button>
        </a>
    </section>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">شناسه</th>
                    <th scope="col">زمان ایجاد</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">لینک مشاهده</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <td><a href="{{route('notes.edit', $note->id)}}">{{ $note->id }}</a></td>
                    <td><a title="{{$note->created_at}}" href="{{route('notes.edit', $note->id)}}"> {{ \Carbon\Carbon::parse($note->created_at)->diffForhumans() }}</a></td>
                    <td><a href="{{route('notes.edit', $note->id)}}">{{ $note->title }}</a></td>
                    <td>
                        <input readonly dir="ltr" type="text" value="{{route('notes.show', $note->id)}}">
                    </td>
                </tr>
                @endforeach
        </table>

        {{ $notes->links() }}
    </div>

</div>