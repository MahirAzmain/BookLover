<!DOCTYPE html>
<html>
<head>
    <title>Top Searched Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        li:hover {
            background-color: #eaeaea;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        a:hover {
            color: #555;
        }
        strong {
            font-weight: bold;
        }
        span {
            color: #888;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Top Searched Books</h1>
        <ul>
            @foreach ($books as $book)
            <a href="{{ url("/books/".$book->slug) }}">
                <li>
                    <strong>{{ $book->title }}</strong>
                    <span>Searched {{ $book->total_search }} times</span>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
</body>
</html>

