<?php 
    $pswChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!£$%&?#()+*.=/@[]{}:;';
    function generatePsw($choice){
        if(!empty($_GET['pswLength'])){
            $pswLength = $_GET['pswLength'];
            $newPsw = '';
            while (strlen($newPsw) < $pswLength){
                $pswIndex = rand(8, strlen($choice) - 1);
                $pswChar = $choice[$pswIndex];
                if (!str_contains($newPsw, $pswChar)){  
                    $newPsw .= $pswChar;
                }
            }
            return $newPsw;
        }
        
    }
    // $newPsw = generatePsw($pswChars);