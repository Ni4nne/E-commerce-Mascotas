<?php
class SessionManager {
    
    public static function initSession() {
        session_start();
    }
    
    public static function closeSession() {
        $_SESSION = array();
        session_destroy();
    }
}
