<?php
declare(strict_types = 1);

$attachment = $_FILES["attachment"];
if(isAttachmentValid($attachment)) {
    $attachmentPath = $attachment["tmp_name"];
    $attachmentName = $attachment["name"];
    $attachmentSize = $attachment["size"];

    echo "Attachment path: $attachmentPath<br>";
    echo "Attachment name: $attachmentName<br>";
    echo "Attachment size: $attachmentSize<br>";
    return;
}
echo "No File Uploaded!";


function isAttachmentValid(array $attachment): bool {
    return isset($attachment) && $attachment['error'] === UPLOAD_ERR_OK;
}
?>