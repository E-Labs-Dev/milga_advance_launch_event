<?php
use Socketlabs\SocketLabsClient;
use Socketlabs\Message\BulkMessage;
use Socketlabs\Message\EmailAddress;
use App\Http\Enums\MailConfig;

function sendMail($qrcode, $email)
{

    $serverId = 35045;
    $injectionApiKey = "x5Q8Rdz9ZWq76LfKj43Y";
    $client = new SocketLabsClient($serverId, $injectionApiKey);
    $message = new BulkMessage();
    $message->subject = MailConfig::SUBJECT;
    $message->htmlBody = file_get_contents('./resources/views/emails/registration.blade.php');
    $message->from = new EmailAddress(MailConfig::FROM);
    $recipient1 = $message->addToAddress($email, "Recipient #1");
    $recipient1->addMergeData("qrcode", $qrcode);
    $response = $client->send($message);

}
