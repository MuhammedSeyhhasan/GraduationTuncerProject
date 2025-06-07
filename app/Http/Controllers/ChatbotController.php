<?php

namespace App\Http\Controllers;

use App\Services\DialogflowService;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    protected $dialogflow;

    public function __construct()
    {
        $this->dialogflow = new DialogflowService();
    }

    public function sendToBot(Request $request)
    {
        try {
            $message = $request->input('message');
            $sessionId = uniqid();

            $result = $this->dialogflow->detectIntent($sessionId, $message);

            return response()->json([
                'intent' => $result['intent'],
                'reply' => $result['fulfillment_text'],
                'confidence' => $result['confidence'],
                'parameters' => $result['parameters'],
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Bir Hata oluştu',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}