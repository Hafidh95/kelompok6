<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Header Berwarna dengan Foundation</title>
    <!-- Tautkan Foundation CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/css/foundation.min.css">
    <style>
        /* Gaya tambahan untuk header tabel berwarna */
        .color-header th {
            background-color: #4CAF50; /* Warna hijau */
            color: white; /* Warna teks putih */
        }
    </style>
</head>
<body>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <h2>Table Header Berwarna dengan Foundation</h2>
            <!-- Tabel -->
            <table>
                <thead>
                    <tr class="color-header"> <!-- Tambahkan kelas color-header untuk header berwarna -->
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Kota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>30</td>
                        <td>New York</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>25</td>
                        <td>Los Angeles</td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>35</td>
                        <td>Chicago</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tautkan Foundation JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/js/foundation.min.js"></script>
<!-- Aktifkan Foundation JavaScript -->
<script>
    $(document).foundation();
</script>
</body>
</html>