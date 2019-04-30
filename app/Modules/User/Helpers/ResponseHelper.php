<?php
namespace App\Modules\User\Helpers;
use Illuminate\Http\Request;
use Curl;
use Response;

class ResponseHelper
{
    
    public static function jsonSuccess($data=[])
    {
        $response = [
                        'code'      => '200',
                        'status'    => 'US200',
                        'data'      => $data, 
                        'message'   => "Connection Ok",
                        'links'     => array(
                                            'rel' => 'self',
                                            'href' => ''
                                            )
                    ];
        return Response::json($response);
    }   
    public static function jsonFailed($data=[])
    {
        $response = [
                        'code'      => '400',
                        'status'    => 'US400',
                        'data'      => $data, 
                        'message'   => "Error"
                    ];
       return Response::json($response);
    }   
    public static function jsonLogOut($data=[])
    {
        $response = [
                        'code'      => '204',
                        'status'    => 'US204',
                        'data'      => $data, 
                        'message'   => "Logout"
                    ];
        return Response::json($response);
        
    }
}