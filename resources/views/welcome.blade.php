<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baseline Laravel 11</title>
</head>
<body>
<div>
    <a href="/">/</a><br>
    <a href="/all-caps-each">/all-caps-each</a><br>
    <a href="/all-caps-map">/all-caps-map</a><br>
    <a href="/phping">/phping</a><br>
    <a href="/phpinfo">/phpinfo</a><br>
</div>
<main class="mt-6">
    <div>
        <div>Memory: {{ memory_get_usage()/(1024) }}</div>
    </div>
    Users: {{ $users->count() }}
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>
</main>
</body>
</html>
