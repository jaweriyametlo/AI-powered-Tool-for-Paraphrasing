<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DescriptionService
{
    public function __construct()
    {
        // Constructor code if needed
    }

    public function getDescription($tabIdDesc, $language)
    {
      $imageOneDesc = config('custom-contents.tabs.tab1.description');  
      $imageTwoDesc = config('custom-contents.tabs.tab2.description');
      $imageThreeDesc = config('custom-contents.tabs.tab3.description');
      $imageFourDesc = config('custom-contents.tabs.tab4.description');
      $imageFiveDesc = config('custom-contents.tabs.tab5.description');

      switch ($tabIdDesc) {
          case 'tab1-desc':
              return $this->paraphraseTextService($imageOneDesc, $language);
          case 'tab2-desc':
              return $this->paraphraseTextService($imageTwoDesc, $language);
          case 'tab3-desc':
              return $this->paraphraseTextService($imageThreeDesc, $language);
          case 'tab4-desc':
              return $this->paraphraseTextService($imageFourDesc, $language);
          case 'tab5-desc':
              return $this->paraphraseTextService($imageFiveDesc, $language);
          default:
              return "No description available for the provided text.";
      }
    }

    // Private function to call OpenRouter API
    private function paraphraseTextService($text, $language)
    {
        try {
            $apiKey = config('custom-contents.openrouter_apikey');
            $baseUrl = "https://openrouter.ai/api/v1";
            $message = "Can you paraphrase the following text in $language: '$text'";

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type'  => 'application/json',
                'HTTP-Referer'  => env('APP_URL', 'http://localhost:8000'),
                'X-Title'       => env('APP_NAME', 'LaravelApp'),
            ])->post($baseUrl . "/chat/completions", [
                "model" => "openai/gpt-3.5-turbo",
                "messages" => [
                    [
                        "role" => "user",
                        "content" => $message
                    ]
                ]
            ]);

            Log::info('API Response:', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->successful()) {
                $paraphrasedText = $response->json()['choices'][0]['message']['content'];
                return [
                    'status' => 'success',
                    'paraphrasedText' => $paraphrasedText,
                ];
            }

            return [
                'status' => 'error',
                'message' => 'Failed to paraphrase the text. Please try again later.',
            ];
        } catch (\Exception $e) {
            // Handle exceptions (network issues, invalid API key, etc.)
            return [
                'status' => 'error',
                'message' => 'An error occurred: ' . $e->getMessage(),
            ];
        }
    }



}