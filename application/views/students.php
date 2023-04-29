<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Masterlist</title>
    <link rel="stylesheet" href="assets/stylesheet/style.css">
</head>
<body>
    <h1>Insert new student</h1>
    <form action="">
        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last_name">
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first_name">
        <label for="classification">Classification:</label>
        <select name="classification" id="classification">
            <option value="regular">Regular</option>
            <option value="iregular">Iregular</option>
        </select>
        <p>Gender</p>
        
        <input type="radio" id="male" name="gender" value="male">Male
        <!-- <label for="male">Male</label> -->
        <input type="radio" id="female" name="gender" value="female">Female
        <!-- <label for="female">Female</label> -->
        <input type="submit" id="submit" value="Add">
    </form>
    <h2>List of students</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Last name</th>
            <th>First name</th>
            <th>Gender</th>
            <th>Date added</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Choi</td>
            <td>Michael</td>
            <td>Male</td>
            <td>2021/12/25</td>
            <td><a href="">Remove</a></td>
        </tr>
    </table>

</body>
</html>