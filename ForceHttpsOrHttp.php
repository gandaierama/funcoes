<?
///////////////////////////////////////////////////

function ForceHTTP() {
    if (@$_SERVER["HTTPS"] == "on") {
        $url_r = $_SERVER['SERVER_NAME'];
        $new_url = "http://" . $url_r . $_SERVER['REQUEST_URI'];
        header("Location: $new_url");
        exit;
    }
}

///////////////////////////////////////////////////

function ForceHTTPS() {
    if (@$_SERVER["HTTPS"] == "off") {
        $url_r = $_SERVER['SERVER_NAME'];
        $new_url = "https://" . $url_r . $_SERVER['REQUEST_URI'];
        header("Location: $new_url");
        exit;
    }
}
?>