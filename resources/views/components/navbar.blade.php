<nav class="navbar">
    <a href="/dashboard?username{{ $username ?? ''}}"class="logo">AgroMart Pupuqu</a>
    <ul>
        <li><a href="/profile?username={{ $username ?? '' }}">Profile</a></li>
        <li><a href="/pengelolaan?username={{ $username ?? '' }}">Pengelolaan</a></li>
    </ul>
</nav>
