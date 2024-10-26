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
            background-color: #f4f4f9;
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
        .question-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
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
    <div id="question-container">
        <h1>Questions</h1>
        @foreach($questions as $question)
            <div class="question-card">
                <p>{{ $question->question }}</p>
            </div>
        @endforeach
    </div>
    <div>
        <button onclick="prevQuestion()">Previous</button>
        <button onclick="nextQuestion()">Next</button>
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
