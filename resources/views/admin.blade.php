<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Questions</title>
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
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 4px 8px #fff(232, 223, 223, 0.1);
            background-color: #ffffff;
            border-radius: 10px;
            text-align: center;
            border: 3px solid #CC403F
        }
        .question-card {
            border: 3px solid #0395B6;
            padding: 10px;
            margin: 10px 0;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.4);
            border-radius: 8px;
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
        <h1>Questions</h1>
        @foreach($questions as $question)
            <div class="question-card">
                <p>{{ $question->question }}</p>
            </div>
        @endforeach
        <div>
            <button onclick="prevQuestion()">Previous</button>
            <button onclick="nextQuestion()">Next</button>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const questions = document.querySelectorAll('.question-card');
        function showQuestion(index) {
            questions.forEach((q, i) => q.style.display = i === index ? 'block' : 'none');
        }
        function prevQuestion() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : questions.length - 1;
            showQuestion(currentIndex);
        }
        function nextQuestion() {
            currentIndex = (currentIndex < questions.length - 1) ? currentIndex + 1 : 0;
            showQuestion(currentIndex);
        }
        showQuestion(currentIndex);
    </script>
</body>
</html>
