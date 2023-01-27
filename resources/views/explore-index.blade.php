<x-layout>

<div class="container py-md-5 container--narrow">
    <h1 class="display-3">Explore</h1>

    <h2 class="mt-4">Top Talkers</h2>

    <div class="list-group">
        @foreach($top5 as $user)
            <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <a href="/profile/{{ $user->username }}" class="">
                    <img class="avatar-tiny" src="{{ $user->avatar }}" />
                    <strong>{{ $user->username }}</strong> has made {{ $user->posts_count }} {{ Str::plural( 'post', $user->posts_count ) }}
                </a>
                @if(auth()->user()->id !== $user->id && !auth()->user()->isFollowing($user))
                <form class="ml-auto d-inline" action="/create-follow/{{ $user->username }}" method="POST">
                    @csrf
                    <button class="btn btn-primary btn-sm">Follow <i class="fas fa-user-plus"></i></button>
                </form>
                @elseif(!auth()->user()->isFollowing($user))
                <form class="ml-auto d-inline" action="/remove-follow/{{ $user->username }}" method="POST">
                    @csrf
                    <button class="btn btn-primary btn-sm">Unfollow <i class="fas fa-user-minus"></i></button>
                </form>
                @endif
            </div>
        @endforeach
    </div>

    <h2 class="mt-4">Find Friends</h2>

    <div class="list-group">
        @foreach($users as $user)
            <a href="/profile/{{ $user->username }}" class="list-group-item list-group-item-action">
                <img class="avatar-tiny" src="{{ $user->avatar }}" />
                <strong>{{ $user->username }}</strong>
            </a>
        @endforeach
    </div>
</div>

</x-layout>
