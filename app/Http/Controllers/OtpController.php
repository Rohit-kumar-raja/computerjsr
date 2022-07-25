<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{

    function register(Request $request)
    {


        $uesr_phone = User::where('phone', $request->phone)->first();
        if ($uesr_phone == '') {
            $uesr_data = User::where('email', $request->email)->first();
            if ($uesr_data == '') {
                if (strlen($request->password) >= 8) {
                    if ($request->password === $request->password_confirmation) {
                        session(['login_input' => $request->input()]);
                        $details = [
                            'title' => 'Mail from quicksecureindia.com',
                        ];
                        $this->optSend($request->phone);
                        Mail::to($request->email)->send(new \App\Mail\OtpSend($details));

                        return view('auth.varify-mobile-otp');
                    } else {
                        return redirect()->back()->withErrors('Password not Matched')->with($request->input());
                    }
                } else {
                    return redirect()->back()->withErrors('Password must be 8 character or more')->with($request->input());

                }
            } else {
                return redirect()->back()->withErrors('Email address alredy Exits')->with($request->input());
            }
        } else {
            return redirect()->back()->withErrors('Phone number alredy Exits')->with($request->input());
        }
    }
    function optSend($mobileNumber)
    {
        $otp = rand('100000', '999999');
        session(['otp' => $otp]);
        //Your authentication key
        $authKey = "19992Amzkw2mj0T624fe79bP15";
        //Multiple mobiles numbers separated by comma
        $mobileNumber = $mobileNumber;
        //Sender ID,While usi
        $senderId = "CPTSOL";
        $country = "91";
        $DLT_TE_ID = "1207164940295292128";
        //Your message to send, Add URL encoding here.
        $message = 'Your Computer Solution log in OTP is'  . $otp;
        //Define route 
        $route = "4";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'country' => $country,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'DLT_TE_ID' => $DLT_TE_ID,
            'route' => $route
        );
        //API URL
        $url = "http://bulksms.insightinfosystem.com/api/sendhttp.php";
        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));


        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        //get response
        $output = curl_exec($ch);

        //Print error if any
        if (curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
        //	echo "<script>window.location.href='verify.php'</script>"; 


    }
    function orderMassage($mobileNumber, $order_id)
    {

        //Your authentication key
        $authKey = "19992Amzkw2mj0T624fe79bP15";
        //Multiple mobiles numbers separated by comma
        $mobileNumber = $mobileNumber;
        //Sender ID,While usi
        $senderId = "QCKSPT";
        $country = "91";
        $DLT_TE_ID = "1207164984377894053";
        //Your message to send, Add URL encoding here.
        $message = 'Thank you ! your order ' . $order_id . 'is placed successfully. You can track your order and find current status, please log in  Quick secure India account  https://bit.ly/3E7uCbE';
        //Define route 
        session(['massage' => $message]);

        $route = "4";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'country' => $country,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'DLT_TE_ID' => $DLT_TE_ID,
            'route' => $route
        );
        //API URL
        $url = "http://bulksms.insightinfosystem.com/api/sendhttp.php";
        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));


        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        //get response
        $output = curl_exec($ch);

        //Print error if any
        if (curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
        //	echo "<script>window.location.href='verify.php'</script>"; 

    }


    function verifyOtp(Request $request)
    {
        $otp = $request->otp;
        if ($otp == session('otp')) {

            $input = session('login_input');

            try {
                $user =  User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'phone' => $input['phone'],
                    'password' => Hash::make($input['password']),
                ]);
                Auth::login($user);
                return redirect(RouteServiceProvider::HOME);
            } catch (Exception $e) {
                return redirect()->route('login')->withErrors('Data Already exits please login ');
            }
        }
    }
}
