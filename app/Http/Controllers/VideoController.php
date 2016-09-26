<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{

    public function index(){
      try {

        if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }

      } catch (TokenExpiredException $e) {

          return response()->json(['token_expired'], $e->getStatusCode());

      } catch (TokenInvalidException $e) {

          return response()->json(['token_invalid'], $e->getStatusCode());

      } catch (JWTException $e) {

          return response()->json(['token_absent'], $e->getStatusCode());

      }
      return \App\Video::paginate(20);
    }

    public function store(Request $request){
      try {

        if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }

      } catch (TokenExpiredException $e) {

          return response()->json(['token_expired'], $e->getStatusCode());

      } catch (TokenInvalidException $e) {

          return response()->json(['token_invalid'], $e->getStatusCode());

      } catch (JWTException $e) {

          return response()->json(['token_absent'], $e->getStatusCode());

      }

        $rules = array(
            'title'       => 'required',
            'video_length' => 'required|date_format:H:i:s',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return response()->json(['message' =>'fields_are_not_correct'], 500);
        }
        $video = new \App\Video;

        $video->title = $request->get('title');
        $video->description = $request->get('description');
        $video->video_length = $request->get('video_length');

        if($video->save(['timestamps' => false]))
            return response()->json(['message' => 'created_successfully'], 200);
        else
            return response()->json(['message' => 'could_not_create_video'], 500);

    }

    public function destroy($id){

      try {

        if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }

      } catch (TokenExpiredException $e) {

          return response()->json(['token_expired'], $e->getStatusCode());

      } catch (TokenInvalidException $e) {

          return response()->json(['token_invalid'], $e->getStatusCode());

      } catch (JWTException $e) {

          return response()->json(['token_absent'], $e->getStatusCode());

      }

      $video = \App\Video::where('indexer', $id);

      if($video->delete())
          return response()->json(['message' => 'deleted_successfully'], 200);
      else
          return response()->json(['message' => 'could_not_delete_video'], 500);

    }

    public function show($id){
      try {

        if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }

      } catch (TokenExpiredException $e) {

          return response()->json(['token_expired'], $e->getStatusCode());

      } catch (TokenInvalidException $e) {

          return response()->json(['token_invalid'], $e->getStatusCode());

      } catch (JWTException $e) {

          return response()->json(['token_absent'], $e->getStatusCode());

      }

      $video = \App\Video::where('indexer', $id)->get();

      if($video)
            return response()->json($video->toArray(), 200);
        else
            return response()->json(['message' => 'video_not_found'], 404);

    }
    public function update(Request $request, $id){
      try {

        if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }

      } catch (TokenExpiredException $e) {

          return response()->json(['token_expired'], $e->getStatusCode());

      } catch (TokenInvalidException $e) {

          return response()->json(['token_invalid'], $e->getStatusCode());

      } catch (JWTException $e) {

          return response()->json(['token_absent'], $e->getStatusCode());

      }
      $video = \App\Video::where('indexer', $id);
      $rules = array(
          'title'       => 'required',
          'video_length' => 'required|date_format:H:i:s',
      );
      $validator = Validator::make($request->all(), $rules);

      // process the login
      if ($validator->fails()) {
          return response()->json(['message' =>'fields_are_not_correct'], 500);
      }

      $video->title = $request->get('title');
      $video->description = $request->get('description');
      $video->video_length = $request->get('video_length');

      if($video->save(['timestamps' => false]))
          return response()->json(['message' => 'updated_successfully'], 200);
      else
          return response()->json(['message' => 'could_not_update_video'], 500);
    }

    public function search($term){
      try {

        if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }

      } catch (TokenExpiredException $e) {

          return response()->json(['token_expired'], $e->getStatusCode());

      } catch (TokenInvalidException $e) {

          return response()->json(['token_invalid'], $e->getStatusCode());

      } catch (JWTException $e) {

          return response()->json(['token_absent'], $e->getStatusCode());

      }
      //$videos = \App\Video::where('title', 'LIKE', '%'.$term.'%')->get();
      //
      $videos = \App\Video::where(function ($query) use ($term) {
          $query->where('title', 'LIKE', '%'.$term.'%')
                ->orWhere('description', 'LIKE', '%'.$term.'%');
      })->get();

      if($videos)
          return response()->json($videos->toArray(), 200);
      else
          return response()->json(['message' => 'video_not_found'], 404);
    }
}
