<?php
use Socketlabs\SocketLabsClient;
use Socketlabs\Message\BasicMessage;
use Socketlabs\Message\EmailAddress;
use App\Http\Enums\MailConfig;

function sendMail($qrcode, $email)
{
    $serverId          = 32931;
    $injectionApiKey   = "Bi4m3K9Srw7Q2HbFz6e5";
    $client_email      = new SocketLabsClient($serverId, $injectionApiKey);
    $message           = new BasicMessage();
    $message->subject  = MailConfig::SUBJECT;
    $message->htmlBody = file_get_contents('./remails.registration.blade.php');
    $message->from     = new EmailAddress(MailConfig::FROM);
    $message->addToAddress($email);
    $message->addMergeData("qrcode", $qrcode);
    $response          = $client_email->send($message);
}
