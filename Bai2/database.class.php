<?php
    class db {
        private $connection;
        function __construct($username, $password, $database)
        {
            $host = $_SERVER['SERVER_NAME'];
            $this -> connection = mysqli_connect($host, $username, $password, $database);
        }

        public function query($sql) {
            mysqli_query($this->connection, "set names 'utf8'");
            $rs = mysqli_query($this->connection, $sql);
            return $rs;
        }

        function table($sql, $header) {
            $rs = $this -> query($sql);
            $fieldInfo = mysqli_fetch_fields($rs);
            $str = "<table class=\"table table-bordered\"><thead class=\"table-success\"><tr>";
            foreach ($fieldInfo as $val) { 
                $name = $val -> name;
                $str .= "<th>$name</th>";
            }
            $str .= "</tr></thead>";
            while ($r = mysqli_fetch_array($rs)) {
                $str .= "<tr>";
                foreach ($fieldInfo as $val) { 
                    $name = $val -> name;
                    $str .= "<td>$r[$name]</td>";
                }
                $str .= "</tr>";
            }
            $str .= "</table>";
            echo "<h3>{$header}</h3>";
            echo $str;
        }
    }
?>