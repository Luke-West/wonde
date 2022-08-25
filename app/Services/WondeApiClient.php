<?php

namespace App\Services;

use GuzzleHttp\Client;

class WondeApiClient
{
    /**
     * @var string
     */
    private $schoolId;

    public function __construct(string $schoolId)
    {
        $this->schoolId = $schoolId;
    }


    protected function doRequest(string $method, string $endpoint, array $json = [])
    {
        $token = env('BEARER_TOKEN');
        $wondeApiUrl = env('WONDE_API_URL');
        $client = new Client();

        try {
            $response = $client->request(
                $method,
                "{$wondeApiUrl}/schools/{$this->schoolId}/{$endpoint}",
                [
                    'headers' => [
                        'Authorization' => "Bearer {$token}",
                    ],
                    'json' => $json,
                ]
            );
        } catch (\Exception $e) {
            echo 'Did you add a valid Employee ID to your user? Caught exception: ',  $e->getMessage(), ".\n\n";
            die();
        }

        return \GuzzleHttp\json_decode($response->getBody()->getContents());
    }

    public function getEmployee(string $wondeUserId)
    {
        return $this->doRequest('GET', "employees/{$wondeUserId}", [
            'include' => 'classes',
        ]);
    }

    public function getClassStudents(string $classId)
    {
        return $this->doRequest('GET', "classes/{$classId}", [
            'include' => 'students',
        ]);
    }
}

