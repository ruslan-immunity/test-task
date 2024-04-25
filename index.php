<?php
require_once 'Api/Activity.php';
require_once 'Factory\SenderFactory.php';
require_once 'Sender\SenderInterface.php';
require_once 'Sender\FileSender.php';
require_once 'Sender\ConsoleSender.php';

$participants = readline('Enter a participants: ');
$type = readline('Enter a type: ');
$sender = readline('Enter a sender: ');

$senderFactory = new \Factory\SenderFactory();
try {
    $sender = $senderFactory->make($sender);
    $activity = new \Api\Activity();
    $sender->print($activity->getByCountParticipantsAndType($participants, $type));
} catch (Exception $e) {
    return $e;
}
