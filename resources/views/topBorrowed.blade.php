<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Borrowed Books</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 100%);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
            border-bottom: 3px solid #4a90e2;
            display: inline-block;
            padding-bottom: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: #4a90e2;
            color: #fff;
            margin: 15px 0;
            padding: 20px;
            border-radius: 8px;
            transition: background 0.3s, transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        li:hover {
            background: #6fa3ef;
            transform: translateY(-5px);
        }

        li strong {
            display: block;
            font-size: 1.5em;
        }

        li span {
            display: block;
            font-size: 1em;
            opacity: 0.8;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Top Borrowed Books</h1>
        <ul>
            @foreach ($books as $book)
            <a href="{{url("/books/".$book->slug)}}">
                <li>
                    <strong>{{ $book->title }}</strong>
                    <span>Borrowed {{ $book->total_borrowed }} times</span>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
</body>
</html>
