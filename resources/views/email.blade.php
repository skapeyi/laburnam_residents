<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>New Booking Notification</h2>

@if(isset($bodyMessage))
    <div class="w3-container w3-orange">

        <p>
            <b>The clients details are:</b><span
                    style="color: #e36c39; background: #EEE";> {{ $bodyMessage }}</span>

        </p>

    </div>
@endif
</body>
</html>