<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nagaprasad T S Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b39466517.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
</head>

<body>
    <header>
        <nav>
            <div class="left">
                <a href="#about-section">Nagaprasad T S</a>
            </div>
            <div class="right">
                <a href="#about-section">About</a>
                <a href="#projects-section">Projects</a>
                <a href="#skills-section">Skills</a>
                <a href="#leave-message-section">Leave a Message!</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Nagaprasad T S. All Rights Reserved</p>
    </footer>
</body>

</html>
