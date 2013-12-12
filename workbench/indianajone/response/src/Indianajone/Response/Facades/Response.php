<?php namespace Indianajone\Response\Facades;
 
use Illuminate\Support\Facades\Response as BaseResponse;
 
class Response extends BaseResponse {

  	function __construct()
  	{	

  	}
 
  	public static function json_api($status, $data, $offset, $limit)
    {
    	// $data = null, $status = 200, $headers = array()
        return new \Symfony\Component\HttpFoundation\JsonResponse([
        	'header'=> [
        		'code'=> $status['code'],
        		'message'=>$status['message']
        	],
        	'offset'=> $offset,
        	'limit'=> $limit,
        	'total'=> $data->count(),
        	'entries'=> $data->toArray()
        ], 200);
    }
 
}