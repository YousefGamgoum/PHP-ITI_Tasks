<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
            display: block !important;
            margin-top: 10px;
        }
    </style>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    <form action="data.php" method="post" >
        <label>First Name:
            <input type="text" name="first_name" >
        </label>

        <label>Last Name:
            <input type="text" name="last_name" >
        </label>

        <label>Address:
            <textarea name="address" rows="4" ></textarea>
        </label>

        <label>Country:
            <select name="country">
                <option>Select Country</option>
                <option>EGYPT</option>
                <option>UK</option>
                <option>India</option>
                <option>Canada</option>
            </select>
        </label>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male" class="inline"> Male
        <input type="radio" name="gender" value="female" class="inline"> Female

        <label>Skills:</label>
        <input type="checkbox" name="skill1" value="php" class="inline"> PHP
        <input type="checkbox" name="skill2" value="mysql" class="inline" > MySQL
        <input type="checkbox" name="skill3" value="j2se" class="inline" > J2SE
        <input type="checkbox" name="skill4" value="postgresql" class="inline"> PostgreSQL

        <label>Username:
            <input type="text" name="username">
        </label>

        <label>Password:
            <input type="password" name="password">
        </label>

        <label>Department:
            <input type="text" name="department" value="OpenSource" >
        </label>

        <div class="captcha">Sh68So</div>
        <label>Please Insert the code above:
            <input type="text" name="captcha">
        </label>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>