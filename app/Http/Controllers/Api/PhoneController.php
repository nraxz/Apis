<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Phone;


class PhoneController extends Controller
{
    public function showAllPhone()
    {

         $phones = Phone::all();

        /* Test Data for phones */
        /* All Phone numbers can be list un-commenting code below  and adding the comments on $phones above.*/

         /*
          $faker = \Faker\Factory::create();

                for ($i = 1; $i < 11; $i++) {
                    $phones[$i] = ([
                        'id' => $i,
                        'phone' => $faker->phoneNumber,
                        'customer_id' => $faker->numberBetween(1, 10),
                        'isActive' => $faker->randomElement(['Yes', 'No'])
                    ]);


                }
          */


        return response()->json($phones);
    }

    public function ActivateNumber(Request $request){

        $phone = Phone::where('phone', $request->phone)->first();
        $phone->update([
            'isActive' =>'Yes'
        ]);
        return response()->json($phone);


    }

    public function GetAllNumberOfACustumer($customer_id){

        $customer = \App\Customer::findorFail($customer_id);
        $phones = $customer->phones();
        return response()->json($phones);

    }


}

