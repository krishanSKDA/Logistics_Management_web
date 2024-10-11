<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BridgeWay Logistics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="img/flaticon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/flaticon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/flaticon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <style>
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        #webcrumbs {
            width: 100%;
            max-width: 700px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 24px;
            box-sizing: border-box;
            position: relative;
        }

        h1 {
            text-align: center;
            color: #0094c6;
            margin-bottom: 16px;
            font-size: 30px;
            font-family: sans-serif;
        }

        label {
            display: block;
            margin-bottom: 14px;
            font-weight: 500;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #0384B0;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            padding: 12px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #0094c6;
        }

        .optional {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>
    <div id="webcrumbs">
        <form action="{{ route('feedback.store') }}" method="POST" id="feedbackForm">
            @csrf
            <!-- Hidden input to identify the form -->
            <input type="hidden" name="form_type" value="feedback_form_1">

            <h1>Feedback Form</h1>

            <div>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Full Name" required />
            </div>

            <div>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Email Address" required />
            </div>

            <div>
                <label for="date">Date</label>
                <input type="date" id="date" name="date" placeholder="Date" required />
            </div>

            <div>
                <label for="review">Add Your Review</label>
                <textarea id="review" name="review" rows="3" placeholder="Your Review" required></textarea>
            </div>

            <div>
                <label for="additional-details" class="optional">Additional Details (optional)</label>
                <textarea id="additional-details" name="additional_details" rows="2"
                    placeholder="Additional Details"></textarea>
            </div>

            <div>
                <button type="submit">Submit Feedback</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Reset form after submission
            document.getElementById("feedbackForm").addEventListener("submit", function () {
                setTimeout(function () {
                    document.getElementById('feedbackForm').reset(); // Reset the form after submission
                }, 1000); // Delay to ensure the form submission is processed
            });
        });
    </script>
</body>

</html>