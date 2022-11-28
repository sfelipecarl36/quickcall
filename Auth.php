<?php
    $ldaprdn  = $_POST["username"];
    $ldappass = $_POST["password"];
    echo 'Usuário: '.$ldaprdn.'<br>';
    // echo 'Senha: '.$ldappass.'<br><br>';

if ($ldapconn = ldap_connect("172.16.0.11", 389)) 
{
    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);

    echo 'Conexão com LDAP feita!<br>';
    if (ldap_bind($ldapconn, $ldaprdn.'@'.'IDEFLOR', $ldappass))
    {
        echo "<br>LDAP bind successful...<br>";
    }
    else 
    {
        echo "<br>LDAP bind failed...<br>";
    }
}

//$Result = ldap_search($ldapconn, "dc=IDEFLOR", "(sAMAccountType=805306368)", array("dn")); Busca todos os usuários do Domínio 
$Result = ldap_search($ldapconn, "dc=IDEFLOR", "(|(sAMAccountType=805306368)(samaccountname=".$ldaprdn."))", array("dn"));
$data = ldap_get_entries($ldapconn, $Result);
print_r($data);

?>

<?php

// $domain = 'IDEFLOR';
// $username = $_POST["username"];
// $password = $_POST["password"];
// $ldapconfig['host'] = '172.16.0.11';
// $ldapconfig['port'] = 389;
// $ldapconfig['basedn'] = 'dc=domain,dc=com';

// $ds=ldap_connect($ldapconfig['host'], $ldapconfig['port']);
// ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
// ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);

// $dn=$ldapconfig['basedn'];
// $bind=ldap_bind($ds, $username .'@' .$domain, $password);
// $Result = ldap_search($bind,$dn,'(&(objectClass=User)(sAMAccountName=' . $username. '))');
// if ($isITuser) {
//     echo("Login correct");
//     $data = ldap_get_entries($ldapconn, $Result);
//     print_r($data);
// } else {
//     echo("Login incorrect");
// }

?>
