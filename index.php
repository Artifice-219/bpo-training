<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viciDashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaeaea;
        }

        fieldset {
            border: none;
        }

        .container {
            width: 95%;
            margin: 0 auto;
            background-color: #d1d1d1;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar {
            border: 2px solid green;
            width: 20%;
            float: left;
            padding: 10px;
            background-color: #eaeaea;
        }

        .content {
            border: 2px solid blue;
            width: 75%;
            float: right;
            padding: 10px;
            background-color: white;
        }

        .button-group button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #ccc;
            border: none;
            cursor: pointer;
            text-align: left;
        }

        .button-group button:hover {
            background-color: #bbb;
        }

        table {
            width: 100%;
            border-spacing: 10px;
        }

        td {
            padding: 5px;
        }

        input[type="text"], select, textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .footer-links {
            margin-top: 20px;
            text-align: center;
        }

        .footer-links a {
            margin: 0 10px;
            color: blue;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <fieldset>
            <legend>VICIdial</legend>
            <div class="sidebar">
                <form action="" method="POST" class="button-group">
                    <button type="button" name="pausedbtn">YOU ARE PAUSED</button><br>
                    <button type="button" name="recordingbtn">START RECORDING</button><br>
                    <button type="button" name="saveDatabtn">WEB FORM</button>
                    <button type="button" name="saveDatabtn">WEB FORM 2</button><br>
                    <button type="button" name="saveDatabtn">PARK CALL</button>
                    <button type="button" name="saveDatabtn">TRANSFER - CONF</button><br>
                    <button type="button" name="saveDatabtn">HANGUP CUSTOMER</button><br>
                    <button type="button" name="saveDatabtn">SEND DTMF</button><br><br><br>
                </form>
            </div>

            <div class="content">
                <form action="">
                    <table>
                        <tr>
                            <td>Title:</td>
                            <td><input type="text" id="title" name="title"></td>
                            <td>First:</td>
                            <td><input type="text" id="first" name="first"></td>
                            <td>MI:</td>
                            <td><input type="text" id="mi" name="mi"></td>
                            <td>Last:</td>
                            <td><input type="text" id="last" name="last"></td>
                        </tr>
                        <tr>
                            <td>Address1:</td>
                            <td colspan="3"><input type="text" id="address1" name="address1"></td>
                            <td>Address2:</td>
                            <td colspan="3"><input type="text" id="address2" name="address2"></td>
                        </tr>
                        <tr>
                            <td>Address3:</td>
                            <td colspan="3"><input type="text" id="address3" name="address3"></td>
                            <td>City:</td>
                            <td><input type="text" id="city" name="city"></td>
                            <td>State:</td>
                            <td><input type="text" id="state" name="state"></td>
                        </tr>
                        <tr>
                            <td>PostCode:</td>
                            <td><input type="text" id="postcode" name="postcode"></td>
                            <td>Gender:</td>
                            <td><select id="gender" name="gender">
                                    <option value="U">U - Undefined</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select></td>
                            <td>Vendor ID:</td>
                            <td><input type="text" id="vendorid" name="vendorid"></td>
                            <td>Phone:</td>
                            <td><input type="text" id="phone" name="phone"></td>
                        </tr>
                        <tr>
                            <td>DialCode:</td>
                            <td><input type="text" id="dialcode" name="dialcode"></td>
                            <td>Alt. Phone:</td>
                            <td><input type="text" id="altphone" name="altphone"></td>
                            <td>Email:</td>
                            <td colspan="3"><input type="text" id="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Comments:</td>
                            <td colspan="7"><textarea id="comments" name="comments" rows="4"></textarea></td>
                        </tr>
                        <tr>
                            <td>Call Notes:</td>
                            <td colspan="7"><textarea id="callnotes" name="callnotes" rows="4"></textarea></td>
                        </tr>
                    </table>
                </form>

                <div class="footer-links">
                    <a href="#">MANUAL DIAL</a>
                    <a href="#">FAST DIAL</a>
                    <a href="#">VIEW CALL LOG</a>
                </div>
            </div>
        </fieldset>
    </div>
</body>

</html>
