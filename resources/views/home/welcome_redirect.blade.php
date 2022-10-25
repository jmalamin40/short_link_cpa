
<!DOCTYPE html>
<html lang="en"  prefix="og: https://api.jomaddarit.com/" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="This a ">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="jtks it">

    <meta property="og:title"              content="{{$title}}" />
    <meta property="og:image" 			   content="{{$image}}" />
    <meta property="og:description"        content="{{$title}}" />
    <meta property="og:url"                content="{{url('/')}}" />
    <meta name="twitter:card"               content="summary_large_image" />
    <meta name="twitter:title"              content="{{$title}}" />
    <meta name="twitter:description"        content="{{$title}}" />
    <meta name="twitter:image" 			   content="{{$image}}" />
       
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
    <title>SHORT Link Generate</title>
</head>
<body>
    
    <a>Loading......</a>
    <script>
        window.location.href = "{{$to_url}}";
    </script>
</body>
</html>