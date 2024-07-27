<!DOCTYPE html>
<html>
<head>
    <title>Barcode Generator</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>10-Digit Barcode</h1>
        <p>Number: {{ $number }}</p>
        <img src="data:image/png;base64,{{ $barcode }}" alt="barcode" />
    </div>
</body>
</html>
