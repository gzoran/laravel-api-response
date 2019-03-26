<?php

namespace Gzoran\ApiResponse;

use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Api response trait
 *
 * @author Mike <zhengzhe94@gmail.com>
 */
trait ApiResponseTrait
{
    protected static $message = 'message';

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param null $data
     * @param int $status
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function response($data = null, int $status = 200, array $headers = [])
    {
        return response()->json($data, $status, $headers, JSON_PRETTY_PRINT);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return array|\Illuminate\Http\Response
     */
    protected function ok($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'OK'
            ];
        }

        if ($data instanceof ResourceCollection) {
            return $data;
        }

        return $this->response($data, 200, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function created($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Created'
            ];
        }

        return $this->response($data, 201, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function accepted(array $headers = [])
    {
        return $this->response(null, 202, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function notContent(array $headers = [])
    {
        return $this->response(null, 204, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function badRequest($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Bad Request'
            ];
        }

        return $this->response($data, 400, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function unauthorized($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Unauthorized'
            ];
        }

        return $this->response($data, 401, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function forbidden($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Forbidden'
            ];
        }

        return $this->response($data, 403, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function notFound($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Not Found'
            ];
        }

        return $this->response($data, 404, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function methodNotAllowed($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Method Not Allowed'
            ];
        }

        return $this->response($data, 405, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function notAcceptable($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Not Acceptable'
            ];
        }

        return $this->response($data, 406, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function requestTimeout($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Request Timeout'
            ];
        }

        return $this->response($data, 408, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function gonfilct($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Gonfilct'
            ];
        }

        return $this->response($data, 409, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function gone($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Gone'
            ];
        }

        return $this->response($data, 410, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function payloadTooLarge($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Payload Too Large'
            ];
        }

        return $this->response($data, 413, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function requestURITooLong($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Request-URI Too Long'
            ];
        }

        return $this->response($data, 414, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function unsupportedMediaType($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Unsupported Media Type'
            ];
        }

        return $this->response($data, 415, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function unprocessableEntity($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Unprocessable Entity'
            ];
        }

        return $this->response($data, 422, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function tooManyRequest($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Too Many Request'
            ];
        }

        return $this->response($data, 429, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function internalServerError($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Internal Server Error'
            ];
        }

        return $this->response($data, 500, $headers);
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\Response
     */
    protected function serviceUnavailable($data = [], array $headers = [])
    {
        if (empty($data)) {
            $data = [
                static::$message => 'Service Unavailable'
            ];
        }

        return $this->response($data, 503, $headers);
    }
}
