<?php
/**
 * Created by Mike <zhengzhe94@gmail.com>.
 * Date: 2019/3/26
 * Time: 17:15
 */

namespace Gzoran\ApiResponse\Tests;

use Gzoran\ApiResponse\DemoController;
use PHPUnit\Framework\TestCase;

class DemoControllerTest extends TestCase
{
    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testOk()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'OK'], 200, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->ok());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testCreated()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Created'], 201, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->created());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testAccepted()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(null, 202, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->accepted());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testNotContent()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(null, 204, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->notContent());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testBadRequest()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Bad Request'], 400, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->badRequest());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testUnauthorized()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Unauthorized'], 401, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->unauthorized());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testForbidden()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Forbidden'], 403, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->forbidden());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testNotFound()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Not Found'], 404, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->notFound());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testMethodNotAllowed()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Method Not Allowed'], 405, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->methodNotAllowed());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testNotAcceptable()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Not Acceptable'], 406, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->notAcceptable());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testRequestTimeout()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Request Timeout'], 408, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->requestTimeout());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testGonfilct()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Gonfilct'], 409, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->gonfilct());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testGone()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Gone'], 410, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->gone());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testPayloadTooLarge()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Payload Too Large'], 413, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->payloadTooLarge());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testRequestURITooLong()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Request-URI Too Long'], 414, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->requestURITooLong());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testUnsupportedMediaType()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Unsupported Media Type'], 415, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->unsupportedMediaType());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testUnprocessableEntity()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Unprocessable Entity'], 422, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->unprocessableEntity());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testTooManyRequest()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Too Many Request'], 429, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->tooManyRequest());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testInternalServerError()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Internal Server Error'], 500, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->internalServerError());
    }

    /**
     * @author Mike <zhengzhe94@gmail.com>
     */
    public function testServiceUnavailable()
    {
        $controller = \Mockery::mock(DemoController::class)->makePartial();

        $controller->shouldAllowMockingProtectedMethods()
            ->expects()
            ->response(['message' => 'Service Unavailable'], 503, [])
            ->andReturn(['success' => true]);

        $this->assertSame(['success' => true], $controller->serviceUnavailable());
    }
}