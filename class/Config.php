<?php
require_once 'Globals.php';
class Config extends Globals
{
    public $mysqli;

    public function Conectar(): bool
    {
         $this->mysqli = new mysqli($this->DATABASE_HOST, $this->DATABASE_USER, $this->DATABASE_PASS, $this->DATABASE_BASE);
         if (mysqli_connect_error())
         {
             return false;
         }
         else
         {
             return true;
         }
    }

    public function ListArray(string $sql): array
    {
        $list = array();
        if ($this->Conectar())
        {
            $query = $this->mysqli->query($sql);
            if ($query)
            {
                if ($query->num_rows > 0)
                {
                    while ($rows = $query->fetch_array(MYSQLI_ASSOC))
                    {
                        $list[] = $rows;
                    }
                }
            }
        }
        return $list;
    }

}