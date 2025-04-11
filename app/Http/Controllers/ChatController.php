<?php

namespace App\Http\Controllers;

use App\Services\DescriptionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function paraphrase(Request $request)
    {
        $tabIdDesc = $request->input('tabId_desc');
        $text = $request->input('text');
        $language = $request->input('language');

        // $response = $this->paraphraseTextService($text, $language);

        $response = (new DescriptionService())->getDescription($tabIdDesc, $language);

        if ($response['status'] === 'error') {
            return response()->json([
                'status' => 'error',
                'message' => $response['message'],
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'paraphrasedText' => $response['paraphrasedText'],
        ]);
    }

    public function getTabContent()
    {
        $tabsData = [
            'tab1' => [
                'image' => asset(config('custom-contents.tabs.tab1.image')),
                'description' => config('custom-contents.tabs.tab1.description')
            ],
            'tab2' => [
                'image' => asset(config('custom-contents.tabs.tab2.image')),
                'description' => config('custom-contents.tabs.tab2.description')
            ],
            'tab3' => [
                'image' => asset(config('custom-contents.tabs.tab3.image')),
                'description' => config('custom-contents.tabs.tab3.description')
            ],
            'tab4' => [
                'image' => asset(config('custom-contents.tabs.tab4.image')),
                'description' => config('custom-contents.tabs.tab4.description')
            ],
            'tab5' => [
                'image' => asset(config('custom-contents.tabs.tab5.image')),
                'description' => config('custom-contents.tabs.tab5.description')
            ]
        ];

        return response()->json([
            'status' => 'success',
            'tabs' => $tabsData
        ]);
    }









    

    public function chat()
    {
        $apiKey = "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";

        $baseUrl = "https://openrouter.ai/api/v1";
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type'  => 'application/json',
            'HTTP-Referer'  => env('APP_URL', 'http://localhost:8000'), // Optional
            'X-Title'       => env('APP_NAME', 'LaravelApp'), // Optional
        ])->post($baseUrl . "/chat/completions", [
            //"model" => "deepseek/deepseek-r1:free",
            "model" => "openai/gpt-3.5-turbo",
            //"model" => "google/gemma-3-4b-it:free",
            // "model" => "mistralai/mistral-7b-instruct",
            "messages" => [
                [
                    "role"    => "user",
                    "content" => "Can you convert it to bangla 'Can I ask you few quesitons?'"
                ]
            ]
        ]);

        return $response->json();
    }


    public function chatGPTchat()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'Content-Type'  => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => 'Hi, what is your name?'],
            ],
            'temperature' => 0.7,
            'max_tokens' => 150,
        ]);

        return $response;

        $chatResponse = $response->json()['choices'][0]['text'] ?? 'Sorry, I could not understand that.';

        return response()->json(['message' => $chatResponse]);
    }
}
