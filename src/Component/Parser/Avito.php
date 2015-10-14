<?php

namespace Prsr\Component\Parser;

use Curl\Curl;

class Avito
{
    const QUERY_GET_PARAM = 'q';

    protected $userAgents = [
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36',
        'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36',
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/600.8.9 (KHTML, like Gecko) Version/8.0.8 Safari/600.8.9',
        'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0',
    ];
    protected $queries = [
        'balalaika',
        'электронное пианино',
    ];
    protected $origins = [
        'http://avito.ru/moskva',
    ];

    public function parse()
    {
        $curl = new Curl;

        foreach ($this->origins as $origin) {
            foreach ($this->queries as $query) {
                shuffle($this->userAgents);

                $curl->reset();
                $curl->setUserAgent($this->userAgents[0]);
                $curl->setOpt(CURLOPT_RETURNTRANSFER, true);
                $curl->get($origin, [self::QUERY_GET_PARAM => $query]);

                var_dump($curl->response);
            }
        }
    }
}