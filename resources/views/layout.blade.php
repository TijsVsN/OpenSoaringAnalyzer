
@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenSoaringAnalyzer</title>
</head>
<body>

    <div class="w-full">
        <div class=" bg-slate-600 h-8">
            <h1 class=" my-auto pl-5 text-lg font-bold text-sky-50">OpenSoaringAnalyzer</h1>
        </div>
        
    </div>


    <div class="w-full">
        @yield("content")
    </div>
</body>
</html>
