<?php

//NOMOR 1 Membuat class dan fungsi untuk generate token

class TokenManager{

    private $tokens=[];
    public function generate($user){
        $token = bin2hex(random_bytes(16));
        $this->tokens[$user][]=$token;
        if(count($this->tokens[$user])>10){
            array_shift($this->tokens[$user]);
        }
        return $token;
    }

    public function verify($user, $token){
        if(isset($this->tokens[$user])){
            if(($key = array_search($token, $this->tokens[$user]))!== false){
                unset($this->tokens[$user][$key]);
                return true;
            }
        }return false;
    }

}

// Memanggil dan menjalankan fungsi
$tokenManager = new TokenManager();
$user = "Firman_kurnia";
$token1 = $tokenManager->generate($user);
$token2 = $tokenManager->generate($user);

echo "Generate token: $token1, $token2";
$verifikasi1 = $tokenManager->verify($user,$token1);
$verifikasi2 = $tokenManager->verify($user,$token2);

echo "Token 1 Verifikasi :" . ($verifikasi1 ? "True" : "False"). "\n";
echo "Token 2 Verifikasi :" . ($verifikasi2 ? "True" : "False"). "\n";