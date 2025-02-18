<!DOCTYPE html>
<html>
<head>
    <title>Job Application Confirmation</title>
</head>
<body>
    <h1>Dear {{ $applicationDetails['name'] }},</h1>
    <p>Thank you for applying for the job with us.</p>
    <p>Your Application ID is: {{ $applicationDetails['application_id'] }}</p>
    <p>We will review your application and get back to you soon.</p>
    <p>Best regards,</p>
    <p>HR Team</p>
</body>
</html>
