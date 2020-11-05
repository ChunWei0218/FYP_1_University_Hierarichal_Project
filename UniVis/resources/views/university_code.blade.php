
<?php
include('dbconfig.php');
session_start();

if (isset($_POST['update_data'])) {
    $name = $_POST['caption'];
    $email = $_POST['source'];
    $phone = $_POST['target'];
    $token = $_POST['ref_token'];

    $data = [
        'caption' => $caption,
        'source' => $source,
        'target' => $target,
    ];

    $ref = "edges/" . $token;
    $postdata = $database->getReference($ref)->update($data);

    if ($postdata) {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: university_table_page.blade.php");
    } else {
        $_SESSION['status'] = "Data Not Updated. Something Went Wrong.!";
        header("Location: university_table_page.blade.php");
    }
}
