<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Resume</title>
</head>
<body>
    <div style="margin: 0 auto;display: block;width: 500px;">
        <table width="100%" border="1">
            <tr>
                <td colspan="2">
                    <img src="{{ Auth::user()->avatar_url ?? ' '}}" style="width:200px;">
                </td>
            </tr>
            <tr>
                <td>Name:</td>
                <td>{{Auth::user()->name}}</td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>{{ Auth::user()->profile->address ?? ' '}}</td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td>{{Auth::user()->profile->telephone}}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{Auth::user()->email}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
