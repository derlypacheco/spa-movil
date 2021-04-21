<?php
session_start();
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

    public function set_session(array $list): bool 
    {
        $result = false;
        if(count($list) == 1)
        {
            foreach ($list as $row);
            //    Personal sessiones variables
            $_SESSION['fullname'] = $row['fullname_user'];
            $_SESSION['mail'] = $row['mail_user'];
            $_SESSION['pic_user'] = $row['picture_user'];
            $_SESSION['usiner'] = $row['user_user'];
            $_SESSION['Permiso'] = $row['name_perm'];
            $_SESSION['company'] = $row['company_user'];
        //    Permisos de usuarios
            $_SESSION['user_c'] = $row['user_c'];
            $_SESSION['user_e'] = $row['user_e'];
            $_SESSION['user_v'] = $row['user_v'];
            $_SESSION['user_d'] = $row['user_d'];
        //    Permisos para Servicios
            $_SESSION['service_v'] = $row['service_v'];
            $_SESSION['service_c'] = $row['service_c'];
            $_SESSION['service_e'] = $row['service_e'];
            $_SESSION['service_d'] = $row['service_d'];
        //    Permisos para Task del usuario
            $_SESSION['task_v'] = $row['task_v'];
            $_SESSION['task_e'] = $row['task_e'];
            $_SESSION['task_c'] = $row['task_c'];
            $_SESSION['task_d'] = $row['task_d'];
        //    Permisos para Task del usuario
            $_SESSION['client_v'] = $row['client_v'];
            $_SESSION['client_c'] = $row['client_c'];
            $_SESSION['client_e'] = $row['client_e'];
            $_SESSION['client_d'] = $row['client_d'];
        //    Permisos de Articulos
            $_SESSION['art_v'] = $row['art_v'];
            $_SESSION['art_c'] = $row['art_c'];
            $_SESSION['art_e'] = $row['art_e'];
            $_SESSION['art_d'] = $row['art_d'];
        //    Permisos para Cuentas
            $_SESSION['acc_v'] = $row['acc_v'];
            $_SESSION['acc_c'] = $row['acc_c'];
            $_SESSION['acc_e'] = $row['acc_e'];
            $_SESSION['acc_d'] = $row['acc_d'];
        //   Validando el resultado
            $result = true;
        }
        return $result;
    }

    public function aut_application(string $us, string $sh): string
    {
        $result = 0;
        if ($this->Conectar()) 
        {
            $sqlLogin = "CALL sp_login_app('".addslashes($us)."', '".$sh."');";
            $list = $this->ListArray($sqlLogin);
            foreach ($list as $row);
            if (count($list) == 1) {
                //Set Coockies
                $token = sha1(rand()).sha1(rand()).sha1(rand()).md5(rand());
                setcookie("user", $row['user_user'], time() + 60 * 60 * 24 * 365);
                setcookie("_dig", $token, time() + 60 * 60 * 24 * 365);
                    if($this->set_session($list)) 
                    {
                        // Actualiza el token 
                        $this->exe_query("update global_users set log_user = '".$token."' where user_user = '".addslashes($_POST['txtUser'])."' ");
                        $result = count($list);
                    }
            }
        }
        return $result;
    }

    public function auto_application(string $sh): string
    {
        $result = "";
        if($this->Conectar())
        {
            $sqlauto = "call sp_auto_app('".$sh."');";
            $list = $this->ListArray($sqlauto);
//            foreach ($list as $row){}
            if (count($list) == 1) {
                if($this->set_session($list)) 
                    {
                        $result = count($list);
                    }
            }
        }
        return $result;
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

    public function get_name_costumer(int $ID): string
    {
        $result = "";
        if ($this->Conectar())
        {
            $query = $this->mysqli->query("select nombre from global_customers where id_cliente = '".$ID."' ");
            if ($query)
            {
                $row = $query->fetch_array();
                $result = $row['nombre'];
            } else {
                $result = "NULL";
            }
        }
        return $result;
    }

    public function get_rand(int $long): string {
        $result = substr(rand(sha1(rand())), 0, $long);
        return  strtoupper($result);
    }

    public function get_payment_costumer(int $ID): string
    {
        $result = 0;
        if ($this->Conectar()) {
            $query = $this->mysqli->query("select cant_pay from global_payment where active_pay = '1' and costumer_pay = '".$ID."' ");
            if ($query)
            {
                if ($query->num_rows > 0)
                {
                    while ($row = $query->fetch_array())
                    {
                        $result += $row['cant_pay'];
                    }
                }
            }
        }
        return  $result;
    }

    public function get_account_costumer(int $ID): string
    {
        $result = 0;
        if ($this->Conectar())
        {
            $query = $this->mysqli->query("select total_acc from global_accounts where active_acc = '1' and iduser_acc = '".$ID."' ");
            if ($query)
            {
                while ($row = $query->fetch_array())
                {
                    $result += $row['total_acc'];
                }
            }
        }
        return $result;
    }

    public function get_name_item(int $ID): string
    {
        $result = "";
        if ($this->Conectar())
        {
            $query = $this->mysqli->query("select name_art from global_article where id_art = '".$ID."'");
            if ($query)
            {
                $row = $query->fetch_array();
                $result = $row['name_art'];
            }
        }
        return $result;
    }

    public function balance_account_costumer(int $ID): string
    {
        $result = 0;
        $total_account = 0; $total_payment = 0;
        try {
            $total_account = $this->get_account_costumer($ID);
            $total_payment = $this->get_payment_costumer($ID);
            if ($total_account > 0 and $total_payment > 0)
            {
                $result = $total_account - $total_payment;
            }
        } catch (Exception $ero) {
            var_dump($ero->getMessage());
        }
        return $result;
    }

    public function create_url(int $cant): array
    {
        $result = [];
        try {
            // Creators URL
            for ($i = 0; $i < $cant; $i++) {
                $rand = strtoupper(substr(md5(rand()), 0, 8));
                $sql = "insert into urls (date_url, url) values ('".date('Y-m-d H:i:s')."', '".$rand."')"; // strtoupper($rand)
                if ($this->exe_query($sql))
                {
                    $result[] = array (
                        "url" => $rand
                    );
                }
            }
        } catch (Exception $er)
        {
            var_dump($er->getMessage());
        }
        return $result;
    }

}