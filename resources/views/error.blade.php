@if ($errors->any())
<div class="note note-danger">
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</div>
@endif
