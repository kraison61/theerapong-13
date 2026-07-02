<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — ธีรพงษ์การช่าง</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/admin.js'])
</head>

<body class="bg-slate-50 font-prompt antialiased [&_button]:cursor-pointer [&_a]:cursor-pointer [&_select]:cursor-pointer [&_label.cursor-pointer]:cursor-pointer" x-data="adminApp" x-cloak>

@yield('admin-content')

</body>
</html>
