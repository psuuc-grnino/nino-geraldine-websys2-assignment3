<!DOCTYPE html>
<html>
<head>
    <title>Personal Information Form</title>
</head>
<body>
    <h1>Personal Information</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <form action="{{ url('/personal-info') }}" method="POST">
        @csrf
        <label>First Name:</label>
        <input type="text" name="first_name" required maxlength="50">
        <br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" required maxlength="50">
        <br><br>

        <label>Sex:</label>
        <input type="radio" name="sex" value="Male" required> Male
        <input type="radio" name="sex" value="Female"> Female
        <br><br>

        <label>Mobile Phone:</label>
        <input type="text" name="mobile_phone" required pattern="09[0-9]{9}">
        <br><br>

        <label>Tel No.:</label>
        <input type="text" name="tel_no">
        <br><br>

        <label>Birth Date:</label>
        <input type="date" name="birth_date" required>
        <br><br>

        <label>Address:</label>
        <input type="text" name="address" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required maxlength="100">
        <br><br>

        <label>Website:</label>
        <input type="url" name="website">
        <br><br>

        <button type="submit">Submit Info</button>
    </form>
</body>
</html>
