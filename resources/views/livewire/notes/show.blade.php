<div>
    <section>
        {{$note->title ?? 'No title'}}
    </section>
    <section class="content-box">
    {!! nl2br($note->content) ?? 'No content' !!}
    </section>
</div>