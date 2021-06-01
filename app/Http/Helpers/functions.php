<?php
use Socketlabs\SocketLabsClient;
use Socketlabs\Message\BulkMessage;
use Socketlabs\Message\EmailAddress;
use App\Http\Enums\MailConfig;

use Illuminate\Support\Facades\Session;
use App\Models\Registration;

use Twilio\Rest\Client;

function sendMail($qrcode, $email,$userCode, $userName, $eventTime, $location)
{

        $serverId = 35045;
        $injectionApiKey = "x5Q8Rdz9ZWq76LfKj43Y";
        $client = new SocketLabsClient($serverId, $injectionApiKey);
        $message = new BulkMessage();
        $message->subject = MailConfig::SUBJECT;
        $message->htmlBody = file_get_contents(resource_path('/views/emails/registration.blade.php'));
        $message->from = new EmailAddress(MailConfig::FROM);
        $recipient1 = $message->addToAddress($email, "Recipient #1");
        $recipient1->addMergeData("qrcode", $qrcode);
        $recipient1->addMergeData("userCode", $userCode);
        $recipient1->addMergeData("userName", $userName);
        $recipient1->addMergeData("location", $location);
        $recipient1->addMergeData("eventTime", $eventTime);
        $client->send($message);

}

function setCurrentUser($phone) {
    Session::put('user_phone', $phone);
}

function getCurrentUser() {
    $phone = Session::get('user_phone');
    $model = new Registration();
    return $model->findByPhone($phone);
}

function clearCurrentUser() {
    Session::forget('user_phone');
}

function sendWhatsApp($qrcode, $phone,$userCode)
{
    $sid ='AC902dd084452808a10abb690f5de30e60';
    $token = '52d049fdbaf5d528180620d1d82e669b';

    $twilio = new Client($sid, $token);

    $message = $twilio->messages
        ->create("whatsapp:".$phone,
            [
                "from" => "whatsapp:+12025197412",
                "body" => "Your $userCode pin code is $qrcode"
            ]
        );
}
