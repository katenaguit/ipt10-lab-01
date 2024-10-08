<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <center>
        <img src="AUF logo.jpg" alt="AUF Logo" class="logo">
        <h2>Student Registration</h2>
        </center>
        <form action="summary.php" method="post">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label>Sex</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="sex" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="sex" value="Female">
                    <label for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address"></textarea>
            </div>
            <div class="form-group">
                <label for="department">College Department</label>
                <select id="department" name="department">
                    <option value="CBA">CBA</option>
                    <option value="CCJE">CCJE</option>
                    <option value="CAS">CAS</option>
                    <option value="CCS">CCS</option>
                    <option value="CON">CON</option>
                    <option value="CAMP">CAMP</option>
                    <option value="CEA">CEA</option>
                    <option value="CED">CED</option>
                </select>
            </div>
            <div class="form-group">
                <label for="program">Program</label>
                <input type="text" id="program" name="program">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile">
            </div>
            <div class="form-group">
                <center>
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
                </center>
            </div>
        </form>
    </div>
</body>
</html>
