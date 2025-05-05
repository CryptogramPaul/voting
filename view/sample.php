<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Voting Layout</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f4f6f8;
        margin: 0;
        padding: 2rem;
    }

    .tabs {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .tab {
        padding: 0.5rem 1.5rem;
        border-radius: 999px;
        border: 2px solid #ccc;
        cursor: pointer;
        background: #fff;
        transition: background 0.3s, color 0.3s, border-color 0.3s;
        font-weight: 500;
    }

    .tab.active-liberal {
        background: #16a34a;
        color: #fff;
        border-color: #16a34a;
    }

    .tab.active-smart {
        background: #4f46e5;
        color: #fff;
        border-color: #4f46e5;
    }

    h2 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: #333;
    }

    .container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .card {
        background: #fff;
        border-radius: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        display: flex;
        flex-direction: column;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.5s forwards;
    }

    .card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .card:nth-child(4) {
        animation-delay: 0.4s;
    }

    .card:nth-child(5) {
        animation-delay: 0.5s;
    }

    .card:nth-child(6) {
        animation-delay: 0.6s;
    }

    .card:nth-child(7) {
        animation-delay: 0.7s;
    }

    .card:nth-child(8) {
        animation-delay: 0.8s;
    }

    .card:nth-child(9) {
        animation-delay: 0.9s;
    }

    .card:nth-child(10) {
        animation-delay: 1s;
    }

    .card:nth-child(11) {
        animation-delay: 1.1s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card h3 {
        margin: 0 0 1rem;
        font-size: 1.2rem;
        color: #222;
    }

    .option {
        background: #f0f2f5;
        border-radius: 0.5rem;
        padding: 0.5rem 1rem;
        margin-bottom: 0.5rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        transition: background 0.3s, transform 0.2s;
        border-left: 5px solid transparent;
    }

    .option[data-party="liberal"] {
        border-left-color: #16a34a;
        background-color: #ecfdf5;
    }

    .option[data-party="smart"] {
        border-left-color: #4f46e5;
        background-color: #eef2ff;
    }

    .option input[type="radio"] {
        margin-right: 0.5rem;
    }

    .option:hover {
        background: #e0e7ff;
        transform: scale(1.05);
    }

    .option input[type="radio"]:checked+span {
        font-weight: 600;
        color: #4f46e5;
    }

    .submit-btn {
        margin: 2rem auto 0;
        display: block;
        background: linear-gradient(90deg, #4f46e5, #6366f1);
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 2rem;
        font-size: 1rem;
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    </style>
</head>

<body>

    <audio id="hover-sound" src="https://www.myinstants.com/media/sounds/button-click.mp3"></audio>

    <div class="tabs">
        <div class="tab active-liberal">Liberal</div>
        <div class="tab active-smart">Smart</div>
    </div>

    <h2>Please choose one per candidate.</h2>

    <div class="container">
        <!-- Candidate cards here (same as before) -->
    </div>

    <button class="submit-btn">Submit</button>

    <script>
    const hoverSound = document.getElementById('hover-sound');
    document.querySelectorAll('.option').forEach(option => {
        option.addEventListener('mouseenter', () => {
            hoverSound.currentTime = 0;
            hoverSound.play();
        });
    });
    </script>

</body>

</html>