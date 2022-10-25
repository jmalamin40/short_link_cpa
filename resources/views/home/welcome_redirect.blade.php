
<!DOCTYPE html>
<html lang="en"  prefix="og: https://api.jomaddarit.com/" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta property="og:title"              content="{{$title}}" />
    <meta property="og:image" 			   content="{{$image}}" />
    <meta property="og:description"        content="{{$title}}" />
    <meta property="og:url"                content="{{url('/')}}" />
    <meta name="twitter:image" 			   content="{{$image}}" />
       
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />
    <title>SHORT Link Generate</title>
</head>
<body>
    
    <h1>{{$title}}}</h1>
    <img src="{{$image}}" />
</body>
</html>