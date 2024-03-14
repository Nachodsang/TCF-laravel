<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta http–equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http–equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <style>
        .em_defaultlink a {
            color: inherit !important;
            text-decoration: none !important;
        }

        .em-pt-25 {
            padding-top: 25px;
        }

        .em-pt-15 {
            padding-top: 25px;
        }

        .pb {
            padding-bottom: 10px;
        }

        .row {
            display: flex;
        }

        .col-left,
        .col-right {
            float: left;
        }

        .table {
            width: 100%;
        }

        table tr:last-child {
            background: #dedede;
        }

        table tr:last-child td {
            padding: 10px;
        }

        .em_logo {
            width: 20%;
        }

        .text-red {
            color: red;
        }

        .text-blue {
            color: blue;
        }

        td .em_content {
            height: 100vh - 260px;
        }

        @media (min-width: 1366px) {
            .em_logo {
                width: 5%;
            }
        }
    </style>
</head>



<body style="margin:0px; padding:0px;">

    <table class="table" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody>
            <tr>
                <td valign="top" class="em_content">
                    <p class="text-red"><strong>Do Not Reply to This Email!</strong></p>
                    <p><strong>This email is sent from TCF Website.</strong></p>
                    <p><strong>Title: Inquiry from {{ @$name }} - {{ @$company }}</strong></p>
                    <p style="white-space: pre-line; overflow-wrap: break-word;">{!! @$content !!}</p>

                    <p>
                        <strong>Name :</strong> {{ @$name }}<br>
                        <strong>Company :</strong> {{ @$company }}<br>
                        <strong>Telephone :</strong> {{ @$telephone }}<br>

                        <br>
                        <strong>Email :</strong> {{ @$email }}<br>
                    </p>


                </td>
            </tr>

        </tbody>
    </table>


</body>

</html>
