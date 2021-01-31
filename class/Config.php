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

    public function getRealIP(): string
    {
        if(isset($_SERVER)){if(isset($_SERVER["HTTP_X_FORWARDED_FOR"]))return $_SERVER["HTTP_X_FORWARDED_FOR"];
            if(isset($_SERVER["HTTP_CLIENT_IP"]))return $_SERVER["HTTP_CLIENT_IP"];return $_SERVER["REMOTE_ADDR"];}
        if(getenv('HTTP_X_FORWARDED_FOR'))return getenv('HTTP_X_FORWARDED_FOR');if(getenv('HTTP_CLIENT_IP'))return
        getenv('HTTP_CLIENT_IP');return getenv('REMOTE_ADDR');
    }

    public function getBrowser($user_agent): string
    {
        if(strpos($user_agent, 'MSIE') !== FALSE)
            return 'Internet Explorer';
        elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
            return 'Microsoft Edge';
        elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
            return 'Internet Explorer';
        elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
            return "Opera Mini";
        elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
            return "Opera";
        elseif(strpos($user_agent, 'Firefox') !== FALSE)
            return 'Mozilla Firefox';
        elseif(strpos($user_agent, 'Chrome') !== FALSE)
            return 'Google Chrome';
        elseif(strpos($user_agent, 'Safari') !== FALSE)
            return "Safari";
        else
            return 'Navegador desconocido';
    }

    public function getPC($user_agent): string
    {
        if (strpos($user_agent, 'Macintosh')) {
            return 'Apple Macintosh';
        }
        if (strpos($user_agent, 'Windows NT 10')) {
            return 'Windows 10';
        }
        if (strpos($user_agent, 'Ubuntu')) {
            return 'Ubuntu';
        }
        if (strpos($user_agent, 'Android')) {
            return 'Android';
        }
        if (strpos($user_agent, 'iPhone')) {
            return 'Apple iPhone';
        }
    }

    public function exe_query(string $sql): bool
    {
        $result = false;
        if ($this->Conectar())
        {
            $query = $this->mysqli->query($sql);
            if ($query)
            {
                $result = true;
            }
        }
        return $result;
    }

}