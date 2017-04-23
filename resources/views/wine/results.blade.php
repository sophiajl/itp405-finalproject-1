<!DOCTYPE html>

<html>

<head>
    <title>Wine List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    @if (session('successStatus'))
        <div class="alert alert-success" role="alert">
            {{ session('successStatus') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Wine Name</th>
            <th>Wine Type</th>
            <th colspan="2">Year</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($wine as $w)
            <tr>
                <td>{{ $w->name }}</td>
                <td>{{ $w->wine_type_id }}</td>
                <td>{{ $w->year }}</td>
                {{--<td>--}}
                    {{--<a href="/songs/{{ $song->id }}/delete" class="btn">Delete</a>--}}
                    {{--<button type="button" class="btn-link">Delete</button>--}}
                    {{--<span> | </span>--}}
                    {{--<a href="/songs/{{ $song->id }}/edit">Edit</a>--}}
                {{--</td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>

</html>