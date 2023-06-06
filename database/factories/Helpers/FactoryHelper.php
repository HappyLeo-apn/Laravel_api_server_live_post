<?php

declare(strict_types=1);

namespace Database\Factories\Helpers;



class FactoryHelper
{
    /**
     * this function will get the random model id from the database
     * getRandomModelId
     *
     * @param  mixed $model
     * @return void
     */
    public static function getRandomModelId(string $model){
        //get model count
        $count = $model::query()->count();
        if($count === 0){
            //if count is 0
            //we should create a new record and retrive the record id
            return $model::factory()->create()->id;
        }
        else {
            return rand(1, $count);
        }
    }
}
