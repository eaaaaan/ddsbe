<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
	public function successResponse($data, $code = Response::HTTP_OK)
	{
<<<<<<< HEAD
		return response()->json(['data' => $data,'site' => 1], $code);
=======
		return response()->json(['data' => $data,'site' => 2], $code);
>>>>>>> 9e58d759ebfef80834c71f48804685a320301dfc
	}

	public function errorResponse($message,$code)
	{
<<<<<<< HEAD
		return response()->json(['error' => $message,'site' => 1, 'code' => $code], $code);
=======
		return response()->json(['error' => $message,'site' => 2,'code' => $code], $code);
>>>>>>> 9e58d759ebfef80834c71f48804685a320301dfc
	}


}