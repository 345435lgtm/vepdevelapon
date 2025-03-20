<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Паралельне та послідовне виконання запитів</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .results {
            margin-top: 20px;
        }
        .results div {
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h1>Паралельне та послідовне виконання запитів</h1>
    <div id="results" class="results"></div>

    <script>
        function fetchData(id) {
            return new Promise((resolve) => {
                const delay = Math.floor(Math.random() * 2000) + 1000;
                setTimeout(() => {
                    resolve(`Дані для id: ${id}, отримані через ${delay} мс`);
                }, delay);
            });
        }

        async function processData() {
            const resultsDiv = document.getElementById('results');
            
            const parallelHeader = document.createElement('div');
            parallelHeader.textContent = "Паралельне виконання:";
            resultsDiv.appendChild(parallelHeader);

            const parallelResults = await Promise.all([fetchData(1), fetchData(2), fetchData(3)]);
            parallelResults.forEach(result => {
                const resultDiv = document.createElement('div');
                resultDiv.textContent = result;
                resultsDiv.appendChild(resultDiv);
            });

            const sequentialHeader = document.createElement('div');
            sequentialHeader.textContent = "Послідовне виконання:";
            resultsDiv.appendChild(sequentialHeader);

            const ids = [4, 5, 6];
            for await (const result of ids.map(id => fetchData(id))) {
                const resultDiv = document.createElement('div');
                resultDiv.textContent = result;
                resultsDiv.appendChild(resultDiv);
            }
        }
        processData();
    </script>
</body>
</html>
