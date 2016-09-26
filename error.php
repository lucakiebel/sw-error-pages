
<?php

/**
 * @author klequex
 * @project StarWarsError V1
 * @version 1.0
 */

$class = filter_input(INPUT_GET, 'cls', $filter = FILTER_SANITIZE_STRING);

$ua = getBrowser();

    switch ($class) {
        case 400:
            $err = "Bad Request";
            $errdesc = "The server could not process the request due to malformed syntax.";
            break;
        case 401:
            $err = "Unauthorized";
            $errdesc = "The request could not be performed without proper authorization.";
            break;
        case 402:
            $err = "Payment Required";
            $errdesc = "The request could not be performed without payment.";
            break;
        case 403:
            $err = "Forbidden";
            $errdesc = "The request could not be performed due to wrong permissions.";
            break;
        case 404:
            $err = "Not Found";
            $errdesc = "The requested resource (".$_SERVER["REQUEST_URI"].") could not be found.";
            break;
        case 405:
            $err = "Method not allowed";
            $errdesc = "The used request method (".$_SERVER["REQUEST_METHOD"].") is not supported by the requested resource.";
            break;
        case 406:
            $err = "Not Acceptable";
            $errdesc = "The requested resource is not capable of generating content acceptable according to the request.";
            break;
        case 407:
            $err = "Proxy Authentication Required";
            $errdesc = "The requested resource is only available after authenticating with the proxy.";
            break;
        case 408:
            $err = "Request Time-out";
            $errdesc = "The request took too long for the server, please check your internet connection";
            break;
        case 409:
            $err = "Gone";
            $errdesc = "The requested resource (".$_SERVER["REQUEST_URI"].") is not available anymore.";
            break;
        case 414:
            $err = "URI Too Long";
            $errdesc = "The requested URL was too long.";
            break;
        case 418:
            $err = "I'm a Teapot";
            $errdesc = "The server is not configured to accept coffee or milk, please only use tea.";
            break;
        case 426:
            $err = "Upgrade Required";
            $errdesc = "Please update your browser ".$ua["name"]." ".$ua["version"]."  or switch to a supported one (Chrome, Firefox, Safari, Opera).";
            break;
        case 429:
            $err = "Too Many Requests";
            $errdesc = "The maximum amount of requests per time has been reached.";
            break;
        case 500:
            $err = "Internal Server Error";
            $errdesc = "Unknown Server Error. That's all we know.";
            break;
        case 501:
            $err = "Not Implemented";
            $errdesc = "The server could not fulfill the request due to missing functions, though this may become available in the future.";
            break;
        case 508:
            $err = "Loop  Detected";
            $errdesc = "The server detected an infinite loop while processing the request, just like this animation.";
            break;
        case 1337:
            $err = "Too Leet";
            $errdesc = "The Server could not handle your level of leetness, it was $class.";
            break;
        default:
            $err = "Unknown Error";
            $errdesc = "That's all we know.";
    }

?>
<html>
<head>
    <link rel="stylesheet" href="https://luca-kiebel.de/error/main.css">
</head>
<body>
<div class="error">
    Error<? if (isset($class) and $class != null){echo " ".$class;}?>: <?=$err?>
</div>
<p class="errordesc">
    <?=$errdesc?>
</p>
<div class="artboard">
    <div class="bb8">
        <div class="bb8-body">
            <div class="dot dot-1">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>
            <div class="dot dot-2"></div>
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
        <div class="body-shadow-crop">
            <div class="body-shadow"></div>
        </div>
        <div class="bb8-head">
            <div class="head-bottom">
                <div class="head-side-1"></div>
                <div class="head-side-2"></div>
                <div class="head-bottom-base"></div>
            </div>
            <div class="head-top-crop">
                <div class="head-top"></div>
            </div>
            <div class="lens"></div>
            <div class="freckle"></div>
        </div>
        <div class="speedlines">
            <div class="one tail"></div>
            <div class="two tail"></div>
            <div class="three"></div>
            <div class="four"></div>
            <div class="five tail"></div>
        </div>
        <div class="sparkles">
            <div class="one small pulse-1"></div>
            <div class="two blue small pulse-2"></div>
            <div class="three blue med pulse-3"></div>
            <div class="four orange pulse-2"></div>
            <div class="five orange pulse-1"></div>
            <div class="six blue small pulse"></div>
            <div class="seven blue small pulse"></div>
            <div class="eight small pulse-3"></div>
            <div class="nine pulse"></div>
            <div class="ten orange small-1 pulse"></div>
            <div class="eleven small pulse"></div>
            <div class="twelve small pulse-2"></div>
            <div class="thirteen orange small pulse"></div>
            <div class="fourteen orange med pulse-3"></div>
            <div class="fifteen small pulse-1"></div>
            <div class="sixteen small pulse"></div>
        </div>
        <div class="ground">
            <div class="one">
                <div class="bump move-1"></div>
            </div>
            <div class="two"></div>
            <div class="three">
                <div class="bump move-2"></div>
            </div>
            <div class="four">
                <div class="bump"></div>
            </div>
            <div class="five"></div>
            <div class="six">
                <div class="bump move-2"></div>
            </div>
            <div class="seven">
                <div class="bump"></div>
            </div>
            <div class="eight">
                <div class="bump move-1"></div>
            </div>
        </div>
    </div>
</div>
<div class="credit">
    Functionality by <a href="https://luca-kiebel.de">Luca Kiebel</a><script type="text/javascript">if (screen.width < 1050){document.write("<br>")}else document.write("&nbsp;&nbsp;&middot;&nbsp;&nbsp;")</script>Illustration  by <a href="https://dribbble.com/shots/2408834-BB-8">Justas Galaburda</a><script type="text/javascript">if (screen.width < 1050){document.write("<br>")}else document.write("&nbsp;&nbsp;&middot;&nbsp;&nbsp;")</script> Animation by <a href="https://www.youtube.com/watch?v=QZdj42liTtU">DevTips</a>

</div>
</body>
</html>

<?php
function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "?";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'Linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'OSX';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'Windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
        ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'   => $pattern
    );
}