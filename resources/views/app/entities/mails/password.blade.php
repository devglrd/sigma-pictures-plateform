<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<style>
    body, body *:not(html):not(style):not(br):not(tr):not(code) {
        font-family: 'Raleway', sans-serif;
        box-sizing: border-box;
    }
    
    @media only screen and (max-width: 600px) {
        .inner-body {
            width: 100% !important;
        }
        
        .footer {
            width: 100% !important;
        }
    }
    
    @media only screen and (max-width: 500px) {
        .button {
            width: 100% !important;
        }
    }
</style>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <table class="content" width="100%" cellpadding="0" cellspacing="0">
                <tr style="text-align: center;background-color: black">
                    <td>
                        <img src="" alt="" width="400px" style="margin-top: 40px">
                        <div style="margin-top: 30px;"></div>
                    </td>
                </tr>
                <tr>
                    <td class="body" width="100%" cellpadding="0" cellspacing="0">
                        <table class="inner-body" width="570" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="content-cell" style="text-align:left;color: #324e6d;">
                                    <div style="font-size: 16px; padding-top:30px;">
                                        Bonjour,
                                        <br>
                                        <br>
                                        Vous recevez cet e-mail, car nous avons crée un compte avec votre addesse mail.
                                    </div>
                                    <div style="margin-top: 40px;text-align: center;">
                                        <a href="{{ action('App\AccountController@showAccount', $user->token_url) }}" style="font-size: 16px;background-color: #343a40; padding:10px 10px; border-radius:3px;color:white;text-decoration: none;">
                                            Connnaitre les informations de mon compte
                                        </a>
                                    </div>
                                    <div style="margin-top:40px; font-size:12px">
                                        Si vous ne voulez pas vous connecté, aucune autre action n'est requise.
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>