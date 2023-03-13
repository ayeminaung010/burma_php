<?php

    class ZeroException extends Exception{}
    class OneException extends Exception{}
    class TwoException extends Exception{}


    $x = 2;

    try{

        if($x <= 0){
            throw new ZeroException('error 0 /',500);
        }if($x <= 1){
            throw new OneException('error 1 /',500);
        }if($x <= 2){
            throw new TwoException('error 2 /' ,500);
        }else {
            echo $x;
        }

    }catch(ZeroException $e){
        // var_dump($e);
        echo $e->getMessage() . ''.$e->getCode().' '.'Line No:' . $e->getLine() . ' '.$e->getFile();
    }catch(OneException $e){
        // var_dump($e);
        echo $e->getMessage() . ''.$e->getCode().' '.'Line No:' . $e->getLine() . ' '.$e->getFile();
    }catch(TwoException $e){
        // var_dump($e);
        echo $e->getMessage() . ''.$e->getCode().' '.'Line No:' . $e->getLine() . ' '.$e->getFile();
    }catch(Exception $e){
        // var_dump($e);
        echo $e->getMessage() . ''.$e->getCode().' '.'Line No:' . $e->getLine() . ' '.$e->getFile();
    }
?>