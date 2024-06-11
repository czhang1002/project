<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/Main_Page.css">
        <link rel="stylesheet" href="CSS/Content.css">
        <title>Teacher View Page</title>
    </head>

    <body class="body_container">
        <?php include("header.html") ?>      

        <main class="body_main_container message_page">
            <div class="message_content">
                <div class="contacts_container">
                    <h3>Contacts</h3>
                    <div class="contacts_list">
                        <div class="contacts">
                            <img class="profile_image" src="CSS/1.jpg">
                            <div class="name_last_message">
                                <div class="name_time">
                                    <div class="name">
                                        Blue
                                    </div>
                                    <div class="time">
                                        01:23
                                    </div>
                                </div>
                                <div class="last_message">
                                    Hi
                                </div>
                            </div>
                        </div>
                        <div class="contacts">
                            <img class="profile_image" src="CSS/1.jpg">
                            <div class="name_last_message">
                                <div class="name_time">
                                    <div class="name">
                                        Blue
                                    </div>
                                    <div class="time">
                                        01:24
                                    </div>
                                </div>
                                <div class="last_message">
                                    Hi
                                </div>
                            </div>
                        </div>
                        <div class="contacts">
                            <img class="profile_image" src="CSS/1.jpg">
                            <div class="name_last_message">
                                <div class="name_time">
                                    <div class="name">
                                        Blue
                                    </div>
                                    <div class="time">
                                        01:25
                                    </div>
                                </div>
                                <div class="last_message">
                                    Hi
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="message_container">
                    <h3>Blue</h3>
                    <div class="message">
                        <div class="each_message_container sender">
                            <div class="message_text">
                                2
                            </div>
                            <img class="profile_image" src="CSS/1.jpg">
                        </div>
                        <div class="each_message_container receiver">
                            <img class="profile_image" src="CSS/1.jpg">
                            <div class="message_text">
                                Hi
                            </div>
                        </div>
                        <div class="each_message_container sender">
                            <div class="message_text">
                                Hi
                            </div>
                            <img class="profile_image" src="CSS/1.jpg">
                        </div>
                        <div class="each_message_container sender">
                            <div class="message_text">
                                Hi
                            </div>
                            <img class="profile_image" src="CSS/1.jpg">
                        </div>
                        <div class="each_message_container sender">
                            <div class="message_text">
                                Hi
                            </div>
                            <img class="profile_image" src="CSS/1.jpg">
                        </div>
                    </div>
                    <textarea class="keyboard"></textarea>
                </div>
            </div>
        </main>

        <script src="JS/Profile.js"></script>
    </body>

</html>