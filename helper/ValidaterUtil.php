<?php

class ValidaterUtil{
    static function validate(LoginRequest $request){
        if(!isset($request->username)){
            throw new ValidationException("username is null");
        }elseif(!isset($request->password)){
            throw new ValidationException(("passowrd is null"));
        }
    }

    static function validateRefecltion($request){
        $reflcetion = new ReflectionClass($request);
        $properties = $reflcetion->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach($properties as $property){
            if(!$property->isInitialized($request)){
                throw new ValidationException("$property->name is not set");
            }else if(is_null($property->getValue($request))){
                throw new ValidationException("$property->name is null");
            }
        }
    }
}