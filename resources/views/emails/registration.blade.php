
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>

    <style>

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #fff;
        }

        /* What it does: Stops email clients resizing small text. */
        /* * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
         */
        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }

    </style>


    <style>

        .text-box {
            margin: 0 auto!important;
            text-align: center!important;
        }






        body {
            background: #fff!important;
            direction: ltr!important;
            max-width: 1024px !important;
            margin: 0 auto!important;
            font-family: "arial"!important;
            overflow-x: hidden!important;
        }













        @media screen and (max-width:991px) {
            p,li,h3 {
                font-size: 30px !important;
            }

        }

        @media screen and (max-width:823px) and (orientation:landscape) {
            p,li,h3 {
                font-size: 25px !important;
            }
        }
        p,h1,h2,h3,h4,h5,h6 {
            margin: 0;
            padding: 0;
        }

    </style>
</head>
<body width="1024px" style="margin: 0; padding: 50px 0 !important;  ">

<center  style="width: 1024px; background-color: #fff; overflow-x: hidden; padding-right: 10px;">
    <div style="max-width: 1024px; margin: 0 auto;" class="email-container">

        <table align="left" role="presentation" cellspacing="0" cellpadding="0" border="0" width="1024px" style="margin: auto;">
            <tr>
                <td class="bg_white">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td class="bg_dark email-section">
                                <div class="heading-section heading-section-white">
                                    <h3  style="padding-left: 20px; color: #000; font-size: 16px; font-weight: normal;padding-bottom: 16px; ">Dear Dr.  %%userName%%</h3>
                                    <p style="padding-left: 20px;color: #000;font-size: 16px; padding-bottom: 16px; ">Thank you for registering at the Milga Advance Launch Event!</p>
                                    <p style="padding-left: 20px;color: #000;font-size: 16px; padding-bottom: 16px; ">
                                        This email is to confirm the receipt of your submitted form.
                                    </p>

                                    <p style="padding-left: 20px;color: #000;font-size: 16px; padding-bottom: 5px; ">
                                        <b style="font-weight: bold;">The following are all the details you are going to need to attend the event:</b>
                                    </p>
                                    <ul style="margin-left: 35px; margin-bottom: 40px;">
                                        <li style="padding-left: 10px;color: #000;font-size: 16px; padding-bottom: 10px;">
                                            Date of the Event: %%eventTime%%. </li>
                                        <li style="padding-left: 10px;color: #000;font-size: 16px; padding-bottom: 10px; ">
                                            Location of the Venue: %%location%%
                                            <span style="display: block;">(<a style="color: #1514ff;" href="%% locationMap %%" target="_blank">%% locationMap %%</a>)</span>
                                        </li>
                                        <li style="padding-left: 10px;color: #000;font-size: 16px; padding-bottom: 10px;">
                                            Registration ID: %%userCode%%
                                        </li>
                                        <li style="padding-left: 10px;color: #000;font-size: 16px; padding-bottom: 10px;">
                                            QR Code:
                                            <br>
                                            <span><img src="%%qrcode%%" width="100" height="100"></span>
                                        </li>

                                    </ul>
                                    <p style="padding-left: 20px;color: #000;font-size: 16px; padding-bottom: 5px; ">
                                        Please consider saving this email to your mobile phone as it includes your QR code, which you
                                    </p>
                                    <p style="padding-left: 20px;color: #000;font-size: 16px; padding-bottom: 16px; ">
                                        will need to scan to enter the venue and attend the event.
                                    </p>

                                    <p style="padding-left: 20px;color: #000;font-size: 16px; padding-bottom: 16px; "> We can't wait to see you there! </p>

                                    <p style="padding-left: 20px;color: #000;font-size: 16px; padding-bottom: 16px; "> Thank you for taking the time to read this email!</p>

                                    <p style="padding-left: 20px;color: #000;font-size: 16px; padding-bottom: 16px; ">Best regards,</p>

                                    <p style="padding-left: 20px;color: #000;font-size: 16px; padding-bottom: 16px; ">EVA Pharma</p>



                                </div>








                            </td>

                        </tr>
                    </table>


                </td>
            </tr>


        </table>
</center>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="05bb511a425717925285990e-text/javascript"></script>
<script type="05bb511a425717925285990e-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="05bb511a425717925285990e-|49" defer=""></script></body>
</html>
