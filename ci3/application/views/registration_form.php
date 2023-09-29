<!DOCTYPE html>
    <head>
        <title>Registration form</title>
    </head>
    <body>
        <?php
        if (isset($status)) {
            echo $status;
            echo '<br>'.$test;
        
        } 
        if (isset($msg)) {
            echo '<h2>'.$msg.'</h2>';
        }
        ?>
        <form action="<?=base_url('register/savedata/')?>" method="post">
        <table cellspacing='20'>
            <tr>
                <td>Name</td>
                <td><input type="text" name="stname"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="stage"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="email" name="stmail"></td>
            </tr>
            <tr>
                <td>Phone no.</td>
                <td><input type="number" name="stphone"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="staddress"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="Submit" value="register">
                    <a href="<?=base_url('register/fetchdata')?>">View Records</a>
                </td>
            </tr>
        </table>
        </form>
    </body>
    </html>
