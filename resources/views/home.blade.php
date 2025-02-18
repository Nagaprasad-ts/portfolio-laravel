@extends('layouts.app')
@section('content')
    <section id="about-section">
        <h2>Hey World! I'm Nagaprasad</h2>
        <div class="headshot">
            <img src="{{ asset('images/nagaprasad-profile.png') }}" alt="Nagaprasad T S" />
        </div>
        <div class="bio">
            <p>
                Web Developer with 1 year experience in Next.js, React.js, Laravel
                PHP, and social media management. Skilled in REST API, front-end and
                back-end development, and creating responsive web applications.<br /><br />
                Outside of work, I enjoy watching movies, and spending time with my
                family.
            </p>
        </div>
        <div class="social-links">
            <a href="https://www.linkedin.com/in/nagaprasadts/" target="_black">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="https://stackoverflow.com/users/19842444/nagaprasad-t-s" target="_black">
                <i class="fa-brands fa-stack-overflow"></i>
            </a>
            <a href="https://github.com/Nagaprasad-ts" target="_black">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://x.com/NagaprasadTS1" target="_black">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/technical_naga/" target="_black">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </section>
    <div class="divider"></div>
    <section id="projects-section">
        <h2>Projects</h2>
        <div class="project-subsection">
            <h3>Software</h3>
            <div class="projects-scroll-container">
                <a href="https://github.com/Nagaprasad-ts/Pixel_Positions" target="_blank" class="project-box">
                    <img src="{{ asset('images/pixel-positions.png') }}" alt="Pixel Positions">
                    <h4>Pixel Positions</h4>
                    <h5><em>Laravel PHP</em></h5>
                    <p>Pixel Positions is a job application platform.</p>
                </a>
                <a href="https://promptopia-delta-flame.vercel.app/" target="_blank" class="project-box">
                    <img src="{{ asset('images/promtopia.png') }}" alt="Promptopia">
                    <h4>Promptopia</h4>
                    <h5><em>Next.js, Firebase</em></h5>
                    <p>
                        Promtopia is a open-source AI prompting tool for AI world to discover, create and share creative
                        prompts
                    </p>
                </a>
                <a href="https://nagaprasad-ts.github.io/simon-game/" target="_blank" class="project-box">
                    <img src="{{ asset('images/simon-game.png') }}" alt="Simon Game">
                    <h4>Simon Game</h4>
                    <h5><em>HTML, CSS, JS</em></h5>
                    <p>
                        Simon Game is a memory game where the player must repeat the sequence of colors.
                    </p>
                </a>
                <a href="https://nagaprasad-ts.github.io/Dice-game/" target="_blank" class="project-box">
                    <img src="{{ asset('images/dice-game-2.png') }}" alt="Dice Game 2">
                    <h4>Dice Game v2</h4>
                    <h5><em>HTML, CSS, JS</em></h5>
                    <p>
                        Dice Game v2 is a game where the 2 players rolls a dice turn by turn and the player with the highest
                        number wins.
                    </p>
                </a>
                <a href="https://nagaprasad-ts.github.io/Guess-the-number/" target="_blank" class="project-box">
                    <img src="{{ asset('images/guess-the-number.png') }}" alt="Guess-the-number">
                    <h4>Guess the Number</h4>
                    <h5><em>HTML, CSS, JS</em></h5>
                    <p>
                        Guess the Number is a game where the player must guess the number between 1 and 20.
                    </p>
                </a>
            </div>
        </div>
    </section>
    <div class="divider"></div>
    <section id="skills-section">
        <h2>Skills</h2>
        <div class="skills-container">
            <i class="fa-brands fa-laravel"></i>
            <i class="devicon-nextjs-plain"></i>
            <i class="fa-brands fa-react"></i>
            <i class="devicon-nodejs-plain"></i>
            <i class="devicon-express-original"></i>
            <i class="devicon-npm-original-wordmark"></i>
        </div>
        <div class="skills-container">
            <i class="devicon-tailwindcss-original"></i>
            <i class="fa-brands fa-bootstrap"></i>
            <i class="fa-brands fa-js"></i>
            <i class="fa-brands fa-css3-alt"></i>
            <i class="fa-brands fa-html5"></i>
        </div>
    </section>
    <div class="divider"></div>
    <section id="leave-message-section">
        <h2>Leave a Message!</h2>
        <form action="{{ route('message.store') }}" method="POST" class="message-form">
            @csrf
            <div class="name-container">
                <label class="name">Name *</label>
                <input type="text" name="name" placeholder="Satvik" required>
            </div>
            <div class="email-container">
                <label class="email">Email *</label>
                <input type="email" name="email" placeholder="test@gmail.com" required>
            </div>
            <div class="message-container">
                <label class="message">Message *</label>
                <textarea name="message" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit">Send</button>
        </form>
    </section>
@endsection
