<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/Main_Page.css">
        <link rel="stylesheet" href="CSS/Content.css">
        <link rel="stylesheet" href="CSS/Course_Content.css">
        <title>Teacher View Page</title>
    </head>

    <body class="body_container">
        <?php include("header.html") ?>  

        <main class="course_body_main_container">
            <div class="course_home_nav_container">
                <menu>
                    <li class="nav active">1Announcements</li>
                    <li class="nav">Students List</li>
                    <li class="nav">Assignments</li>
                    <li class="nav">Documents</li>
                    <li class="nav">Quizzes & Exams</li>
                </menu>
            </div>
            <div class="course_content">
                <div class="page">
                    <div class="announcement_container">
                        <h3>Announcement:</h3>
                        <div class="announcement">
                            <div class="title">
                                I am title
                            </div>
                            <div class="date">
                                01/23/2024, 01:23
                            </div>
                            <div class="announcement_content">
                                xxxxxxxxxxxxxxxx
                            </div>
                        </div>
                        <div class="announcement">
                            <div class="title">
                                I am title
                            </div>
                            <div class="date">
                                01/24/2024, 01:23
                            </div>
                            <div class="announcement_content">
                                xxxxxxxxxxxxxxxx
                            </div>
                        </div>
                    </div>
                    <div class="announcement_input_container">
                        <form class="announcement_input_value">
                            <h3>Title:</h3>
                            <input class="announcement_title" type="text"></textarea>
                            <h3>Announcement:</h3>
                            <textarea class="announcement_input"></textarea>
                            <input class="submit_button" type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <script src="JS/Profile.js"></script>
        <script src="JS/Course_Nav.js"></script>
    </body>

</html>