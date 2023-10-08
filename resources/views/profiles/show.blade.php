<!-- User Profile View -->
<div class="user-profile">
    <img src="{{ $user->profile_image }}" alt="{{ $user->name }}'s Profile Picture">
    <h1>{{ $user->name }}</h1>
    <!-- Display other user details -->
</div>
<a href="{{ route('profile.show', $user) }}">My Profile</a>
