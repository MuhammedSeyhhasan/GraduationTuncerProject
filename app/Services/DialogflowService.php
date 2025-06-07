<?php


namespace App\Services;

use Google\Cloud\Dialogflow\V2\SessionsClient;
use Google\Cloud\Dialogflow\V2\TextInput;
use Google\Cloud\Dialogflow\V2\QueryInput;



class DialogflowService
{
    protected $projectId;
    protected $credentialsPath;

    public function __construct()
    {
        $this->projectId = 'newagent-x9rr';
        $this->credentialsPath = public_path('dialogflow/newagent-x9rr-000e1a5d5a61.json');
       
    }

    public function detectIntent($sessionId, $text, $languageCode = 'tr-TR')
    {
        $clientOptions = ['credentials' => $this->credentialsPath];
        $client = new SessionsClient($clientOptions);
        $session = $client->sessionName($this->projectId, $sessionId);

        try {
            // Prepare text input
            $textInput = new TextInput();
            $textInput->setText($text);
            $textInput->setLanguageCode($languageCode);

            // Build query input
            $queryInput = new QueryInput();
            $queryInput->setText($textInput);

            // Detect intent
            $response = $client->detectIntent($session, $queryInput);
            $queryResult = $response->getQueryResult();

            return [
                'intent' => $queryResult->getIntent()->getDisplayName(),
                'confidence' => $queryResult->getIntentDetectionConfidence(),
                'fulfillment_text' => $queryResult->getFulfillmentText(),
                'parameters' => json_decode($queryResult->getParameters()->serializeToJsonString(), true),
            ];
        } finally {
            $client->close();
        }
    }
}