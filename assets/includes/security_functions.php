<?php
    //forzo la generazione di una sessione con un nome numerico specifico in SHA256
    function custom_session_start() {
        $gen_value = bin2hex(random_bytes(64)); //genera 64 valori random
        $final_csrf = hash('sha256', $gen_value); //sha256 hash del valore random
        $name_session = $_SESSION['csrf_token'] = $final_csrf;
        session_name($name_session);
    }
    function _cleaninjections($test) {
        $find = array(
            "/[\r\n]/", 
            "/%0[A-B]/",
            "/%0[a-b]/",
            "/bcc\:/i",
            "/Content\-Type\:/i",
            "/Mime\-Version\:/i",
            "/cc\:/i",
            "/from\:/i",
            "/to\:/i",
            "/Content\-Transfer\-Encoding\:/i"
        );
        $ret = preg_replace($find, "", $test);
        return $ret;
    }
    function generate_csrf_token() {
    // $s_stat = session_status();
        if (!isset($_SESSION)) {
            session_start();
            session_encode();
        }
        if (empty($_SESSION['token'])) {
            $gen_value = bin2hex(random_bytes(64)); //genera 64 valori random
            $final_csrf = hash('sha256', $gen_value); //sha256 hash del valore random
            $_SESSION['token'] = $final_csrf;
            $_POST['token'] = $final_csrf; //rendo identintico per entrambi gli oggetti
        }
    }
    /*
    function re_equal_csrf(){
        if((empty($_SESSION['token']) || !isset($_SESSION['token'])) && (empty($_POST['token'])) || !isset($_POST['token'])){
            if((isset($_POST['token']) && (!empty($_POST['token']))){
                $_POST['token']->$_SESSION['token'];
            }else{
                $_POST['token']->$_SESSION['token'];
            }
            return true;
        }
    }
    */
    function insert_csrf_token() {
        generate_csrf_token();
        echo '<input type="hidden" name="token" value="' . $_SESSION['token'] . '" />';
    }
    function verify_csrf_token() {
        if (empty($_POST['token']) || empty($_SESSION['token'])) {
            generate_csrf_token();
            /*if (!hash_equals($_SESSION['token'], $_POST['token']){
                re_equal_csrf(); 
            }*/
        }
        if (!empty($_POST['token']) || !empty($_SESSION['token']) && hash_equals($_SESSION['token'], $_POST['token'])){
            return true;
        }
        if (isset($_POST['token']) && isset($_SESSION['token'])) {
            if (hash_equals($_SESSION['token'], $_POST['token'])){
                return true;
            }
        }
    }
?>