<?php

namespace Calamo\HTTP\Helpers;

enum HTTPRequestMehod: string  {
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
}