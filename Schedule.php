<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Main_Page.css">
        <link rel="stylesheet" href="CSS/Content.css">
        <style>
            .fixed_size {
                background-color: #f8f9fa;
                border: 1px solid #ddd;
                text-align: center;
                padding: 10px;
                width: 1500px;
            }
        </style>
        <title>Teacher View Page</title>
    </head>

    <body class="body_container">
        <?php include("header.html") ?>     
        
        <main class="body_main_container schedule_page">
            <div class="schedule_content">
                <table>
                    <tr>
                        <th></th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr>
                    <tr>
                        <td class="schedule_time">10:00 ~ 10:45</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                    </tr>
                    <tr>
                        <td class="schedule_time">11:00 ~ 11:45</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                    </tr>
                    <tr>
                        <td class="schedule_time">12:00 ~ 12:45</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                        <td>CISC 1115</td>
                    </tr>
                </table>
            </div>
        </main>



        <script src="JS/Profile.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    </body>

</html>