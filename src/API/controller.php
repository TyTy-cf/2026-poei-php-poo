<?php


function getBody(): string
{

}


/**
 * @param string $method the expected HTTP Method (GET, POST, PUT, PATCH, DELETE)
 * @return bool true if it is the same
 */
function isMethod(string $method): bool
{
    return $_SERVER['REQUEST_METHOD'] === $method;
}

/**
 * @param int $code the expected error code
 * @param string|null $message the message if needed
 * @return void
 */
function setErrorResponse(int $code, ?string $message = null): void
{
    setHeader( 400);
    if ($message) {
        echo $message;
    }
}

/**
 * @param mixed $data the data to encode and displayed
 * @return void
 */
function setJsonResponse(mixed $data): void
{
    echo json_encode($data);
}

/**
 * @param int $code the returned HTTP code, default is 200
 * @param string $header the default content-type, by default it is JSON
 * @return void
 */
function setHeader(int $code = 200, string $header = 'Content-Type: application/json; charset=utf-8'): void
{
    header(
        'Content-Type: application/json; charset=utf-8',
        false,
        $code
    );

}