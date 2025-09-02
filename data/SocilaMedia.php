<?php

class SocilaMedia{

}

class Facebook extends SocilaMedia{
    final public function login(string $username, string $password):bool{
        return false;
    }
}

class FakeFacebook extends Facebook{
    // final public function login(string $username, string $password):bool{
    //     return false;
    // }
}