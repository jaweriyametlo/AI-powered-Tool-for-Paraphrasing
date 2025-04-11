<?php


return [
    'openrouter_apikey' => env('OPENROUTER_API_KEY', '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'),
    'tabs' =>
      [
        'tab1' => [
          'image' => '/assets/images/analytics/map.png',
          'description' => 'The map displays global meteorite finds and falls, color-coded by year from 860 to 2162. High concentrations are observed in regions like the central United States, Europe, Northwest Africa, and Australia, likely due to a combination of population density, scientific infrastructure, and favorable terrain for meteorite recovery. More recent discoveries, shown in green, dominate the map, reflecting advances in detection and documentation methods. In contrast, older events appear sparsely, mainly in Europe and parts of Asia. The uneven distribution suggests that data is influenced more by human activity and accessibility than by actual meteorite fall frequency.'
        ],
        'tab2' => [
            'image' => '/assets/images/analytics/timeseries.png',
            'description' => "This time series graph illustrates the number of meteorites recorded each year from around 1968 to 2015. Although the data shows considerable year-to-year fluctuation, there's a clear overall upward trend, as indicated by the dotted trendline. Spikes in the late 1970s, late 1980s, and early 2000s suggest periods of increased discovery or reporting. Notably, there is a sharp decline after 2010, which may reflect a lag in data reporting or changes in record-keeping rather than an actual drop in meteorite occurrences. The general rise over the decades likely reflects improved detection technology, growing interest in meteoritics, and better documentation."
        ],
        'tab3' => [
            'image' => '/assets/images/analytics/barchart.png',
            'description' => "The bar chart displays the top ten heaviest meteorites discovered, ranked by their mass in grams. Hoba is by far the heaviest, weighing in at approximately 60 million grams, significantly exceeding the mass of the other meteorites. Cape York is the second heaviest, with a mass of around 58 million grams. The majority of these massive meteorites are classified as iron meteorites, with different subgroups represented by varying colors. Notably, the top three heaviest meteorites belong to distinct iron meteorite classifications (Iron, IVB; Iron, IIIAB; and Iron, IAB-MG), indicating that significant mass can be found across different iron meteorite types. The remaining meteorites show a general trend of decreasing mass, with the tenth heaviest, Willamette, having a mass of just over 15 million grams."
        ],
        'tab4' => [
            'image' => '/assets/images/analytics/boxplot.png',
            'description' => "This box plot presents the same data on the heaviest meteorites but uses a different chart type, likely a form of connected scatter plot or a custom visualization. It still clearly identifies Hoba and Cape York as the most massive meteorites, positioned at the top with masses around 60 million and 58 million grams, respectively. Campo del Cielo follows as the third heaviest, around 50 million grams. The chart then visually groups the remaining meteorites within certain mass ranges. For instance, there's a cluster around the 25-30 million gram mark, including Canyon Diablo, Gibeon, Armanty, and Chupaderos. Another grouping appears lower down, indicating meteorites with masses between roughly 15 and 25 million grams, such as Sikhote-Alin, Mundrabilla, Bacubirito, and Mbosi. Finally, Willamette is shown as the least massive among the top twelve, with a mass slightly above 15 million grams. This representation emphasizes the relative differences in mass and potential groupings among the heavier meteorites beyond the top few."
        ],
        'tab5' => [
            'image' => '/assets/images/analytics/piechart.png',
            'description' => "The pie chart illustrates the distribution of common meteorite classifications. The most prevalent classification shown is L6, making up 22% of the represented meteorites. Following this, L5 accounts for 16%, and both H5 and H6 each represent 12% of the total. Other notable classifications include LL5 at 8% and LL6 at 7%. The remaining classifications, CM2, H4, and H4/5, each constitute a smaller fraction, at 1% each. Overall, the chart highlights that L and H chondrites are the most frequently found types among these common meteorite classifications."
        ]
      ]
  ];
