<div>
    <section>
        {{$note->title ?? 'No title'}}
    </section>
    <section class="content-box">
    {!! $note->content ?? 'No content' !!}
    </section>
</div>