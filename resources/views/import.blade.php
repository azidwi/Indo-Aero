<!DOCTYPE html>
<html>
    <head>
        <title>Import Excel</title>
    </head>
    <body>
        <h2>Import Aircraft Parts</h2>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <form action="/import" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit">
                Import
            </button>
        </form>
    </body>
</html>