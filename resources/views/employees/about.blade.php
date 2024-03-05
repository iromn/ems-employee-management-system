@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
.skills{
    display: flex;
    justify-content: space-evenly;
}
.skill{
    display: inline-block;
    margin-right: 10px;
    text-align: center;
}
.skill i{
    font-size: 3em;
}
.skill span {
    display: block;
}

</style>
@section('content')
    <div class="container mt-3">
        <h1>Nganba Irom</h1>
        <!-- Experience Section -->
        <h2>Experience</h2>
        <h3>Laravel Developer - Global Software Technologies, Bangalore</h3>
        <p><strong>October 2023 - Present</strong></p>
        <ul>
            <li>Designing and developing web applications using Laravel for scalability and security.</li>
            <li>Managing database schema, data models, and creating RESTful APIs.</li>
            <li>Ensuring clean, well-documented code and collaborating with teams to maintain code quality and consistency.</li>
        </ul>

        <h3>Software Developer - Stratacache, Bangalore</h3>
        <p><strong>September 2021 - July 2023</strong></p>
        <ul>
            <li>Transformed websites with Vue.js and PHP Laravel, resulting in a 40% boost in functionality and user engagement.</li>
            <li>Engineered robust authentication, authorization, and 2FA systems, enhancing security and reducing unauthorized access by 60%.</li>
            <li>Successfully delivered user-centric solutions, including email systems, wayfinding apps, and WordPress sites, leading to a 35% improvement in user experience and satisfaction.</li>
        </ul>

        <!-- Skills Section -->
        <h2>Skills</h2>
        <div class="skills">
            <div class="skill">
                <i class="fab fa-html5"></i> <span>HTML 5</span>
            </div>
            <div class="skill">
                <i class="fab fa-wordpress"></i> <span>WordPress</span>
            </div>
            <div class="skill">
                <i class="fab fa-react"></i> <span>React</span>
            </div>
            <div class="skill">
                <i class="fab fa-java"></i> <span>Java</span>
            </div>
            <div class="skill">
                <i class="fab fa-python"></i> <span>Python</span>
            </div>
            <div class="skill">
                <i class="fab fa-laravel"></i> <span>Laravel</span>
            </div>
            <div class="skill">
                <i class="fab fa-vuejs"></i> <span>Vue JS</span> 
            </div>
            <div class="skill">
                <i class="fas fa-database"></i> <span>MySQL</span>
            </div>
            <div class="skill">
                <i class="fab fa-js"></i> <span>JavaScript</span>
            </div>
            <div class="skill">
                <i class="fab fa-css3-alt"></i> <span>CSS</span>
            </div>
            <div class="skill">
                <i class="fab fa-js-square"></i> <span>jQuery</span>
            </div>
            <div class="skill">
                <i class="fab fa-github"></i> <span>GitHub</span>
            </div>
            <div class="skill">
                <i class="fab fa-php"></i> <span>PHP</span>
            </div>
        </div>
    </div>

    
@endsection
