<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Question</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
            .background-image {
            background-image: url('/questions.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            }
        }
        #card-container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            text-align: center;
        }
        button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="card-container">
        <h1>Drop Your Question</h1>
        <form action="/questions" method="POST">
        @csrf
        <textarea name="question" placeholder="Your question here..." required></textarea>
        </form>
        <button type="submit">Submit</button>
    </div>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>
