<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Top Searched Books</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        h1 {
            color: #ff6347;
            font-size: 2.5em;
            margin-bottom: 20px;
            border-bottom: 3px solid #ff6347;
            display: inline-block;
            padding-bottom: 10px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 15px;
            padding: 20px;
            background: #ffe5d9;
            border-radius: 12px;
            transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            position: relative;
        }
        li:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transition: left 0.3s;
        }
        li:hover:before {
            left: 0;
        }
        li:hover {
            background: #ffab91;
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        a {
            text-decoration: none;
            color: inherit;
            display: block;
        }
        a:hover {
            color: #ff6347;
        }
        strong {
            font-size: 1.5em;
        }
        span {
            color: #666;
            margin-left: 15px;
            font-size: 1em;
        }
        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }
            h1 {
                font-size: 2em;
            }
            li {
                padding: 15px;
            }
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
