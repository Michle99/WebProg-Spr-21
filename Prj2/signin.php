<?php session_start();

    if(isset($_POST['Submit'])) {
        $accounts = array('admin' => 'admin');
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

        if(isset($_POST['check'])) {
            setcookie('Username', $Username, time()+(86400*30));
            setcookie('Password', $Password, time()+(86400*30));
        } else {
            setcookie('Username', $Username, time()-1);
            setcookie('Password', $Password, time()-1);
        }

        $file = file("users.txt");
        for ($i = 0; $i < count($file); $i++) {
            $temp = explode(",", $file[$i]);
            $k = $temp[0];
            $tempv = $temp[1];
            $v = rtrim($tempv);
            $users[$k] = $v;
        }
        // print_r($users);
        if (isset($users[$Username]) && $users[$Username] == $Password) {
            $_SESSION['Userdata']['Username']=$users[$Username]; // password
            $_SESSION['Username']=$Username; // username
            header("location:jeopardygame.php");
            exit;
        } else {
            $msg= "<span style='color:#982a2a'>Invalid Login Details</span>";
            echo $msg;
        }
    }

?>