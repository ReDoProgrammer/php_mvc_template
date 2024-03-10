<?php

class Test {

    // Call to the database
    public function getTestFunction($sqlParameters) {
        return Database::query("SELECT * FROM tai_khoan LIMIT ?", [$sqlParameters]);
    }
}

?>