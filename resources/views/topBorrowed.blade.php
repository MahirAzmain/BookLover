<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Borrowed Books</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f8ffae 0%, #43c6ac 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            width: 90%;
            padding: 20px;
            background: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
            border-bottom: 3px solid #ffa69e;
            display: inline-block;
            padding-bottom: 10px;
            font-family: 'Georgia', serif;
            letter-spacing: 1px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: #ffa69e;
            color: #fff;
            margin: 15px 0;
            padding: 20px;
            border-radius: 8px;
            transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            overflow: hidden;
            position: relative;
        }

        li:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.4);
            transition: left 0.3s;
        }

        li:hover:before {
            left: 0;
        }

        li:hover {
            background: #ff7e5f;
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        li strong {
            display: block;
            font-size: 1.5em;
            margin-bottom: 5px;
            color: #fff; /* Increased brightness for better contrast */
        }

        li span {
            display: block;
            font-size: 1em;
            opacity: 1; /* Increased opacity for better readability */
            color: #f0f0f0; /* Increased brightness for better contrast */
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
