# Dynamic AI-powered Tool for Paraphrasing Descriptive Content

This project is a **web-based platform** developed using **Laravel 12**, which integrates an AI-powered tool for paraphrasing descriptive content associated with visual analytics. The application allows users to interact with **analytical images** and generate paraphrased descriptions in multiple languages using **OpenAI’s GPT-3.5-turbo** model via the **OpenRouter.ai** API. The tool focuses on enhancing accessibility and understanding for users, especially non-native English speakers, by providing intelligent paraphrasing of descriptive content.

## Features

- **Analytical Images**: Displays charts and graphs generated from the meteorite landing dataset (e.g., maps, time series, bar charts, box plots).
- **AI-Powered Paraphrasing**: Allows users to paraphrase descriptions using the GPT-3.5-turbo model.
- **Multilingual Support**: Paraphrasing in multiple languages for broader accessibility.
- **No Database**: The application operates without a database and does not require additional server-side storage.

## Prerequisites

To run this project locally, ensure you have the following installed:

- **PHP 8.2 or higher** (Laravel 12 requires this version)
- **Composer** (for managing Laravel dependencies)
- **Laravel 12** (this project is built with the Laravel framework)

## Installation

Follow these steps to set up the project:

1. Clone the repository:
   ```bash
   git clone https://github.com/jaweriyametlo/AI-powered-Tool-for-Paraphrasing.git
   cd AI-powered-Tool-for-Paraphrasing

2. Install PHP dependencies using Composer:
    ```bash
      composer install
3. Configure your .env file for API keys:
  Set your OpenRouter.ai API key in the .env file. For example:
      ```env
      OPENROUTER_API_KEY=your-api-key-here
4. Generate application key (Laravel requires an app key):
    ```bash
    php artisan key:generate
5. Serve the application locally:
    ```bash
    php artisan serve
6. Open the application in your browser:
      - Go to http://localhost:8000 to view the platform.

## Usage
- Upon launching the application, users can view home page and various menu for  analytical charts (maps, time series graphs, bar charts, box plots) generated from the meteorite landing dataset.

- Users can then select the chart description and use the paraphrasing tool to reword the description.

- The paraphrased content is generated in real-time, and users can choose to view the description in different languages.
## Future Enhancements
- User Authentication: Add authentication features to track user interactions and preferences.
- Advanced Paraphrasing Features: Implement options for grammar correction and content summarization.
- Data Visualization Options: Integrate additional charting libraries for enhanced data visualization.