<div class="container">
    <div class="mt-2 row">
        @foreach ($users as $user)
        <p>{{ $user->name }}</p>
        @endforeach
    </div>
</div>