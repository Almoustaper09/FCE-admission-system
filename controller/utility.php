<?php

function filter_data($data) {
    htmlspecialchars($data);
  //  mysql_escape_string($data);
    return $data;
}
