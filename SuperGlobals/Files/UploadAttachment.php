<?php
declare(strict_types = 1);
$attachment = $_FILES["attachment"];
if(!isAttachmentValid($attachment)) {
    echo "No File Uploaded!";
    return;
}

$attachmentPath = $attachment["tmp_name"];
$attachmentName = $attachment["name"];
$attachmentSize = $attachment["size"];

echo "Attachment path: $attachmentPath<br>";
echo "Attachment name: $attachmentName<br>";
echo "Attachment size: $attachmentSize<br>";

function isAttachmentValid(array $attachment): bool {
    return isset($attachment) && $attachment['error'] === UPLOAD_ERR_OK;
}
?>