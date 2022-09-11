<?php
    // if ($_FILES["import"]["error"] > 0) {
        // echo "Return Code: " . $_FILES["import"]["error"] . "<br />";
    // }else {
        // if (file_exists("upload/" . $_FILES["import"]["name"])) {
           // echo $_FILES["import"]["name"] . " already exists. ";
        // } else {
            // move_uploaded_file($_FILES["import"]["tmp_name"],
            // "upload/" . $_FILES["import"]["name"]);
            // echo "Stored in: " . "upload/" . $_FILES["import"]["name"];
        // }
    // }

?>
<?php
    if (isset($_POST["image"]) && !empty($_POST["image"])) {
        // get the image data
        $data = $_POST['image'];

        $date = date('d-m-y h:i:s');
        echo $date;

        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);

        //Image name
        $filename ="upload_".date("dmYHis").'.png';

        $file = './upload/' . $filename;

        // decode the image data and save it to file
        file_put_contents($file, $data);
        echo $file;
    }
?>