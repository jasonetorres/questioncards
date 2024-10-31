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
            background-image: url('images/questions.png');
            background-size: cover;
            background-position: center;
        }
        #card-container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(232, 223, 223, 0.1);
            background-color: #ffffff;
            border-radius: 10px;
            text-align: center;
            border: 3px solid #CC403F;
        }
        textarea {
            width: 85%;
            height: 50px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            resize: none;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
        }
        button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            background-color: #6F1FD8;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="card-container">
        <h1>Drop Your Question</h1>
        <form id="question-form" action="/questions" method="POST">
            @csrf
            <textarea id="question-input" name="question" placeholder="Your question here..." required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <script>
        // Add event listener to the textarea for the Enter key
        document.getElementById('question-input').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Prevent the default action (new line)
                document.getElementById('question-form').submit(); // Submit the form
            }
        });
    </script>
</body>
</html>
