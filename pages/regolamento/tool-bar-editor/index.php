<?php
include "config.php";

// Insert record
$editorContent = $statusMsg = '';
 
// If the form is submitted
if (isset($_POST['submit'])) {
    // Get editor content
    $editorContent = $_POST['editor'];

    // Check whether the editor content is empty
    if (!empty($editorContent)) {
        // Insert editor content in the database
        
        $insert = $db->query("UPDATE editor SET content='$editorContent' ORDER BY id DESC LIMIT 1;");

        // If database insertion is successful
        if ($insert) {
            $statusMsg = "The editor content has been inserted successfully.";
        } else {
            $statusMsg = "Some problem occurred, please try again.";
        }
    } else {
        $statusMsg = 'Please add content in the editor.';
    }
} 


    $query = "SELECT * FROM editor;";

?>


 

<!DOCTYPE html>
<html>
<head>
    <!-- CKEditor -->
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <?php
    if (!empty($statusMsg)) { ?>
        <p class="stmsg"><?php echo $statusMsg; ?></p>
    <?php } ?>


    <form method="post" action="">
        <textarea name="editor" id="editor" rows="100" cols="80"><?php
                if($result = $db->query($query))
                {
                    $row = $result-> fetch_assoc();
                    echo $row['content'];
                }
            ?></textarea>
        <input type="submit" name="submit" value="SUBMIT">
    </form>


        <?php if (!empty($editorContent)) { ?>
            <div class="ed-cont">
                <h4>Contenuto Inserito</h4>
                <?php echo $editorContent ?>
            </div>
        <?php } ?>

        <!-- Script -->

        <script>
            CKEDITOR.replace('editor');
        </script>
</body>

</html>