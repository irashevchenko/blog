<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 01.06.12
 * Time: 12:36
 * To change this template use File | Settings | File Templates.
 */
class DB
{
    private $sql_database = "blog";
    private $host = "localhost";
    private $name = "root";
    private $pass = "";
    private $enc = "utf8";
    private $sql_query;
    private $sql_err;
    private $sql_res;
    private $sql_link;
    function connect() {
        $this->sql_link = mysqli_connect($this->host, $this->name, $this->pass) or die ("Could not connect");
        mysqli_select_db($this->sql_database);
        mysqli_query("SET CHARSET" .$this->enc);
    }
    function  sql_execute() {
        $this->sql_res=mysqli_query($this->sql_link, $this->sql_query);
        $this->sql_err=mysqli_error();
    }
    function sql_close()
    {
        mysql_close($this->sql_link);
    }

}
?>
